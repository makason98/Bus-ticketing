const span = document.querySelectorAll('.span');
const firstBtn = document.querySelector('.btn1');
const preoffer = document.querySelector('.preoffer');
const offer = document.querySelector('.offer');
const active = document.querySelector('.active');
const company = document.querySelector('.company');
const bus = document.querySelector('.autobus');
const precooperation = document.querySelector('.precooperation');
const cooperation = document.querySelector('.cooperation');

firstBtn.addEventListener('click',(e) => {
    e = e.target;
    company.classList.toggle('active');

});


preoffer.addEventListener('click',(e) => {
    e = e.target;
    offer.classList.toggle('active');

});

company.addEventListener('mouseenter', () => {
    bus.style.display = 'block'
})
company.parentNode.addEventListener('mouseleave', () => {
    bus.style.display = 'none'
});

const tur = document.querySelector('.tour');
const retur = document.querySelector('.retour');
const activity = document.querySelector('.activity');
const arrowBlack = document.querySelector('.test');
const arrowWhite = document.querySelector('.test2');
const arrowRetourBlackUp = document.querySelector('.test3'); //
const arrowRetourWhiteUp = document.querySelector('.test5'); //
const arrowRetourBlackDown = document.querySelector('.test4');
const arrowRetourWhiteDown = document.querySelector('.test6');
const arrowRetour = document.querySelector('.arrow__retour');
const arrowRetourBlack = document.querySelector('.arrow-retour-black');
// hideArrow(arrowRetourBlackUp); // изменения
// hideArrow(arrowRetourBlackDown); // изменения
hideArrow(arrowRetourBlack);
hideArrow(arrowWhite);
 tur.addEventListener('click', (e) => {
    e = e.target;
   addClass(tur);
   removeClass(retur);
   hideArrow(arrowBlack);
   showArrow(arrowWhite);
   hideArrow(arrowRetour);
   showArrow(arrowRetourBlack);

//    hideArrow(arrowRetourWhiteUp);
//     hideArrow(arrowRetourWhiteDown);
//     showArrow(arrowRetourBlackUp);
//     showArrow(arrowRetourBlackDown);

 });

retur.addEventListener('click', (e) => {
    e = e.target;
    addClass(retur);
    removeClass(tur);
    hideArrow(arrowWhite);
    showArrow(arrowBlack);
    hideArrow(arrowRetourBlack);
    showArrow(arrowRetour);
    // hideArrow(arrowRetourBlackUp);
    // hideArrow(arrowRetourBlackDown);
    // showArrow(arrowRetourWhiteUp);
    // showArrow(arrowRetourWhiteDown)
});

function addClass (item){
    item.classList.add('activity');
};
function removeClass (item){
    item.classList.remove('activity');
};
function hideArrow (item){
    item.style.display = 'activity';
};
function showArrow (item){
    item.style.display = 'block';
};
const burger = document.querySelector('.burger');
const burgerActive = document.querySelector('.burger-active');
const headerPartTwo = document.querySelector('.header__part2');
const icons = document.querySelector('.header__icons')
const socialIcons = document.querySelector('.icons-active');
const menuActive = document.querySelector('.menu-active');
const onlineticket = document.querySelector('.header__online');
const onlineticketActive = document.querySelector('.online-active')
const btnHeader = document.querySelector('.header__btn');
const btnActive = document.querySelector('.btn-active');
const callBack = document.querySelector('.callback');
burger.addEventListener('click', () => {
    
    burger.classList.toggle('burger-active')
    headerPartTwo.classList.toggle('menu-active')
    icons.classList.toggle('icons-active')
    onlineticket.classList.toggle('online-active')
    btnHeader.classList.toggle('btn-active')
});

callBack.style.display = 'none';

precooperation.addEventListener('click',(e) => {
    e = e.target;
    cooperation.classList.toggle('active');

});

const borderFoot = document.querySelectorAll('.border-foot');
const footerLink = document.querySelectorAll('.footer-link');


footerLink.forEach(item => {
    item.addEventListener('hover', () => {
        borderFoot.style.display = 'none';
    })
});

