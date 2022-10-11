<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Личный кабинет</title>
    <style>
        .edit_btn {
            cursor: pointer;
            color: green;
        }

        .edit_btn:hover {
            color: darkgreen;
        }

        p {
            font-size: 1.5rem;
        }

        .save_btn {
            cursor: pointer;
            color: red;
        }

        .save_btn:hover {
            color: darkred;
        }

        .cancel_btn {
            cursor: pointer;
            color: cadetblue;
        }

        .cancel_btn:hover {
            color: violet;
        }

        .personal_account {
            height: 650px;
            margin-top: 150px;
        }
    </style>
</head>

<body class="page">
    <div class="wrapper">
        <header class="header container-fluid">
            <div class="header_container">
                <a href="#" class="header_logo logo">
                    <img class="img_logo" src="img/Logo.png" alt="logo">
                </a>
                <nav class="header_menu ">
                    <ul class="menu_list">
                        <li class="menu_item">
                            <a href="index.html" class="menu_link">Главная</a>
                        </li>
                        <li class="menu_item">
                            <a href="#" class="menu_link">Блог</a>
                        </li>
                        <li class="menu_item">
                            <a href="culinary_dictionary.html" class="menu_link">Кулинарный словарь</a>
                        </li>
                        <li class="menu_item">
                            <div class="paulund_modal">
                                <a href="#" class="menu_link click_me">Связаться с нами</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="login"><a href="register.html"><i class="fa fa-sign-in" aria-hidden="true"></i></a></div>
            <div class="theme">
                <button class="theme-button" type="button">Изменить тему</button>
            </div>
        </header>

        <div class="container mt-5 personal_account">
            <h1 class="text-center mb-5">Личный кабинет</h1>
            <p class="mb-3">Имя:
                <span><?= $_SESSION["name"]; ?></span>
                <span class="edit_btn">[ Изменить ]</span>
                <span class="save_btn" hidden data-item="name">[ Сохранить ]</span>
                <span class="cancel_btn" hidden>[ Отменить ]</span>
            </p>
            <p class="mb-3">Фамилия:
                <span><?php echo $_SESSION["lastname"]; ?></span>
                <span class="edit_btn">[ Изменить ]</span>
                <span class="save_btn" hidden data-item="lastname">[ Сохранить ]</span>
                <span class="cancel_btn" hidden>[ Отменить ]</span>
            </p>
            <p class="mb-3">E-mail: <?php echo $_SESSION["email"]; ?></p>
            <p>Id: <?php echo $_SESSION["id"]; ?></p>
        </div>

        <footer class="footer">
            <div class="footer_text_body">
                <h2 class="footer_title">Мы в соцсетях</h2>
                <p class="footer_text">Присоединяйтесь к нам прямо сейчас</p>
            </div>
            <div class="icons d-flex ">
                <div class="icon_item" style="background-color: #507299;"><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></div>
                <div class="icon_item" style="background-color: #3ebe2b;"><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></div>
                <div class="icon_item" style="background-color: #e62117;"><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></div>
                <div class="icon_item" style="background-color: #ee7808;"><a href="#"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a></div>
                <div class="icon_item" style="background-color: #7d3daf;"><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></div>
                <div class="icon_item" style="background-color: #08c;"><a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a></div>
            </div>
        </footer>
        <!-------------------- Модалка для связи ------------------->
        <div class="popups__inner">
            <div class="popup callme__popup">
                <a class="close_popup">X</a>
                <h3>Мы с вами свяжемся!</h3>
                <p>Отправьте заявку и мы перезвоним</p>
                <form action="#">
                    <input type="text" name="name" placeholder="Ваше имя">
                    <input type="tel" name="tel" placeholder="Ваш номер телефона">
                    <input type="submit" value="Отправить">
                </form>
            </div>
        </div>
    </div>



    <script>
        let edit_buttons = document.querySelectorAll(".edit_btn");
        let save_buttons = document.querySelectorAll(".save_btn");
        let cancel_buttons = document.querySelectorAll(".cancel_btn");


        for (let i = 0; i < edit_buttons.length; i++) {

            let inputValue = edit_buttons[i].previousElementSibling.innerText;

            edit_buttons[i].addEventListener("click", () => {
                // let inputValue = edit_buttons[i].previousElementSibling.innerText;
                edit_buttons[i].previousElementSibling.innerHTML = `<input type="text" value="${inputValue}">`;
                save_buttons[i].hidden = false;
                cancel_buttons[i].hidden = false;
                edit_buttons[i].hidden = true;
            });



            cancel_buttons[i].addEventListener("click", () => {
                edit_buttons[i].previousElementSibling.innerText = inputValue; //Просто возвращаем значение изначальное переменной inputValue при ее объявлении

                save_buttons[i].hidden = true;
                cancel_buttons[i].hidden = true;
                edit_buttons[i].hidden = false;
            })

            save_buttons[i].addEventListener("click", async () => {
                let newInputValue = edit_buttons[i].previousElementSibling.firstElementChild.value; //Беру значение первого потомка предыдущего соседа элемента кнопки изменить и кладу в переменную.
                edit_buttons[i].previousElementSibling.innerText = newInputValue;

                save_buttons[i].hidden = true;
                cancel_buttons[i].hidden = true;
                edit_buttons[i].hidden = false;

                let formData = new FormData(); //Новый объект форм дата
                formData.append("value", newInputValue); //С помощью метода append наполняем этот объект:ключ value со значением newInputValue
                formData.append("item", save_buttons[i].dataset.item); //С помощью метода append наполняем этот объект:ключ item со значением save_buttons[i].dataset.item

                //Отправка на сервер данных с помощью метода ассинхронной функции await fetch
                let response = await fetch("php/lk_obr.php", {
                    method: 'POST',
                    body: formData
                });
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>