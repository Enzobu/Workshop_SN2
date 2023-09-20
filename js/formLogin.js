document.addEventListener("DOMContentLoaded", function () {
    const LInput1 = document.getElementById('mail');
    const LLabel1 = document.getElementById('mail-label');

    const LInput2 = document.getElementById('password');
    const LLabel2 = document.getElementById('password-label');

    // En haut
    LInput1.addEventListener("focus", function () {
        LLabel1.style.top = "-14px";
        LLabel1.style.left = "6px";
        LLabel1.style.fontSize = "12px";
        LLabel1.style.color = "#000";
    });

    // En bas
    LInput1.addEventListener("blur", function () {
        if (LInput1.value === "") {
        LLabel1.style.top = "0px";
        LLabel1.style.left = "8px";
        LLabel1.style.fontSize = "16px";
        LLabel1.style.color = "#000";
        }
    });

    // En haut
    LInput2.addEventListener("focus", function () {
        LLabel2.style.top = "49px";
        LLabel2.style.left = "6px";
        LLabel2.style.fontSize = "12px";
        LLabel2.style.color = "#000";
    });

    // En bas
    LInput2.addEventListener("blur", function () {
        if (LInput2.value === "") {
        LLabel2.style.top = "66px";
        LLabel2.style.left = "8px";
        LLabel2.style.fontSize = "16px";
        LLabel2.style.color = "#000";
        }
    });
});