<?php

/* Проверено на локальном сервере, что код статуса запроса на api.php 200 */

define('PATH_KEITARO_ORDERS_API_SRC','../../../orders_api/src/');
require_once(PATH_KEITARO_ORDERS_API_SRC.'send_order.php');

$thxPage = './success/success.html';
$dimensionName = 'default';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('Invalid request');
}

sendOrder($dimensionName, $thxPage, $_POST);