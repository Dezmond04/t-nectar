<?php
$count = $_POST['count'];
if ($count < 1) $count = 1;
else if ($count > 2) $count = 2;

$payMethod = $_POST['paymethod'];
if ($payMethod == 'later') {
    define('MAIL', [
        'aenergissimo@gmail.com',
        'aleksandr.radchenko.2000@mail.ru'
    ]);
    define('SENDER', 'no-reply@t-nectar.ae');
    $message = 'Количество: ' . $count . '<br>';
    if ($count == 1) {
        $message .= $_POST['name'] . '<br>';
    } else {
        $message .= 'Имя мужчины: ' . $_POST['male_name'] . '<br>';
        $message .= 'Имя женщины' . $_POST['female_name'] . '<br>';
    }

    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: " . SENDER . " \r\n";
    $headers .= "Reply-To: " . SENDER . " \r\n";

    foreach (MAIL as $mail) {
        mail($mail, 'Заявка', $message, $headers);
    }

    echo 'https://t-nectar.ae?success=1';
    exit;
}

$headers = [
    'accept: application/json',
    'content-Type: application/json'
];
$curl = curl_init();

$amount = $count == 1 ? 3000 : 5000;

$customData = ['phone' => $_POST['phone']];
if ($count == 1) {
    $customData['name'] = $_POST['name'];
    $customData['sex'] = $_POST['sex'];
} else {
    $customData['male_name'] = $_POST['male_name'];
    $customData['female_name'] = $_POST['female_name'];
}
if ($payMethod !== 'RUB') {
    $url = "https://business.mamopay.com/manage_api/v1/links";
    $url = 'https://asia-southeast2-mamo-pay-business-staging.cloudfunctions.net/api-sandbox-links';
    $apiKey = 'sk-56ef4ae3-62e4-4beb-8873-8363253d6eb5';
    $headers[] = 'Authorization: ' . $apiKey;

    $data = [
        'name' => 'T-Nectar',
        'return_url' => 'https://t-nectar.ae/?success=1',
        'amount' => $amount,
        'enable_message' => false,
        'description' => 'test description',
        'enable_tips' => false,
        'enable_customer_details' => false,
        'enable_qr_code' => true,
        'send_customer_receipt' => true,
        'custom_data' => [
            'customer_name' => 'customer name'
        ],
        'active' => true,
        'capacity' => 1
    ];
} else {
    $url = 'https://api.yookassa.ru/v3/payments';
    $apiKey = 'test_T3cB6ihDXf16yJVyUCUrXnsW7-lFbJ0fCne1_T4qMeE';
    $headers[] = 'Idempotence-Key: ' . base64_encode(mt_rand(100000, 999999999));

    curl_setopt($curl, CURLOPT_USERPWD, "985065:" . $apiKey);

    $amount *= 20;
    $description = $customData['phone'] . '. ';
    if (!empty($customData['name'])) $description .= $customData['name'];
    else $description .= $customData['male_name'] . ', ' . $customData['female_name'];

    $data = [
        'amount' => [
            'value' => $amount,
            'currency' => 'RUB'
        ],
        'capture' => true,
        'metadata' => $customData,
        "confirmation" => [
            "type" => "redirect",
            "return_url" => "https://t-nectar.ae?success=1"
        ],
        'description' => $description
    ];
}

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data, JSON_UNESCAPED_UNICODE));

$response = curl_exec($curl);
$response = json_decode($response, true);
curl_close($curl);

echo $payMethod == 'AED' ? $response['payment_url'] : $response['confirmation']['confirmation_url'];