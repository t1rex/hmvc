<?php
/**
 * опис файлу controller_services
 */
/**
 * Class Controller_Services
 *
 * контроллер сервісів
 * крім сторінки services_view підключає ще й footer_partial
 *
 * @author я
 */
class Controller_Services extends Core\Controller
{
    /**
     * покищо єдина функція, яка підключає не дві вюхи
     */
    function action_index()
    {
        $this->view->generate('services_view.php', 'LayoutSimple.php', 'footer_partial.php');
//        $this->view->AddPartial('services_view.php', 'footer_partial.php');
    }
}
