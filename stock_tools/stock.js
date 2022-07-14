"use strict"

const popUpContainers = document.querySelectorAll('.img_box');

popUpContainers.forEach(container => {
    const btnImgOpen = container.querySelector('.img_huter');
    const popUp = container.querySelector('.pop_up');
    const popUpContainer = popUp.querySelector('.pop_up_container');
    const popUpClose = popUp.querySelector('.pop_up_close');
    const withoutContainer = popUp.dataset.withoutContainer;
    const withoutCros = popUp.dataset.withoutCross;

    btnImgOpen.addEventListener('click', function(e) {
        e.preventDefault();
        popUp.classList.add('active');
    })

    if(!withoutContainer) {
        popUpContainer.addEventListener('click', function(e) {
            e.preventDefault();
            if (e.target === popUpContainer) {
                popUp.classList.remove('active');
            }
        })
    }
    if(!withoutCros) {
        popUpClose.addEventListener('click', function(e) {
            e.preventDefault();
            popUp.classList.remove('active');
        })
    } else {
        popUpClose.style.display = 'none';
    }
});