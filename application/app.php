<?php
/**
 * Підключає файли ядра та запускає маршрутизатор.
 */
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';
require_once 'core/route.php';
include 'helpers/helper.php';
Route::start();