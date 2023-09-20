document.addEventListener("DOMContentLoaded", function () {
    const LInput1 = document.getElementById('name');
    const LLabel1 = document.getElementById('name-label');

    const LInput2 = document.getElementById('surname');
    const LLabel2 = document.getElementById('surname-label');

    const LInput3 = document.getElementById('age');
    const LLabel3 = document.getElementById('age-label');

    const LInput4 = document.getElementById('level');
    const LLabel4 = document.getElementById('level-label');

    const LInput5 = document.getElementById('mail');
    const LLabel5 = document.getElementById('mail-label');

    const LInput6 = document.getElementById('password');
    const LLabel6 = document.getElementById('password-label');

    const LInput7    = document.getElementById('verif-password');
    const LLabel7    = document.getElementById('verif-password-label');

    // 1
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
        LLabel1.style.top = "6px";
        LLabel1.style.left = "8px";
        LLabel1.style.fontSize = "16px";
        LLabel1.style.color = "#000";
        }
    });

    // 2
    // En haut
    LInput2.addEventListener("focus", function () {
        LLabel2.style.top = "52px";
        LLabel2.style.left = "6px";
        LLabel2.style.fontSize = "12px";
        LLabel2.style.color = "#000";
    });

    // En bas
    LInput2.addEventListener("blur", function () {
        if (LInput2.value === "") {
        LLabel2.style.top = "72px";
        LLabel2.style.left = "8px";
        LLabel2.style.fontSize = "16px";
        LLabel2.style.color = "#000";
        }
    });

    // 3
    // En haut
    LInput3.addEventListener("focus", function () {
        LLabel3.style.top = "115px";
        LLabel3.style.left = "6px";
        LLabel3.style.fontSize = "12px";
        LLabel3.style.color = "#000";
    });

    // En bas
    LInput3.addEventListener("blur", function () {
        if (LInput3.value === "") {
            LLabel3.style.top = "115px";
            // LLabel3.style.top = "135px";
            LLabel3.style.left = "8px";
            // LLabel3.style.fontSize = "16px";
            LLabel3.style.fontSize = "12px";
            LLabel3.style.color = "#000";
        }
    });

    // 4
    // En haut
    LInput4.addEventListener("focus", function () {
        LLabel4.style.top = "165px";
        LLabel4.style.left = "6px";
        LLabel4.style.fontSize = "12px";
        LLabel4.style.color = "#000";
    });

    // En bas
    LInput4.addEventListener("blur", function () {
        if (LInput4.value === "") {
        LLabel4.style.top = "180px";
        LLabel4.style.left = "8px";
        LLabel4.style.fontSize = "16px";
        LLabel4.style.color = "#000";
        }
    });

    // 5
    // En haut
    LInput5.addEventListener("focus", function () {
        LLabel5.style.top = "245px";
        LLabel5.style.left = "6px";
        LLabel5.style.fontSize = "12px";
        LLabel5.style.color = "#000";
    });

    // En bas
    LInput5.addEventListener("blur", function () {
        if (LInput5.value === "") {
        LLabel5.style.top = "265px";
        LLabel5.style.left = "8px";
        LLabel5.style.fontSize = "16px";
        LLabel5.style.color = "#000";
        }
    });

    // 6
    // En haut
    LInput6.addEventListener("focus", function () {
        LLabel6.style.top = "308px";
        LLabel6.style.left = "6px";
        LLabel6.style.fontSize = "12px";
        LLabel6.style.color = "#000";
    });

    // En bas
    LInput6.addEventListener("blur", function () {
        if (LInput6.value === "") {
        LLabel6.style.top = "328px";
        LLabel6.style.left = "8px";
        LLabel6.style.fontSize = "16px";
        LLabel6.style.color = "#000";
        }
    });

    // 7
    // En haut
    LInput7.addEventListener("focus", function () {
        LLabel7.style.top = "372px";
        LLabel7.style.left = "6px";
        LLabel7.style.fontSize = "12px";
        LLabel7.style.color = "#000";
    });

    // En bas
    LInput7.addEventListener("blur", function () {
        if (LInput7.value === "") {
        LLabel7.style.top = "392px";
        LLabel7.style.left = "8px";
        LLabel7.style.fontSize = "16px";
        LLabel7.style.color = "#000";
        }
    });
});