const theBlog = document.querySelector('.the_blog');
const page = document.querySelector('.page');
const themeButton = document.querySelector('.theme-button');



theBlog.addEventListener('click', () => {
    alert("Данный раздел пока не добавлен, находится в разработке!");
});

// ------------------------------------------
if (localStorage.id_theme == null) {
    localStorage.id_theme = 0;
}
if (localStorage.id_theme == 0) {
    page.classList.remove('dark-theme');
}
else {
    page.classList.add('dark-theme');
};
// ------------------------------------------

themeButton.onclick = function () {
    if (localStorage.id_theme == 0) {
        localStorage.id_theme = 1;
        page.classList.add('dark-theme');
    }
    else {
        localStorage.id_theme = 0;
        page.classList.remove('dark-theme');
    }
};
// ------------------------------------------



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
/*------------------------------------------*/
const btnUp = {
    el: document.querySelector('.btn-up'),
    scrolling: false,
    show() {
        if (this.el.classList.contains('btn-up_hide') && !this.el.classList.contains('btn-up_hiding')) {
            this.el.classList.remove('btn-up_hide');
            this.el.classList.add('btn-up_hiding');
            window.setTimeout(() => {
                this.el.classList.remove('btn-up_hiding');
            }, 300);
        }
    },
    hide() {
        if (!this.el.classList.contains('btn-up_hide') && !this.el.classList.contains('btn-up_hiding')) {
            this.el.classList.add('btn-up_hiding');
            window.setTimeout(() => {
                this.el.classList.add('btn-up_hide');
                this.el.classList.remove('btn-up_hiding');
            }, 300);
        }
    },
    addEventListener() {
        // при прокрутке окна (window)
        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY || document.documentElement.scrollTop;
            if (this.scrolling && scrollY > 0) {
                return;
            }
            this.scrolling = false;
            // если пользователь прокрутил страницу более чем на 200px
            if (scrollY > 400) {
                // сделаем кнопку .btn-up видимой
                this.show();
            } else {
                // иначе скроем кнопку .btn-up
                this.hide();
            }
        });
        // при нажатии на кнопку .btn-up
        document.querySelector('.btn-up').onclick = () => {
            this.scrolling = true;
            this.hide();
            // переместиться в верхнюю часть страницы
            window.scrollTo({
                top: 0,
                left: 0,
                behavior: 'smooth'
            });
        }
    }
}

btnUp.addEventListener();








