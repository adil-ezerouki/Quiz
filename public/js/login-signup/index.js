// for both login and signup

const okBTN = document.getElementById('okBTN')
const errorsDiv = document.querySelector(' .errors ')
const errorsPopUp = document.querySelector(' .popup-errors ')

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

// for login page

const userNameORemail = document.getElementById('userNameORemail');

console.log(userNameORemail)

userNameORemail.addEventListener("input", (e) => {
    let inputData = userNameORemail.value;
    if (inputData.includes('@')) {
        userNameORemail.name = 'email'
    } else {
        userNameORemail.name = 'userName'
    }
})



