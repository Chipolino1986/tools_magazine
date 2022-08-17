"use strict"

const openPopUp = document.getElementById('open_popUp_stock_burger');
const closePopUp = document.getElementById('pop_up_close_stock_burger');
const popUp = document.getElementById('pop_up_stock_burger');

openPopUp.addEventListener('click', function(event){
    event.preventDefault();
    popUp.classList.add('active');
})

closePopUp.addEventListener('click', () => {
    popUp.classList.remove('active');
})

