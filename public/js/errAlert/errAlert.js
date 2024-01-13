const okBTN = document.getElementById('okBTN')
const errorsDiv = document.querySelector(' .errors ')
const errorsPopUp = document.querySelector(' .popup-errors ')


let isDisplayed = false;

okBTN ? okBTN.onclick = closeERRpopup : "";

document.addEventListener("keydown", function (event) {
    if (event.key === 'Enter') {
        closeERRpopup();
    }
});


function closeERRpopup() {

    errorsDiv.style.animation = 'disappearErrDiv 0.2s ease-out';

    errorsDiv.addEventListener('animationend', () => {

        errorsDiv.style.display = 'none';
    }, { once: true });


    errorsPopUp.style.animation = 'disappearPopUp 0.2s ease-out';

    errorsPopUp.addEventListener('animationend', () => {
        errorsDiv.style.display = 'none';
    }, { once: true });
}


setTimeout(()=> {
   okBTN ? okBTN.click() : "";
},3000)
