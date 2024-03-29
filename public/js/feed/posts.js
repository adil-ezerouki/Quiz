// create new post

const createStoryBtn = document.getElementById('createStoryBtn')
const newpostDiv = document.querySelector(' #newpost')
const containerPopUpDivPost = document.querySelector(' .containerPopUpDivPost')
const biggestPostHolder = document.querySelector(' .biggestPostHolder')
const postSlider = Array.from(document.querySelectorAll(' .postSlider'))
const postAttIcons = Array.from(document.querySelectorAll(' .postAttIcons img'))
const postAttachmentsDivs = Array.from(document.querySelectorAll(' .postAttachmentsDiv'))
const postAttatchementsSelects = Array.from(document.querySelectorAll(' .postAttachmentsDiv select'))
const inputMedia = document.getElementById('inputMedia')
const postContent = document.getElementById('postContent')
const postBTN = Array.from(document.querySelectorAll(' .postBTN'))
const resetSelect = Array.from(document.querySelectorAll(' .resetSelect'))
const progressDivPost = document.querySelector(' .progressDivPost')
const closeDivPost = document.querySelector(' .closeDivPost')
const closeAttaDiv = Array.from(document.querySelectorAll(' .closeAttaDiv'))

const newPostDataDisplay = Array.from(document.querySelectorAll(' .newPostDataDisplay'))
const newPostDataDisplayDynamic = Array.from(document.querySelectorAll(' .newPostDataDisplayDynamic'))
const tagANDlocalPic = Array.from(document.querySelectorAll(' .tagANDlocalIcon'))
const resetMediaBtn = document.getElementById('resetMediaBtn1')
const resetAllPostData = document.getElementById('resetAllPostData')
const visibilitySelect = document.getElementById('visibilitySelect')
const visibilityDisplay = document.getElementById('visibilityDisplay')

const resetAllPostDataDiv = document.querySelector(' .resetAllPostDataDiv')

const postOptionsDiv = Array.from(document.querySelectorAll(' .postOptionsDiv'))
const postOptionsIcon = Array.from(document.querySelectorAll(' .postOptionsIcon'))
const postOptions = Array.from(document.querySelectorAll(' .postOptions'))


postContent.value = ''


let newPostData = {
    content: '',
    media: '',
    feeling: {
        code: '',
        description: ''
    },
    activity: {
        code: '',
        description: ''
    },
    quiz: '',
    tag: '',
    location: '',
    visibility: ''
}

const activities = {
    '1F6B4': 'Biking',
    '1F3CB': 'Lifting Weights',
    '1F3CC': 'Swinging Golf Clubs',
    '1F6A3': 'Rowing',
    '1F3C4': 'Surfing',
    '1F3CA': 'Swimming',
    '1F6B5': 'Mountain Biking',
    '1F3AF': 'Throwing Darts',
    '1F3B3': 'Bowling',
    '26BD': 'Playing Soccer',
    '1F3C0': 'Playing Basketball',
    '1F3C8': 'Playing American Football',
    '26BE': 'Playing Baseball',
    '1F3BE': 'Playing Tennis',
    '1F3D0': 'Playing Volleyball',
    '1F3D3': 'Playing Ping Pong',
    '1F3F8': 'Playing Badminton',
    '1F94A': 'Boxing',
    '1F94B': 'Practicing Martial Arts',
    '26F8': 'Ice Skating',
    '1F3BF': 'Skiing',
    '1F3C2': 'Snowboarding',
    '1F3C2': 'Snowboarding',
    '1F3C7': 'Horse Racing',
    '1F3C6': 'Winning a Trophy',
    '1F947': 'Winning a Gold Medal',
    '1F948': 'Winning a Silver Medal',
    '1F949': 'Winning a Bronze Medal',
    '1F3AE': 'Gaming',
    '1F579': 'Playing Arcade Games',
    '1F3B2': 'Rolling Dice',
    '1F0CF': 'Playing Cards',
    '1F3A7': 'Listening to Music',
    '1F3A4': 'Singing',
    '1F3B5': 'Playing Musical Notes',
    '1F3B6': 'Playing Musical Notes',
    '1F3B9': 'Playing the Piano',
    '1F3BA': 'Playing the Trumpet',
    '1F3B7': 'Playing the Saxophone',
    '1F3B8': 'Playing the Guitar',
    '1F3BB': 'Playing the Violin',
    '1F941': 'Playing the Drum',
    '1F3AC': 'Directing a Movie',
    '1F3A5': 'Filming',
    '1F3AD': 'Performing Arts',
    '1F3A8': 'Creating Art',
    '1F5BC': 'Framing Pictures',
    '1F3A4': 'Using a Microphone',
    '1F3AB': 'Holding a Ticket',
    '1F39F': 'Holding an Admission Ticket',
    '1F3A2': 'Riding a Roller Coaster',
    '1F3A1': 'Riding a Ferris Wheel',
    '1F3A0': 'Riding a Carousel Horse',
};

const feelings = {
    '1F600': 'Joyful',
    '1F601': 'Cheerful',
    '1F602': 'Amused',
    '1F603': 'Happy',
    '1F604': 'Smiling',
    '1F605': 'Lighthearted',
    '1F606': 'Grinning',
    '1F607': 'Angelic',
    '1F608': 'Mischievous',
    '1F609': 'Winking',
    '1F60A': 'Content',
    '1F60B': 'Delighted',
    '1F60C': 'Relieved',
    '1F60D': 'Adoring',
    '1F60E': 'Cool',
    '1F60F': 'Smirking',
    '1F610': 'Neutral',
    '1F611': 'Expressionless',
    '1F612': 'Unimpressed',
    '1F613': 'Anxious',
    '1F614': 'Disappointed',
    '1F615': 'Confused',
    '1F616': 'Frustrated',
    '1F617': 'Kissing',
    '1F61B': 'Playful',
    '1F61D': 'Cheeky',
    '1F61E': 'Disapproving',
    '1F61F': 'Worried',
    '1F620': 'Angry',
    '1F621': 'Furious',
    '1F622': 'Crying',
    '1F623': 'Suffering',
    '1F626': 'Frowning',
    '1F627': 'Anguished',
    '1F628': 'Fearful',
    '1F629': 'Weary',
    '1F62A': 'Sleepy',
    '1F62B': 'Tired',
    '1F62C': 'Grimacing',
    '1F62D': 'Sobbing',
    '1F62E': 'Surprised',
    '1F62F': 'Astonished',
    '1F630': 'Anxious with Sweat',
    '1F631': 'Screaming',
    '1F632': 'Astounded',
    '1F633': 'Flushed with Embarrassment',
    '1F634': 'Sleeping',
    '1F635': 'Dizzy',
    '1F636': 'Muted',
    '1F637': 'Masked',
};


postSlider.forEach(div => {
    div.style.display = 'none';
})

postAttachmentsDivs.forEach(div => {
    div.style.display = 'none';
})

postSlider[0].style.display = 'flex';

createStoryBtn.addEventListener('click', () => {
    containerPopUpDivPost.style.display = 'flex'
    containerPopUpDivPost.style.animation = 'fadeIn 1s'
})

postAttIcons.forEach(icon => {
    icon.addEventListener('click', (e) => {

        postAttachmentsDivs.forEach(div => {
            div.style.display = 'none';
        })

        postAttachmentsDivs[postAttIcons.indexOf(icon)].style.display = 'flex';
        postAttachmentsDivs[postAttIcons.indexOf(icon)].style.animation = 'fadeIn 1s';
        resetAllPostDataDiv.style.display = 'flex';
        resetAllPostDataDiv.style.animation = 'fadeIn 1s';



        newpostDiv.scrollTo({
            top: newpostDiv.scrollHeight,
            behavior: 'smooth'

        })
    })
})

postAttatchementsSelects.forEach((select) => {
    select.addEventListener('change', (e) => {



        if (e.target.id == 'feeling') {
            newPostData = {
                ...newPostData, feeling: {
                    ...newPostData.feeling,
                    code: e.target.value,
                    description: feelings[e.target.value],

                },
            }

            if (newPostData.feeling != "") {
                postAttatchementsSelects[1].disabled = true;

            } else {
                postAttatchementsSelects[1].disabled = false;
            }




        }

        if (e.target.id == 'activity') {
            newPostData = {
                ...newPostData, activity: {
                    ...newPostData.activity,
                    code: e.target.value,
                    description: activities[e.target.value],

                }
            }

            if (newPostData.activity != "") {
                postAttatchementsSelects[0].disabled = true;

            } else {
                postAttatchementsSelects[0].disabled = false;
            }



        }

        console.log(newPostData)

        if (e.target.id == 'quiz') {
            newPostData = { ...newPostData, quiz: e.target.value }

        }

        if (e.target.id == 'tag') {
            newPostData = { ...newPostData, tag: e.target.value }

        }

        if (e.target.id == 'location') {
            newPostData = { ...newPostData, location: e.target.value }

        }

    })
})

visibilitySelect.addEventListener('change', () => {
    newPostData = { ...newPostData, visibility: visibilitySelect.value }
})

resetSelect.forEach(btn => {
    btn.addEventListener('click', (e) => {
        targetedSelect = postAttatchementsSelects[resetSelect.indexOf(e.target)]

        targetedSelect.value = ''


        newPostData[targetedSelect.id] = ''






        if (targetedSelect.id == 'feeling') {
            postAttatchementsSelects[1].disabled = false
            postAttatchementsSelects[0].disabled = true

            newPostData.feeling = {
                code: '',
                description: '',
            }
        }

        if (targetedSelect.id == 'activity') {
            postAttatchementsSelects[0].disabled = false
            postAttatchementsSelects[1].disabled = true

            newPostData.activity = {
                code: '',
                description: '',
            }

        }

        console.log(newPostData)
    })
})

inputMedia.addEventListener('input', (e) => {


    if (inputMedia.files && inputMedia.files[0]) {
        // Get the selected file
        const selectedFile = inputMedia.files[0];



        // Create a FileReader to read the selected file
        const reader = new FileReader();

        // Set the onload event to update the image source when the file is read
        reader.onload = function (e) {

            // testPic.src = ;
            newPostData = { ...newPostData, media: e.target.result }

            console.log(newPostData)

        };

        // Read the selected file as a data URL
        reader.readAsDataURL(selectedFile);
    }

})

postBTN.forEach((btn) => {
    btn.addEventListener('click', (e) => {

        let indexPost = 0;





        if (e.target.id == "previousPostBtn") {

            indexPost -= 1;

            if (indexPost < 0) {
                indexPost = 0
            }

        }

        if (e.target.id == "previewPostBtn") {


            indexPost += 1;

            if (indexPost >= postSlider.length - 1) {
                indexPost = postSlider.length - 1;
            }


            if (newPostData.feeling) {

            }
            newPostDataDisplay[0].innerHTML = newPostData.feeling.code != '' ? "is feeling " + newPostData.feeling.description + " " + " &#x" + newPostData.feeling.code + ';' : '';
            newPostDataDisplay[1].innerHTML = newPostData.activity.code != '' ? "is " + newPostData.activity.description + " " + " &#x" + newPostData.activity.code + ';' : '';
            newPostDataDisplay[2].innerHTML = newPostData.tag ? "with " + newPostData.tag : '';
            tagANDlocalPic[0].style.display = newPostData.tag ? 'block' : 'none';
            newPostDataDisplay[3].innerHTML = newPostData.location ? "in " + newPostData.location : '';
            tagANDlocalPic[1].style.display = newPostData.location ? 'block' : 'none';
            newPostDataDisplay[4].innerHTML = newPostData.content != '' ? newPostData.content : '';
            newPostDataDisplay[4].style.display = newPostData.content ? 'block' : 'none';
            newPostDataDisplay[5].src = newPostData.media != '' ? newPostData.media : '';
            newPostDataDisplay[5].style.display = newPostData.media ? 'block' : 'none';


            visibilityDisplay.className = newPostData.visibility == 'public' ? 'fa-solid fa-eye' : 'fa-solid fa-user-group'




        }


        postSlider.forEach(div => {
            div.style.display = 'none';
        })

        postSlider[indexPost].style.display = 'flex'
        postSlider[indexPost].style.animation = 'fadeIn 1s'

        if (indexPost == 1) {
            postBTN[0].className = 'postBTN flex gap-3 justify-center slideBtn bg-[#05B2B0] text-white px-3 py-2 w-1/2 rounded'
            postBTN[0].style.animation = 'fadeIn 1s'

            postBTN[1].className = 'postBTN hidden gap-3  justify-center bg-[#EF592E] text-white px-3 py-2 w-full rounded'
            postBTN[1].style.animation = 'fadeOut 1s'

            postBTN[2].className = 'postBTN flex gap-3  justify-center bg-[#EF592E] text-white px-3 py-2 w-1/2 rounded'
            postBTN[2].style.animation = 'fadeIn 1s'

            progressDivPost.className = 'progressDivPost bg-slate-700 w-[100%] h-2 rounded-t-lg rounded-r-lg mb-10 transition-all'
            progressDivPost.style.animation = 'progressPostsEnlarge 1s'



        } else {
            postBTN[0].className = 'postBTN hidden gap-3 justify-center slideBtn bg-[#05B2B0] text-white px-3 py-2 w-1/2 rounded'
            postBTN[0].style.animation = 'fadeOut 1s'

            postBTN[1].className = 'postBTN flex gap-3  justify-center bg-[#EF592E] text-white px-3 py-2 w-full rounded'
            postBTN[1].style.animation = 'fadeIn 1s'

            postBTN[2].className = 'postBTN hidden gap-3  justify-center bg-[#EF592E] text-white px-3 py-2 w-1/2 rounded'
            postBTN[2].style.animation = 'fadeOut 1s'

            progressDivPost.className = 'progressDivPost bg-slate-700 w-[50%] h-2 rounded-t-lg rounded-r-lg mb-10 transition-all'
            progressDivPost.style.animation = 'progressPostsShrink 1s'

        }

        if (e.target.id == "submitPostBtn") {
            console.log("submitPostBtn")
        }
    })
})

postContent.addEventListener('input', () => {


    newPostData = { ...newPostData, content: postContent.value }

    console.log(newPostData)
})


closeDivPost.addEventListener('click', () => {
    containerPopUpDivPost.style.animation = 'fadeOut 1s';

    containerPopUpDivPost.addEventListener('animationend', () => {
        containerPopUpDivPost.style.display = 'none'
    }, { once: true })
})

closeAttaDiv.forEach((colsebtn) => {
    colsebtn.addEventListener('click', (e) => {
        let targetedAttachDiv = postAttachmentsDivs[closeAttaDiv.indexOf(e.target)]

        targetedAttachDiv.style.animation = 'fadeOut .5s';


        targetedAttachDiv.addEventListener('animationend', () => {
            targetedAttachDiv.style.display = 'none';
        }, { once: true })

        resetAllPostDataDiv.style.animation = 'fadeOut .5s';


        resetAllPostDataDiv.addEventListener('animationend', () => {
            resetAllPostDataDiv.style.display = 'none';
        }, { once: true })



        newpostDiv.scrollTo({
            top: 0,
            behavior: 'smooth'

        })
    })
})

resetMediaBtn.addEventListener('click', () => {

    inputMedia.value = ''
    newPostData.media = ''
})

resetAllPostData.addEventListener('click', () => {

    postAttatchementsSelects.forEach((select) => {
        select.value = '';
    })

    visibilitySelect.value = '';

    newPostData = {
        content: '',
        media: '',
        feeling: {
            code: '',
            description: ''
        },
        activity: {
            code: '',
            description: ''
        },
        quiz: '',
        tag: '',
        location: '',
        visibility: '',
    }
})


let postOptionsIsOpen = false;


postOptionsDiv.forEach(icon => {
    icon.addEventListener('click', () => {
        postOptionsIsOpen = !postOptionsIsOpen;





        if (postOptionsIsOpen) {


            postOptions[postOptionsDiv.indexOf(icon)].style.display = 'flex';
            postOptions[postOptionsDiv.indexOf(icon)].style.animation = 'postInfoEnlarge 1s';
            postOptionsIcon[postOptionsDiv.indexOf(icon)].className = 'postOptionsIcon fa-solid fa-ellipsis flex justify-center items-center bg-slate-300 scale-110 transition-all rounded-full w-7 h-7 p-3'



        } else {
            postOptions[postOptionsDiv.indexOf(icon)].style.animation = 'postInfoShrink 1s';

            postOptions[postOptionsDiv.indexOf(icon)].addEventListener('animationend', () => {
                postOptions[postOptionsDiv.indexOf(icon)].style.display = 'none';
            }, { once: true })

            postOptionsIcon[postOptionsDiv.indexOf(icon)].className = 'postOptionsIcon fa-solid fa-ellipsis flex justify-center items-center bg-slate-200 rounded-full w-7 h-7 p-3'

        }
    })
})



// edit post

const containerPopUpDivEditPost = document.querySelector(' .containerPopUpDivEditPost')
const biggestEditPostHolder = document.querySelector(' .biggestPostHolder')
const editPostBtnFeed = Array.from(document.querySelectorAll(' .editPostBtnFeed'))
const postReadyFather = Array.from(document.querySelectorAll(' .postReadyFather'))
const loadingDiv = document.querySelector(' .loadingDiv');
const editPostData = Array.from(document.querySelectorAll(' .editPostData'))
const closeDivEditPost = document.querySelector(' .closeDivEditPost')
const editPostBTN = Array.from(document.querySelectorAll(' .editPostBTN'))
const EditPostSlider = Array.from(document.querySelectorAll(' .EditPostSlider'))
const editPostDataDisplay = Array.from(document.querySelectorAll(' .editPostDataDisplay'))

console.log(editPostData)


// console.log(editPostBTN)

editPostBtnFeed.forEach((btn) => {
    btn.addEventListener('click', e => {

        loadingDiv.style.display = 'flex';
        loadingDiv.style.animation = 'fadeIn 1s'


        let targetedpostDivId = postReadyFather[editPostBtnFeed.indexOf(btn)].id

        var postTOedit;


        let dataFromBackEnd = fetch(`http://127.0.0.1:8000/posts/${targetedpostDivId}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error ! Status : ${response.status}`)
                }

                return response.json();
            })
            .then((data) => {

                postTOedit = data

                console.log(postTOedit)


                // fill form data

                editPostData[0].innerHTML = postTOedit.user.firstName + " " + postTOedit.user.lastName
                editPostData[1].value = postTOedit.visibility
                editPostDataDisplay[0].innerHTML =  editPostData[3].value = postTOedit.feeling != null ? postTOedit.feeling.code : ''
                editPostData[4].value = postTOedit.activity != null ? postTOedit.activity.code : ''
                editPostData[6].value = postTOedit.tag != null ? postTOedit.tag : ''
                editPostData[7].value = postTOedit.location != null ? postTOedit.location : ''

                // preview this post based on this data

                // editPostDataDisplay[0].innerHTML = newPostData.feeling.code != '' ? "is feeling " + newPostData.feeling.description + " " + " &#x" + newPostData.feeling.code + ';' : '';
                // editPostDataDisplay[1].innerHTML = newPostData.activity.code != '' ? "is " + newPostData.activity.description + " " + " &#x" + newPostData.activity.code + ';' : '';
                // editPostDataDisplay[2].innerHTML = newPostData.tag ? "with " + newPostData.tag : '';
                // tagANDlocalPic[0].style.display = newPostData.tag ? 'block' : 'none';
                // editPostDataDisplay[3].innerHTML = newPostData.location ? "in " + newPostData.location : '';
                // tagANDlocalPic[1].style.display = newPostData.location ? 'block' : 'none';
                // editPostDataDisplay[4].innerHTML = newPostData.content != '' ? newPostData.content : '';
                // editPostDataDisplay[4].style.display = newPostData.content ? 'block' : 'none';
                // editPostDataDisplay[5].src = newPostData.media != '' ? newPostData.media : '';
                // editPostDataDisplay[5].style.display = newPostData.media ? 'block' : 'none';


                visibilityDisplay.className = newPostData.visibility == 'public' ? 'fa-solid fa-eye' : 'fa-solid fa-user-group'



            })
            .catch((error) => {
                console.error('error is', error);
            })

        // console.log(postTOedit)

        if (dataFromBackEnd) {



            setTimeout(() => {
                loadingDiv.style.animation = 'fadeOut 1s'

                loadingDiv.addEventListener('animationend', () => {
                    loadingDiv.style.display = 'none';
                })
            }, 1000)

            setTimeout(() => {
                containerPopUpDivEditPost.style.display = 'flex'
                containerPopUpDivEditPost.style.animation = 'fadeIn 1s'
            }, 1200)

        }
    })
})

closeDivEditPost.addEventListener('click', () => {
    containerPopUpDivEditPost.style.animation = 'fadeOut 1s';

    containerPopUpDivEditPost.addEventListener('animationend', () => {
        containerPopUpDivEditPost.style.display = 'none'
    }, { once: true })
})

EditPostSlider.forEach(div => {
    div.style.display = 'none';
})

EditPostSlider[0].style.display = 'flex'

editPostBTN.forEach((btn) => {
    btn.addEventListener('click', (e) => {

        let indexPost = 0;





        if (e.target.id == "previousPostBtn") {

            indexPost -= 1;

            if (indexPost < 0) {
                indexPost = 0
            }



        }

        if (e.target.id == "previewPostBtn") {


            indexPost += 1;

            if (indexPost >= EditPostSlider.length - 1) {
                indexPost = EditPostSlider.length - 1;
            }

            console.log("yow")


        }


        EditPostSlider.forEach(div => {
            div.style.display = 'none';
        })

        EditPostSlider[indexPost].style.display = 'flex'
        EditPostSlider[indexPost].style.animation = 'fadeIn 1s'

        if (indexPost == 1) {
            postBTN[0].className = 'postBTN flex gap-3 justify-center slideBtn bg-[#05B2B0] text-white px-3 py-2 w-1/2 rounded'
            postBTN[0].style.animation = 'fadeIn 1s'

            postBTN[1].className = 'postBTN hidden gap-3  justify-center bg-[#EF592E] text-white px-3 py-2 w-full rounded'
            postBTN[1].style.animation = 'fadeOut 1s'

            postBTN[2].className = 'postBTN flex gap-3  justify-center bg-[#EF592E] text-white px-3 py-2 w-1/2 rounded'
            postBTN[2].style.animation = 'fadeIn 1s'

            progressDivPost.className = 'progressDivPost bg-slate-700 w-[100%] h-2 rounded-t-lg rounded-r-lg mb-10 transition-all'
            progressDivPost.style.animation = 'progressPostsEnlarge 1s'



        } else {
            postBTN[0].className = 'postBTN hidden gap-3 justify-center slideBtn bg-[#05B2B0] text-white px-3 py-2 w-1/2 rounded'
            postBTN[0].style.animation = 'fadeOut 1s'

            postBTN[1].className = 'postBTN flex gap-3  justify-center bg-[#EF592E] text-white px-3 py-2 w-full rounded'
            postBTN[1].style.animation = 'fadeIn 1s'

            postBTN[2].className = 'postBTN hidden gap-3  justify-center bg-[#EF592E] text-white px-3 py-2 w-1/2 rounded'
            postBTN[2].style.animation = 'fadeOut 1s'

            progressDivPost.className = 'progressDivPost bg-slate-700 w-[50%] h-2 rounded-t-lg rounded-r-lg mb-10 transition-all'
            progressDivPost.style.animation = 'progressPostsShrink 1s'

        }

        if (e.target.id == "submitPostBtn") {
            console.log("submitPostBtn")
        }
    })
})


// comments


const commentBTNS = Array.from(document.querySelectorAll(' .commentBTNS'))
const commentsDivDisplay = Array.from(document.querySelectorAll(' .commentsDivDisplay'))
let iscommentsDivDisplayOpen = false;

commentBTNS.forEach((btn) => {
    btn.addEventListener('click', (e) => {

        iscommentsDivDisplayOpen = !iscommentsDivDisplayOpen;

        console.log(iscommentsDivDisplayOpen)


        if(iscommentsDivDisplayOpen) {
            commentsDivDisplay[commentBTNS.indexOf(btn)].style.display = 'flex'
            commentsDivDisplay[commentBTNS.indexOf(btn)].style.animation = 'commentsDivEnlarge 1s';
        }

        if(!iscommentsDivDisplayOpen){
            commentsDivDisplay[commentBTNS.indexOf(btn)].style.animation = 'commentsDivShrink 1s';
            commentsDivDisplay[commentBTNS.indexOf(btn)].style.display = 'none'


        }


        targetedpostReadyFather = postReadyFather[commentBTNS.indexOf(btn)];
        targetedpostReadyFather.scrollTo({
            top: targetedpostReadyFather.scrollHeight,
            behavior: 'smooth'

        })

    })
})


// reacts

const likesReact = Array.from(document.querySelectorAll(' .likesReact'))
const likesPopUpDiv = Array.from(document.querySelectorAll(' .likesPopUpDiv'))
const allReactBTN = Array.from(document.querySelectorAll(' .allReactBTN'))
const ReactBtns = Array.from(document.querySelectorAll(' .React'))
const closeReactDiv = Array.from(document.querySelectorAll(' .closeReactDiv'))
const reactDisplayDiv = Array.from(document.querySelectorAll(' .reactDisplayDiv'))
const reactStatsDisplay = Array.from(document.querySelectorAll(' .reactStatsDisplay div span'))
let isLikesOpen = false;


console.log(likesReact)

likesReact.forEach((btn) => {
    btn.addEventListener('click', (e) => {

        isLikesOpen = !isLikesOpen;


        if(isLikesOpen) {
            likesPopUpDiv[likesReact.indexOf(btn)].style.display = 'flex'
            likesPopUpDiv[likesReact.indexOf(btn)].style.animation = 'fadeIn 1s';
        }

        if(!isLikesOpen){
            likesPopUpDiv[likesReact.indexOf(btn)].style.animation = 'fadeOut 1s';
            likesPopUpDiv[likesReact.indexOf(btn)].style.display = 'none'

        }


        // targetedpostReadyFather = postReadyFather[commentBTNS.indexOf(btn)];
        // targetedpostReadyFather.scrollTo({
        //     top: targetedpostReadyFather.scrollHeight,
        //     behavior: 'smooth'

        // })

    })
})

allReactBTN.forEach(btn=> {
    btn.addEventListener('click',(e)=> {
        reactDisplayDiv.forEach((div)=> {
            div.style.display = 'none';
        })


        reactDisplayDiv[0].style.animation = 'fadeIn 1s';
        reactDisplayDiv[0].style.display = 'flex';
    })
})

ReactBtns.forEach(btn=> {
    btn.addEventListener('click',(e)=> {
        reactDisplayDiv.forEach((div)=> {
            div.style.display = 'none';
        })


        if(btn.id == 'likeReact') {
            reactDisplayDiv[1].style.animation = 'fadeIn 1s';
            reactDisplayDiv[1].style.display = 'flex';
        }

        if(btn.id == 'loveReact') {
            reactDisplayDiv[2].style.animation = 'fadeIn 1s';
            reactDisplayDiv[2].style.display = 'flex';
        }

        if(btn.id == 'sadReact') {
            reactDisplayDiv[3].style.animation = 'fadeIn 1s';
            reactDisplayDiv[3].style.display = 'flex';
        }

        if(btn.id == 'funnyReact') {
            reactDisplayDiv[4].style.animation = 'fadeIn 1s';
            reactDisplayDiv[4].style.display = 'flex';
        }

        if(btn.id == 'angryReact') {
            reactDisplayDiv[5].style.animation = 'fadeIn 1s';
            reactDisplayDiv[5].style.display = 'flex';
        }

        if(btn.id == 'woowReact') {
            reactDisplayDiv[6].style.animation = 'fadeIn 1s';
            reactDisplayDiv[6].style.display = 'flex';
        }
    })
})

closeReactDiv.forEach(btn=> {
    btn.addEventListener('click',(e)=> {
        likesPopUpDiv[closeReactDiv.indexOf(btn)].style.display = 'none';
    })
})













