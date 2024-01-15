const createStoryBtn = document.getElementById('createStoryBtn')
const containerPopUpDivPost = document.querySelector(' .containerPopUpDivPost')
const biggestPostHolder = document.querySelector(' .biggestPostHolder')
const postSlider = Array.from(document.querySelectorAll(' .postSlider'))
const postAttIcons = Array.from(document.querySelectorAll(' .postAttIcons img'))
const postAttachmentsDivs = Array.from(document.querySelectorAll(' .postAttachmentsDiv'))


postSlider.forEach(div=> {
    div.style.display = 'none';
})

postAttachmentsDivs.forEach(div=> {
    div.style.display = 'none';
})

postSlider[0].style.display = 'flex';

createStoryBtn.addEventListener('click',()=> {
    containerPopUpDivPost.style.display = 'flex'
})

postAttIcons.forEach(icon=> {
    icon.addEventListener('click',(e)=> {

        postAttachmentsDivs.forEach(div=> {
            div.style.display = 'none';
        })

        postAttachmentsDivs[postAttIcons.indexOf(icon)].style.display = 'flex';
        postAttachmentsDivs[postAttIcons.indexOf(icon)].style.animation = 'fadeIn 1s';
    })
})
