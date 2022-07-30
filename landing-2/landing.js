"use strict"

let step = 0;
const container = document.querySelector('.slider_container');
const track = document.querySelector('.slider_track');
const btnPrev = document.querySelector('.btn_prev');
const btnNext = document.querySelector('.btn_next');
const items = document.querySelectorAll('.slider_item');
const itemWidth = container.clientWidth;
let sliderItems = [];
items.forEach((item) => {
    item.style.minWidth = `${itemWidth}px`;
    sliderItems.push(item.cloneNode());
    item.remove();
});
const intervalTime = 4000;
const intervalFunction = () => right();
let interval = setInterval(intervalFunction, intervalTime);

function setCenter() {
    track.style.transform = `translateX(${-itemWidth}px)`;
}
function drow(changeStep = 'right') {
    const maxStep = sliderItems.length - 1;
    if (changeStep === 'right') {
        track.append(sliderItems[step]);
        step = step === maxStep ? 0 : step + 1;
    } else {
        track.prepend(sliderItems[step]);
        step = step === 0 ? maxStep : step - 1;
    }
}
function right() {
    btnNext.removeEventListener('click', right);
    clearInterval(interval);

    let items2 = document.querySelectorAll('.slider_item');
    track.style.transform = `translateX(${-itemWidth * 2}px)`;
 
    setTimeout(function () {
        items2[0].remove();
        drow('right');
        track.style.transition = "none";
        setCenter();
    }, 700)
    setTimeout(function () {
        track.style.transition = "0.7s";
        btnNext.addEventListener("click", right);
        interval = setInterval(intervalFunction, intervalTime);
    }, 900)
}
function left() {
    btnPrev.removeEventListener('click', left);
    clearInterval(interval);

    let items2 = document.querySelectorAll('.slider_item');
    track.style.transform = `translateX(0px)`;
 
    setTimeout(function () {
        items2[2].remove();
        drow('left');
        track.style.transition = "none";
        setCenter();
    }, 700)
    setTimeout(function () {
        track.style.transition = "0.7s";
        btnPrev.addEventListener("click", left);
        interval = setInterval(intervalFunction, intervalTime);
    }, 900)
}

drow('right');
drow('right');
drow('right');
setCenter();
btnPrev.addEventListener("click", left);
btnNext.addEventListener("click", right);


// -------------------------------------------------------------------------------




// let position = 0;
// const slidesToShow = 1;
// const slidesToScroll = 1;
// const container = document.querySelector('.slider_container');
// const track = document.querySelector('.slider_track');
// const btnPrev = document.querySelector('.btn_prev');
// const btnNext = document.querySelector('.btn_next');
// const items = document.querySelectorAll('.slider_item');
// const itemsCount = items.length;
// const itemWidth = container.clientWidth / slidesToShow;
// const movePosition = slidesToScroll * itemWidth;

// items.forEach((item) => {
//     item.style.minWidth = `${itemWidth}px`;
// });

// btnNext.addEventListener('click',() => {
//     const itemsLeft = itemsCount - (Math.abs(position) + slidesToShow * itemWidth) / itemWidth;

//     position -= itemsLeft >= slidesToScroll ? movePosition : itemsLeft * itemWidth;

//     setPosition();
//     checkBtns();
// });

// btnPrev.addEventListener('click',() => {
//     const itemsLeft = Math.abs(position) / itemWidth;
//     position += itemsLeft >= slidesToScroll ? movePosition : itemsLeft * itemWidth;  

//     setPosition();
//     checkBtns();
// });

// const setPosition = () => {
//     track.style.transform = `translateX(${position}px)`;
// };
// const checkBtns = () => {
//     btnPrev.disabled = position === 0;
//     btnNext.disabled = position <= -(itemsCount - slidesToShow) * itemWidth;
// };
// checkBtns();

// --------------------------------------------------------------------

let position1 = 0;
const container1 = document.querySelector('.slider_container1');
let slidesToShow1 = ~~(container1.clientWidth / 300);
let slidesToScroll1 = 1;
const track1 = document.querySelector('.slider_track1');
const btnPrev1 = document.querySelector('.btn_prev1');
const btnNext1 = document.querySelector('.btn_next1');
const sliderItem1 = document.querySelectorAll('.slider_item1');
const itemsCount1 = sliderItem1.length;
const itemWidth1 = container1.clientWidth / slidesToShow1;
const movePosition1 = slidesToScroll1 * itemWidth1;


sliderItem1.forEach((item) => {
    item.style.minWidth = `${itemWidth1}px`;
});

btnNext1.addEventListener('click',() => {
    const sliderItemLeft = itemsCount1 - (Math.abs(position1) + slidesToShow1 * itemWidth1) / itemWidth1;

    position1 -= sliderItemLeft >= slidesToScroll1 ? movePosition1 : sliderItemLeft * itemWidth1;

    setPosition1();
    checkBtns1();
});

btnPrev1.addEventListener('click',() => {
    const sliderItemLeft = Math.abs(position1) / itemWidth1;
    position1 += sliderItemLeft >= slidesToScroll1 ? movePosition1 : sliderItemLeft * itemWidth1;  

    setPosition1();
    checkBtns1();
});

const setPosition1 = () => {
    track1.style.transform = `translateX(${position1}px)`;
};
const checkBtns1 = () => {
    btnPrev1.disabled = position1 === 0;
    btnNext1.disabled = position1 <= -(itemsCount1 - slidesToShow1) * itemWidth1;
};
checkBtns1();