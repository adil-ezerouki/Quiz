const searchBar = document.querySelector(' .search')
const results = document.querySelector(' .results')
const beforeSearchDiv = document.querySelector(' .beforeSearchDiv')
const NothingFound = document.querySelector(' .NothingFound')
let isFocused = false;



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




