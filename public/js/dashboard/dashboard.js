const openOrClose = document.querySelector(' .fa-xmark')
const sideBar = document.querySelector(' .sideBar')
const websiteName = document.querySelector(' .websiteName')
const websiteLogo = document.querySelector(' .websiteLogo')
let isOpen = true;
const Links = Array.from(document.querySelectorAll('span'))
const icons = Array.from(document.querySelectorAll('li'))


openOrClose.addEventListener('click',(e)=> {

    isOpen = !isOpen;

    openOrClose.className =  `${ isOpen ? ' fa-xmark' : "fa-bars" }  fa-solid absolute top-2 right-[-13px]  text-center bg-black text-white rounded-full p-2 w-[28px] text-[12px] active:scale-105 transition-all cursor-pointer`

    sideBar.style.animation = `${ isOpen ? 'openSideBar' : "closeSideBar" } 0.5s`;

    // sideBar.style.width = isOpen ? '' : '80px';
    sideBar.style.width = isOpen ? '18%' : '73px';

    Links.forEach(link => {
        link.style.display = `${ isOpen ? 'inline' : "none" }`

    });

    icons.forEach(icon => {
        icon.style.alignItems = `${ isOpen ? 'flex-start' : "center" }`
    });

    if( websiteName) {
        websiteName.style.display = `${ isOpen ? 'inline' : "none" }`
    }

    // websiteLogo.src = ` http://127.0.0.1:8000/${ isOpen ? 'images/logo.png' : "images/favicon.png" }`
    // websiteLogo.style.width = `${ isOpen ? '144px' : "50px" }`
})
