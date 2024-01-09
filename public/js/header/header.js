const searchBar = document.querySelector(' .search')
const results = document.querySelector(' .results')
let isFocused = false;



searchBar.addEventListener('click', (e) => {

    results.style.display = 'block';
    results.style.animation = 'resultDivEnlarge 1s';

})


searchBar.addEventListener('blur', () => {

    results.style.animation = 'resultDivShrink 1s';

    results.addEventListener('animationend', () => {
        results.style.display = 'none';
    },{once : 'true'})
})


