function imgSlider(anything) {
    document.querySelector(".kokumi").src = anything;
}

function changeCircleColor(color) {
    const circle = document.querySelector(".circle");
    circle.style.background = color;
}

function changeTextboxColor(color) {
    const Textbox = document.querySelector(".content .textBox a");
    Textbox.style.background = color;
}

function changeKokumiColor(color) {
    const Kokumi = document.querySelector(".content .textBox h2 span");
    Kokumi.style.color = color;
}

function ToggleMenu() {
    var menuToggle = document.querySelector(".toggle");
    var navigation = document.querySelector(".navigation");
    menuToggle.classList.toggle("active");
    navigation.classList.toggle("active");
}
