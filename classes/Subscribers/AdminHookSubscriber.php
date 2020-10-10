<?php


namespace Ecjia\App\Integrate\Subscribers;

use ecjia_admin;
use RC_Hook;
use Royalcms\Component\Hook\Dispatcher;

class AdminHookSubscriber
{

    public static function integrate_user_setup_form_widget($code)
    {
        $handler = 'integrate_user_setup_form_widget_by_'.$code;

        if ($code == 'ecjiauc' || $code == 'ucenter') {
            echo ecjia_admin::$controller->fetchAppTemplate('integrate', 'admin/library/integrate_ucenter_setup_widget.lbi');
        }
        elseif ($code == 'ecjia') {
            echo ecjia_admin::$controller->fetchAppTemplate('integrate', 'admin/library/integrate_ecjia_setup_widget.lbi');
        }
        elseif(RC_Hook::has_action($handler)) {
            RC_Hook::do_action($handler);
        }
        else {
            echo ecjia_admin::$controller->fetchAppTemplate('integrate', 'admin/library/integrate_other_setup_widget.lbi');
        }

    }


    /**
     * Register the listeners for the subscriber.
     *
     * @param \Royalcms\Component\Hook\Dispatcher $events
     * @return void
     */
    public function subscribe(Dispatcher $events)
    {

        RC_Hook::add_action('integrate_user_setup_form_widget', [__CLASS__, 'integrate_user_setup_form_widget']);


    }

}