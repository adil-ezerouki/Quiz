const okBTN = document.getElementById('okBTN')
const errorsDiv = document.querySelector(' .errors ')

okBTN.onclick = () => {
    errorsDiv.style.animation = 'disappear 0.2s ease-out';

    errorsDiv.addEventListener('animationend', () => {

        errorsDiv.style.display = 'none';
    }, { once: true });
}
