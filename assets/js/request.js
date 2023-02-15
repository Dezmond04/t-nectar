const elements = {
    forms: document.querySelectorAll(".request_form"),
    telInputs: document.querySelectorAll("input[type='tel']")
};

const itis = [];

elements.forms.forEach((form, i) => {
    const btn = form.querySelector(".send");

    btn.addEventListener("click", function () {
        if (!form.reportValidity()) return;

        this.disabled = true;

        const formData = new FormData(form);
        formData.set("phone", itis[i].getNumber());
        fetch("/link.php", {
            method: "POST",
            body: formData
        })
            .then(data => data.text())
            .then(link => {
                location.href = link;
            });
    });
});

elements.telInputs.forEach((input, i) => {
    const iti = window.intlTelInput(input, {
        preferredCountries: ["ae", "ru"],
        separateDialCode: true,
        utilsScript: "/assets/js/utils.js",
        nationalMode: false,
        formatOnDisplay: true
    });
    itis.push(iti);

    input.addEventListener("keyup", function () {
        if (typeof intlTelInputUtils !== 'undefined') {
            const currentText = iti.getNumber(intlTelInputUtils.numberFormat.E164);
            if (typeof currentText === 'string') {
                iti.setNumber(currentText);
            }
        }
    });
});
