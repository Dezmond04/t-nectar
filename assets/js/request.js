const elements = {
    forms: document.querySelectorAll(".request_form")
};

elements.forms.forEach(form => {
    const btn = form.querySelector(".send");

    btn.addEventListener("click", function () {
        if (!form.reportValidity()) return;

        this.disabled = true;

        const formData = new FormData(form);
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