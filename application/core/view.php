<?php
namespace Core;
/**
 * Class View
 *
 * Клас підключає сторінки, отримані з контроллера
 *
 * @package Core
 */
class View
{
    /**
     * функція
     *
     * єдина в класі, інклудить всі необхідні сторінки
     *
     * @param $content_view
     * @param $template_view
     * @param null $data
     */
    function generate($content_view, $template_view, $data = null)
    {
        if (isset($data) && is_string($data)){
            $partial=$data;
        }
        include 'application/layouts/' . $template_view;
    }

}
