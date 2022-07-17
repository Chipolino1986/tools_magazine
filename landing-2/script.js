// "use strict"

// let step = 0;
// let position = 1;
// const container = document.querySelector('.slider_container');
// const track = document.querySelector('.slider_track');
// const btnPrev = document.querySelector('.btn_prev');
// const btnNext = document.querySelector('.btn_next');
// const items = document.querySelectorAll('.slider_item');
// const itemWidth = container.clientWidth;
// let sliderItems = [];

// items.forEach((item) => {
//     item.style.minWidth = `${itemWidth}px`;
//     sliderItems.push(item.cloneNode());
//     item.remove();
// });

// function setCenter() {
//     track.style.transform = `translateX(${-itemWidth}px)`;
// }
// function drow() {
//     track.appendChild(sliderItems[step]);
//     if ((step + 1) === sliderItems.length) {
//         step = 0;
//     } else {
//         step++
//     }
//     position = 2;
// }
// drow();
// drow();
// drow();
// setCenter();


// function right() {
//     btnNext.removeEventListener('click', right)
//     let items2 = document.querySelectorAll('.slider_item');
//     track.style.transform = `translateX(${-itemWidth * 2}px)`;
 
//     setTimeout(function () {
//         items2[0].remove();
//         drow();
//         track.style.transition = "none";
//         setCenter();
//         btnNext.addEventListener("click", right);
//     }, 500)
//     setTimeout(function () {
//         track.style.transition = "0.5s";
//     }, 700)
// }
// function left() {
//     btnPrev.removeEventListener('click', left)
//     let items2 = document.querySelectorAll('.slider_item');
//     track.style.transform = `translateX(0px)`;
 
//     setTimeout(function () {
//         items2[0].remove();
//         drow();
//         track.style.transition = "none";
//         setCenter();
//         btnPrev.addEventListener("click", left);
//     }, 500)
//     setTimeout(function () {
//         track.style.transition = "0.5s";
//     }, 700)
// }
// btnPrev.addEventListener("click", left);
// btnNext.addEventListener("click", right);

// -------------------------------------------------------

// btnNext.addEventListener('click',() => {
    // const itemsLeft = itemsCount - (Math.abs(position) + slidesToShow * itemWidth) / itemWidth;

    // position -= itemsLeft >= slidesToScroll ? movePosition : itemsLeft * itemWidth;

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
const slidesToShow1 = 4;
const slidesToScroll1 = 4;
const container1 = document.querySelector('.slider_container1');
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