const createStoryBtn = document.getElementById('createStoryBtn')
const containerPopUpDivPost = document.querySelector(' .containerPopUpDivPost')
const biggestPostHolder = document.querySelector(' .biggestPostHolder')
const postSlider = Array.from(document.querySelectorAll(' .postSlider'))


postSlider.forEach(div=> {
    div.style.display = 'none';
})

postSlider[0].style.display = 'flex';

createStoryBtn.addEventListener('click',()=> {
    containerPopUpDivPost.style.display = 'flex'

    console.log('hh')
})
