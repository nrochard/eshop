function affiche() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("cache");
    var btnText = document.getElementById("bouton");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Lire plus";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Lire moins";
        moreText.style.display = "inline";
    }
}
function affiche2() {
    var dots = document.getElementById("dots2");
    var moreText = document.getElementById("cache2");
    var btnText = document.getElementById("bouton2");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Lire plus";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Lire moins";
        moreText.style.display = "inline";
    }
}
function affiche3() {
    var dots = document.getElementById("dots3");
    var moreText = document.getElementById("cache3");
    var btnText = document.getElementById("bouton3");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Lire plus";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Lire moins";
        moreText.style.display = "inline";
    }
}