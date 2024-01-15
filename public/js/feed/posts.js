const createStoryBtn = document.getElementById('createStoryBtn')
const newpostDiv = document.querySelector(' #newpost')
const containerPopUpDivPost = document.querySelector(' .containerPopUpDivPost')
const biggestPostHolder = document.querySelector(' .biggestPostHolder')
const postSlider = Array.from(document.querySelectorAll(' .postSlider'))
const postAttIcons = Array.from(document.querySelectorAll(' .postAttIcons img'))
const postAttachmentsDivs = Array.from(document.querySelectorAll(' .postAttachmentsDiv'))
const postAttatchementsSelects = Array.from(document.querySelectorAll(' .postAttachmentsDiv select'))
const inputMedia = document.getElementById('inputMedia')
const postBTN = Array.from(document.querySelectorAll(' .postBTN'))



let postInfos = {
    media: '',
    feeling: '',
    activity: '',
    quiz: '',
    tag: '',
    location: '',
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
})

postAttIcons.forEach(icon => {
    icon.addEventListener('click', (e) => {

        postAttachmentsDivs.forEach(div => {
            div.style.display = 'none';
        })

        postAttachmentsDivs[postAttIcons.indexOf(icon)].style.display = 'flex';
        postAttachmentsDivs[postAttIcons.indexOf(icon)].style.animation = 'fadeIn 1s';

        newpostDiv.scrollTo({
            top: newpostDiv.scrollHeight,
            behavior: 'smooth'

        })
    })
})

postAttatchementsSelects.forEach((select) => {
    select.addEventListener('change', (e) => {



        if (e.target.id == 'feeling') {
            postInfos = { ...postInfos, feeling: feelings[e.target.value] }

        }

        if (e.target.id == 'activity') {
            postInfos = { ...postInfos, activity: activities[e.target.value] }

        }

        if (e.target.id == 'quiz') {
            postInfos = { ...postInfos, quiz: e.target.value }

        }

        if (e.target.id == 'tag') {
            postInfos = { ...postInfos, tag: e.target.value }

        }

        if (e.target.id == 'location') {
            postInfos = { ...postInfos, location: e.target.value }

        }

        console.log(postInfos)

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
            postInfos = { ...postInfos, media: e.target.result }

            console.log(postInfos)

        };

        // Read the selected file as a data URL
        reader.readAsDataURL(selectedFile);
    }

})

// postBTN.addEventListener()
