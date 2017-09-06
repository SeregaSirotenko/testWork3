<?php

/**
* Функция реализует подключение страниц
*
* @author Sergey
*/
function print_content() {

    if ($_GET['page']) {
        include __DIR__ . '/../pages/' . $_GET['page'] . '.php';
    }
}