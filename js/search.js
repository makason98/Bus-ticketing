const rezerv = document.querySelector('.rezerv');
const btnCancel = document.querySelectorAll('.btn-cancel');
const btnBuy = document.querySelectorAll('.btn_buy');
const resultChangeBtn = document.querySelector('.result__change');
const resultContainer = document.querySelector('.result__container');
const formSearch = document.querySelector('.yyy');

rezerv.style.display = 'none';

resultChangeBtn.addEventListener('click', () => {
    changeWay();
    showSearchWay();
    rezerv.style.top = '0'
    if(window.matchMedia("(max-width: 994px)").matches){
        rezerv.style.top = '155px'
    };
    if(window.matchMedia("(max-width: 833px)").matches){
        rezerv.style.top = '100px'
    };
});
function changeWay() {
    resultContainer.style.display = 'none';
};
function hideSearchWay() {
    formSearch.style.display = 'none';   
};
hideSearchWay();
function showSearchWay() {
    formSearch.style.display = 'block';  
};
// .accordion-collapse collapse show
//     text-decoration: underline
// const show = document.querySelectorAll('.station-name');
// const stationDescr = document.querySelectorAll('.station_descr');


// if(show.removeClass('collapsed')){
//     // stationDescr.style.textDecoration = 'none';
//     console.log('www');
// };