'use strict'


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
