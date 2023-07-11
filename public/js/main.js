"use strict"

const isMobile = {
    Android: function () {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function () {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function () {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function () {
        return (
            isMobile.Android() ||
            isMobile.BlackBerry() ||
            isMobile.iOS() ||
            isMobile.Opera() ||
            isMobile.Windows()
        );
    }
};
if (isMobile.any()) {
    document.body.classList.add('_touch');
    let menuLinks = document.querySelectorAll('.menu__link')
    menuLinks.forEach((link) => {
        link.addEventListener('click', function (){
            let subActive = document.querySelector('.menu__sub-list.active');
            let linkActive = document.querySelector('.menu__link.active');
            if (subActive && linkActive) {
                subActive.classList.remove('active');
                linkActive.classList.remove('active');
            }
            link.nextElementSibling.classList.add('active');
            link.classList.add('active');
        });
    });
} else { document.body.classList.add('_pc');}

// Меню бургер
const iconMenu = document.querySelector('.menu__icon');
const menuBody = document.querySelector('.menu__body');
const menuLink = document.querySelector('.menu__link');
const menuSub = document.querySelector('.menu__sub-list');

if (iconMenu){
    iconMenu.addEventListener("click", function (){
        let checkLink = document.querySelector('.menu__link.active');
        let checkSubList = document.querySelector('.menu__sub-list.active');
        if (checkLink && checkSubList) {
            checkLink.classList.remove('active');
            checkSubList.classList.remove('active');
        }
        document.body.classList.toggle('_lock');
        iconMenu.classList.toggle('_active');
        menuBody.classList.toggle('_active');
        menuLink.classList.add('active');
        menuSub.classList.add('active');
    });
}
