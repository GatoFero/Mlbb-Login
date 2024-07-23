var backgrounds = ["images/1.jpg","images/2.jpg","images/3.jpg","images/4.jpg","images/5.jpg","images/6.jpg"];
var backgroundElement = document.getElementById("fondo");

var currentIndex = localStorage.getItem('currentIndex') ? parseInt(localStorage.getItem('currentIndex')) : 0;

function renderBackground() {
    var currentBackground = backgrounds[currentIndex];
    backgroundElement.style.background = "url('" + currentBackground + "') no-repeat center";
    backgroundElement.style.backgroundSize = "cover";
    
    localStorage.setItem('currentIndex', currentIndex);
    currentIndex = (currentIndex + 1) % backgrounds.length;
}

setInterval(renderBackground, 4500);
renderBackground();