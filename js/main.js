let page = document.querySelector('.page')
if (localStorage.id_theme == null) {
    localStorage.id_theme = 0;
}
if (localStorage.id_theme == 0) {
    page.classList.remove('dark-theme');
}
else {
    page.classList.add('dark-theme');
}
let themeButton = document.querySelector('.theme-button');
themeButton.onclick = function () {
    if (localStorage.id_theme == 0) {
        localStorage.id_theme = 1;
        page.classList.add('dark-theme');
    }
    else {
        localStorage.id_theme = 0;
        page.classList.remove('dark-theme');
    }
}

// let page = document.querySelector('.page')
// if (sessionStorage.id_theme == null) {
//     sessionStorage.id_theme = 0;
// }
// if (sessionStorage.id_theme == 0) {
//     page.classList.remove('dark-theme');
// }
// else {
//     page.classList.add('dark-theme');
// }
// let themeButton = document.querySelector('.theme-button');
// themeButton.onclick = function () {
//     if (sessionStorage.id_theme == 0) {
//         sessionStorage.id_theme = 1;
//         page.classList.add('dark-theme');
//     }
//     else {
//         sessionStorage.id_theme = 0;
//         page.classList.remove('dark-theme');
//     }
// }

/*let page = document.querySelector('.page')
//page.classList.add('dark-theme')
let themeButton = document.querySelector('.theme-button');
themeButton.onclick = function () {
    page.classList.toggle('dark-theme');
}*/
/*------------------------------------------*/

$('.paulund_modal a').on('click', function () {
    $('.popups__inner').addClass('active');
});

$('.close_popup').on('click', function () {
    $('.popups__inner').removeClass('active');
});






