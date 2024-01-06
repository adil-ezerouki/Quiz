// for both login and signup

const okBTN = document.getElementById('okBTN')
const errorsDiv = document.querySelector(' .errors ')
const errorsPopUp = document.querySelector(' .popup-errors ')
const show_hide_text_login = document.querySelector(' .login-icon')
const show_hide_text_register = document.querySelectorAll(' .register-icon')
const passwordInputs = document.querySelectorAll(' .password')

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


// for register page

show_hide_text_register ?
    Array.from(show_hide_text_register).forEach((icon) => {
        icon.addEventListener('click', (e) => {
            isDisplayed = !isDisplayed;
            console.log(isDisplayed);
            e.target.className = `fa-solid ${isDisplayed ? "fa-eye-slash" : 'fa-eye'} fa-eye-slash absolute lg:left-[210px] left-[130px] top-3 active:scale-110 transition-all duration-50`


            let tragetedInput = Array.from(passwordInputs)[Array.from(show_hide_text_register).indexOf(e.target)]

            isDisplayed ? tragetedInput.type = 'text' : tragetedInput.type = "password"



        })
    }) : ""

// for login page

const userNameORemail = document.getElementById('userNameORemail');

userNameORemail ? userNameORemail.addEventListener("input", (e) => {
    let inputData = userNameORemail.value;
    if (inputData.includes('@')) {
        userNameORemail.name = 'email'
    } else {
        userNameORemail.name = 'userName'
    }
}) : ""

show_hide_text_login ?
    show_hide_text_login.addEventListener('click', (e) => {
        isDisplayed = !isDisplayed;
        e.target.className = `fa-solid ${isDisplayed ? "fa-eye-slash" : 'fa-eye'} fa-eye-slash absolute right-[17px] top-3 active:scale-110 transition-all duration-50`
        let tragetedInput = Array.from(passwordInputs)[0]

        isDisplayed ? tragetedInput.type = 'text' : tragetedInput.type = "password"
    }) : ""




