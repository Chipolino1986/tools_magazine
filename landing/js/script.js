// let offset = 0;
// const sliderLine = document.querySelector('.slider_line');


// document.querySelector('.slider_next').addEventListener('click', function(){
//     offset = offset + 770;
//     if (offset > 3080) {
//         offset = 0;
//     }
//     sliderLine.style.left = -offset + 'px';
// })

// document.querySelector('.slider_prev').addEventListener('click', function(){
//     offset = offset - 770;
//     if (offset < 0) {
//         offset = 3080;
//     }
//     sliderLine.style.left = -offset + 'px';
// })

// -------------------------------------------------------------------------------------

// let images = document.querySelectorAll('.slider img');
// let corrent = images.length - 1;

// function slider () {
//     for (let i = 0; i < images.length; i++) {
//         images[i].classList.add('opacity_0');
//     }
//     images[corrent].classList.remove('opacity_0');
// }

// // slider();

// // document.querySelector('.slider').onclick = slider;
// document.querySelector('.button_slider_box_right button').onclick = function() {
//     if (corrent +1 == images.length) {
//         corrent = 0;
//     } else {
//         corrent ++;
//     }
//     slider();
// };
// document.querySelector('.button_slider_box_left button').onclick = function() {
//     if (corrent -1 == -1) {
//         corrent = images.length -1;
//     } else {
//         corrent --;
//     }
//     slider();
// };

// -------------------------------------------------------------------------------

let position = 0;
const slidesToShow = 1;
const slidesToScroll = 1;
const container = document.querySelector('.slider_container');
const track = document.querySelector('.slider_track');
const btnPrev = document.querySelector('.btn_prev');
const btnNext = document.querySelector('.btn_next');
const items = document.querySelectorAll('.slider_item');
const itemsCount = items.length;
const itemWidth = container.clientWidth / slidesToShow;
const movePosition = slidesToScroll * itemWidth;

items.forEach((item) => {
    item.style.minWidth = `${itemWidth}px`;
});

btnNext.addEventListener('click',() => {
    const itemsLeft = itemsCount - (Math.abs(position) + slidesToShow * itemWidth) / itemWidth;

    position -= itemsLeft >= slidesToScroll ? movePosition : itemsLeft * itemWidth;

    setPosition();
    checkBtns();
});

btnPrev.addEventListener('click',() => {
    const itemsLeft = Math.abs(position) / itemWidth;
    position += itemsLeft >= slidesToScroll ? movePosition : itemsLeft * itemWidth;  

    setPosition();
    checkBtns();
});

const setPosition = () => {
    track.style.transform = `translateX(${position}px)`;
};
const checkBtns = () => {
    btnPrev.disabled = position === 0;
    btnNext.disabled = position <= -(itemsCount - slidesToShow) * itemWidth;
};
checkBtns();

// --------------------------------------------------------------------

