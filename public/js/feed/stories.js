

const storySlider = Array.from(document.querySelectorAll(' .storySlider'))
const storySliderType = Array.from(document.querySelectorAll(' .storySliderType'))
const storyTypeDivs = Array.from(document.querySelectorAll(' .storyTypeDiv'))
const slideBtn = Array.from(document.querySelectorAll(' .slideBtn'))
const submitBtn = document.querySelector(' #submitBtn')
const storyT = Array.from(document.querySelectorAll(' .storyT'))
const progressDiv = document.querySelector(' .progressDiv')
const closeBTN = document.querySelector(' .fa-x')
let progressWidth = 33.3;
const biggestStoryHolder = document.querySelector(' .biggestStoryHolder')
const containerPopUpDivStory = document.querySelector(' .containerPopUpDivStory')
const createStory = document.querySelector(' .createStory')

const inputPic = document.querySelector(' #inputPic')
const storyReadyPic = document.querySelector(' #storyReadyPic')

const inputText = document.querySelector(' #inputText')
const storyReadyText = document.querySelector(' #storyReadyText')

const viewStory = Array.from(document.querySelectorAll(' .viewStory'))
const viewStoryPopUpDiv = Array.from(document.querySelectorAll(' .viewStoryPopUpDiv'))
const closeStory = Array.from(document.querySelectorAll(' .closeStory'))


let index = 0;
let storyType = '';




slideBtn[0].disabled = true;
slideBtn[0].className = "flex gap-3 justify-center text-white slideBtn  bg-[#a2fffd] px-3 py-2 w-[80%] rounded"
slideBtn[1].disabled = true;
slideBtn[1].className = 'bg-[#f0ad99]  text-white flex gap-3 justify-center slideBtn  px-3 py-2 w-[80%] rounded';

storySlider.forEach((div) => {
    div.style.display = 'none';
})

if (storyTypeDivs) {


    storyTypeDivs.forEach((div) => {
        div.addEventListener('click', (e) => {


            index = 1;

            storyT.forEach((div) => {
                div.style.display = 'none';
            })

            if (e.target.id == 'fileStory') {
                storySlider.forEach((div) => {
                    div.style.display = 'none';
                })

                storySliderType.forEach((div) => {
                    div.style.display = 'none';
                })

                storySlider[1].style.display = 'flex';
                storySliderType[0].style.display = 'flex';
                storyT[0].style.display = 'flex';
                storySliderType[0].style.animation = 'fadeIn 1s';

                storyType = "fileStory";

                inputText.value = '';



            }

            if (e.target.id == 'textStory') {
                storySlider.forEach((div) => {
                    div.style.display = 'none';
                })

                storySliderType.forEach((div) => {
                    div.style.display = 'none';
                })

                storySlider[1].style.display = 'flex';
                storySliderType[1].style.display = 'flex';
                storyT[1].style.display = 'flex';
                storySliderType[1].style.animation = 'fadeIn 1s';


                storyType = "textStory";

                // inputPic.value = '';
            }

            progressDiv.className = `w-[66.3%] bg-slate-700 h-2 rounded-t-lg rounded-r-lg mb-10`;
            progressDiv.style.animation = 'progressStoriesEnlarge_1 1s'



            slideBtn[0].disabled = false;
            slideBtn[0].className = 'bg-[#05B2B0]  text-white flex gap-3 justify-center slideBtn  px-3 py-2 w-[80%] rounded';



            slideBtn[1].disabled = false;
            slideBtn[1].className = 'bg-[#EF592E] text-white flex gap-3 justify-center slideBtn  px-3 py-2 w-[80%] rounded'


        })

    })

}


slideBtn.forEach((btn) => {
    btn.addEventListener('click', (e) => {

        if (e.target.id == 'next') {
            index += 1;


            progressDiv.className = `${index == 2 ? "w-full" : 'w-[66.3%] rounded-r-lg'} bg-slate-700 h-2 rounded-t-lg mb-10`;
            progressDiv.style.animation = `${index == 2 ? "progressStoriesEnlarge_2" : "progressStoriesShrink_2"} 1s`

        }

        if (e.target.id == 'previous') {

            index -= 1;

            // progressWidth -= (560 / 3);
            // progressDiv.style.width = `${progressWidth}px`
            progressDiv.className = `${index == 1 ? "w-[66.3%]" : 'w-[33.3%]'} rounded-r-lg bg-slate-700 h-2 rounded-t-lg mb-10`;
            progressDiv.style.animation = `${index == 1 ? "progressStoriesShrink_2" : "progressStoriesEnlarge_1"} 1s`
            // = '';

            // if(index == 2)
        }

        if (index == 0) {
            slideBtn[0].disabled = true;
            slideBtn[0].className = 'bg-[#a2fffd] text-white flex gap-3 justify-center slideBtn  px-3 py-2 w-[80%] rounded'
            slideBtn[1].disabled = true;
            slideBtn[1].className = 'bg-[#f0ad99] text-white flex gap-3 justify-center slideBtn  px-3 py-2 w-[80%] rounded';
            progressDiv.className = 'bg-slate-700 w-[33.3%] h-2 rounded-r-lg rounded-t-lg mb-10';
            progressDiv.style.animation = 'progressStoriesShrink_1 1s'
        } else {
            slideBtn[0].disabled = false;
            slideBtn[0].className = 'bg-[#05B2B0]  text-white flex gap-3 justify-center slideBtn  px-3 py-2 w-[80%] rounded';
        }

        if (index < storySlider.length - 1 && index > 0) {
            slideBtn[1].className = 'slideBtn flex gap-3 justify-center bg-[#EF592E] text-white px-3 py-2 w-[80%] rounded';
            slideBtn[1].style.animation = 'fadeIn 1s'
            submitBtn.className = 'hidden gap-3  justify-center bg-[#EF592E] text-white px-3 py-2 w-[80%] rounded'
            submitBtn.style.animation = 'fadeOut 1s'
        }

        if (index >= storySlider.length - 1) {
            slideBtn[1].className = 'slideBtn hidden gap-3 justify-center bg-[#EF592E] text-white px-3 py-2 w-[80%] rounded';
            slideBtn[1].style.animation = 'fadeOut 1s'
            submitBtn.className = 'flex gap-3  justify-center bg-[#EF592E] text-white px-3 py-2 w-[80%] rounded'
            submitBtn.style.animation = 'fadeIn 1s'

        }


        storySlider.forEach((div) => {
            div.style.display = 'none';
        })
        storySlider[index].style.display = 'flex';
        storySlider[index].style.animation = 'fadeIn 1.5s';


    })
})


storySlider[index].style.display = 'flex';
storySlider[index].style.animation = 'fadeIn 1.5s';


createStory.addEventListener('click', () => {
    containerPopUpDivStory.style.display = 'flex'
    containerPopUpDivStory.style.animation = 'fadeIn 1s';
})

closeBTN.addEventListener('click', () => {
    containerPopUpDivStory.style.animation = 'fadeOut 1s';

    containerPopUpDivStory.addEventListener('animationend', () => {
        containerPopUpDivStory.style.display = 'none'
    }, { once: true })

})


inputPic.addEventListener('input', () => {
    // Check if files are selected



    if (inputPic.files && inputPic.files[0]) {
        // Get the selected file
        const selectedFile = inputPic.files[0];

        // Create a FileReader to read the selected file
        const reader = new FileReader();

        // Set the onload event to update the image source when the file is read
        reader.onload = function (e) {
            if (index === 1) {
                storyReadyPic.src = e.target.result;
            }

            // const imagePath = e.target.result;
            // const pathWithoutPrefix = imagePath.split(',')[1];
        };

        // Read the selected file as a data URL
        reader.readAsDataURL(selectedFile);
    }






});


inputText.addEventListener('input', () => {
  

    if (index == 1) {
        storyReadyText.innerHTML = inputText.value
    }
})


viewStory.forEach((story) => {


    var targetStoryindex = 0;

    story.addEventListener('click', () => {

        targetStoryindex = viewStory.indexOf(story);

        viewStoryPopUpDiv[targetStoryindex].style.display = 'flex';
        viewStoryPopUpDiv[targetStoryindex].style.animation = 'fadeIn 1s'

    })

    closeStory[viewStory.indexOf(story)].addEventListener('click', () => {

        viewStoryPopUpDiv[viewStory.indexOf(story)].style.animation = 'fadeOut 1s'

        viewStoryPopUpDiv[viewStory.indexOf(story)].addEventListener('animationend', () => {
            viewStoryPopUpDiv[viewStory.indexOf(story)].style.display = 'none';
        }, { once: true })

    })


})
