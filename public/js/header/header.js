const searchBar = document.querySelector(' .search')
const results = document.querySelector(' .results')
const beforeSearchDiv = document.querySelector(' .beforeSearchDiv')
const NothingFound = document.querySelector(' .NothingFound')



// sreach div



searchBar.addEventListener('click', (e) => {

    results.style.display = 'flex';
    results.style.animation = 'resultDivEnlarge 1s';

})


searchBar.addEventListener('blur', () => {

    results.style.animation = 'resultDivShrink 1s';

    results.addEventListener('animationend', () => {
        results.style.display = 'none';
    }, { once: 'true' })
})

searchBar.addEventListener('input', () => {
    if (searchBar.value.length != 0) {

        beforeSearchDiv.style.animation = 'fadeOut 1s';
        beforeSearchDiv.style.display = 'none';

        NothingFound.style.display = 'flex';
        NothingFound.style.animation = 'fadeIn 1s';


    } else {

        beforeSearchDiv.style.animation = 'fadeIn 1s';
        beforeSearchDiv.style.display = 'flex';


        NothingFound.style.animation = 'fadeOut 1s';
        NothingFound.style.display = 'none';

    }
})


// room div

const enterCodebtn = document.getElementById('enterCodebtn')
const roomDiv = document.querySelector(' .roomDiv')
const enterCodeInput = document.querySelector(' .enterCodeInput')
const arrowBTN = document.querySelector(' .fa-arrow-down')
let roomDivIsOpen = false;

enterCodebtn.addEventListener('click', () => {

    roomDivIsOpen = !roomDivIsOpen;

    roomDiv.style.animation = `${roomDivIsOpen ? 'roomDivEnlarge' : 'roomDivShrink'} 1s`;
    arrowBTN.className = `${roomDivIsOpen ? 'fa-solid fa-arrow-down self-center' : 'fa-solid fa-arrow-up self-center'} 1s`;
    arrowBTN.style.animation = `${roomDivIsOpen ? 'fadeIn' : 'fadeIn1'} 1s`;
    setTimeout(() => {
        roomDiv.style.display = roomDivIsOpen ? 'flex' : 'none';
    }, 200);

    console.log(roomDivIsOpen)
})

// enterCodeInput.removeEventListener('click',()=> {
//     console.log('dnadmfnmdf')
// });



