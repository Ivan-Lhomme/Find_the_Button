function getRandomInt(max) {
    return Math.floor(Math.random() * max);
}

let button = document.getElementById("rightButton");

button.style.top = `${getRandomInt(window.innerHeight - 10)}px`;
button.style.left = `${getRandomInt(window.innerWidth - 3)}px`;