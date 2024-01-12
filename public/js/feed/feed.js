const storySlider = Array.from(document.querySelectorAll(' .storySlider'))
const storySliderType = Array.from(document.querySelectorAll(' .storySliderType'))
const storyTypeDivs = Array.from(document.querySelectorAll(' .storyTypeDiv'))
const slideBtn = Array.from(document.querySelectorAll(' .slideBtn'))
const storyT = Array.from(document.querySelectorAll(' .storyT'))
const progressDiv = document.querySelector(' .progressDiv')
let progressWidth = 0;
const biggestStoryHolder = document.querySelector(' .biggestStoryHolder')
let index = 0;
let storyType = '';


slideBtn[0].disabled = true;
slideBtn[0].className = "flex gap-3 justify-center slideBtn  bg-[#a2fffd] px-3 py-2 w-[80%] rounded"
slideBtn[1].disabled = true;
slideBtn[1].className = 'bg-[#f0ad99]  text-black flex gap-3 justify-center slideBtn  px-3 py-2 w-[80%] rounded';

storySlider.forEach((div) => {
    div.style.display = 'none';
})

if (storyTypeDivs) {


    storyTypeDivs.forEach((div) => {
        div.addEventListener('click', (e) => {
            console.log(e.target.id)

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

                storyType = "fileStory";


                // console.log(storySliderType[0])
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

                console.log(storySliderType[1])
                storyType = "textStory";
            }



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
            console.log(index)
            progressWidth += (560 / 3);
            console.log(progressWidth)


        }

        if (e.target.id == 'previous') {

            index -= 1;
            progressDiv.style.width += progressDiv.style.width / storySlider.length;

            console.log(index)
        }

        progressDiv.style.width = `${progressWidth}px`

        if (index == 0) {
            slideBtn[0].disabled = true;
            slideBtn[0].className = 'bg-[#a2fffd] text-black flex gap-3 justify-center slideBtn  px-3 py-2 w-[80%] rounded'
        } else {
            slideBtn[0].disabled = false;
            slideBtn[0].className = 'bg-[#05B2B0]  text-white flex gap-3 justify-center slideBtn  px-3 py-2 w-[80%] rounded';
        }

        if (index >= storySlider.length - 1) {
            slideBtn[1].disabled = true;
            slideBtn[1].className = 'bg-[#f0ad99]  text-black flex gap-3 justify-center slideBtn  px-3 py-2 w-[80%] rounded';

        } else {
            slideBtn[1].disabled = false;
            slideBtn[1].className = 'bg-[#EF592E] text-white flex gap-3 justify-center slideBtn  px-3 py-2 w-[80%] rounded'

        }


        storySlider.forEach((div) => {
            div.style.display = 'none';
        })
        storySlider[index].style.display = 'flex';


    })
})


storySlider[index].style.display = 'flex';


