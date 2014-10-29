<?php
/**
 * Class Route
 *
 * Класс-маршрутизатор для визначення запитуваної сторінки
 * чіпляє класи контроллерів і моделей
 * створює екземпляри контроллерів сторінок і викликає дії цих котнтоллерів
 */

class Route
{

    static function start()
    {
        /**
         * контроллер і дія по замовчуванню
         */
        $controller_name = 'Main';
        $action_name = 'index';
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        /**
         * отримуємо імя контроллера
         */
        if ( !empty($routes[1]) )
        {
            $controller_name = $routes[1];
        }

        /**
         * отримуємо імя екшина
         */
        if ( !empty($routes[2]) )
        {
            $action_name = $routes[2];
        }

        /**
         * добавляємо префікси
         */
        $model_name = 'Model_'.$controller_name;
        $controller_name = 'Controller_'.$controller_name;
        $action_name = 'action_'.$action_name;
        /**
         * чіпляєм файл з класом моделі(файла може і не бути)
         */
        $model_file = strtolower($model_name).'.php';
        $model_path = "application/models/".$model_file;
        if(file_exists($model_path))
        {
            include "application/models/".$model_file;
        }
        /**
         * чіпляємо файл з класом контроллера
         */
        $controller_file = strtolower($controller_name).'.php';
        $controller_path = "application/controllers/".$controller_file;
        if(file_exists($controller_path))
        {
            include "application/controllers/".$controller_file;
        }
        else
        {
            Route::ErrorPage404();
        }

        /**
         * створюєм котнроллер
         */
        $controller = new $controller_name;
        $action = $action_name;

        if(method_exists($controller, $action))
        {
            /**
             * викликаємо дію контроллера
             */
            $controller->$action();
        }
        else
        {
            Route::ErrorPage404();
        }
    }
    function ErrorPage404()
    {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }

}
