const text = document.querySelector(".sec-text");

const textLoad = () => {
    setTimeout(() => {
        text.textContent = "o mundo";
    }, 0);
    setTimeout(() => {
        text.textContent = "as crianças";
    }, 4000);
    setTimeout(() => {
        text.textContent = "o desabrigo";
    }, 8000);
}

textLoad();
setInterval(textLoad, 12000);