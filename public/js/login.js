const eye = document.querySelector('.fa-eye')
const userNameORemail = document.querySelector('#userNameORemail')

eye.addEventListener('click', () => {
    eye.classList.toggle('fa-eye-slash')

    if (eye.classList.contains('fa-eye-slash')) {
        eye.classList.remove('fa-eye')
        eye.style.animation = 'FadeIn 1s'
    } else {
        eye.classList.add('fa-eye')
    }
    console.log('hh')
})


userNameORemail.addEventListener('input', () => {
    if (userNameORemail.value.includes('@')) {
        userNameORemail.name = 'email'
    } else {
        userNameORemail.name = 'userName'
    }

    // console.log(userNameORemail)
})


const okBTN = document.getElementById('okBTN')
const errorsDiv = document.querySelector(' .errors ')

okBTN.onclick = () => {
    errorsDiv.style.animation = 'disappear 0.2s ease-out';

    errorsDiv.addEventListener('animationend', () => {

        errorsDiv.style.display = 'none';
    }, { once: true });
}



