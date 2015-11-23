<?php

class ThemeHouse_LastPostAvatar_Listener_ControllerPreDispatch extends ThemeHouse_Listener_ControllerPreDispatch
{

    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_LastPostAvatar' => array(
                'controller' => array(
                    'ThemeHouse_SocialGroups_ControllerPublic_SocialCategory',
                    'ThemeHouse_SocialGroups_ControllerPublic_SocialForum',
                    'XenForo_ControllerPublic_Forum'
                ), /* END 'controller' */
                'model' => array(
                    'ThemeHouse_SocialGroups_Model_SocialForum',
                    'XenForo_Model_Node',
                    'XenForo_Model_Thread'
                ), /* END 'model' */
            ), /* END 'ThemeHouse_LastPostAvatar' */
        );
    } /* END _getExtendedClasses */

    public function run()
    {
        if (self::$_controller instanceof XenForo_ControllerPublic_Index ||
             self::$_controller instanceof XenForo_ControllerPublic_Forum) {
            self::$_showCopyright = true;
        }

        parent::run();
    } /* END run */

    public static function controllerPreDispatch(XenForo_Controller $controller, $action)
    {
        $controllerPreDispatch = new ThemeHouse_LastPostAvatar_Listener_ControllerPreDispatch($controller, $action);
        $controllerPreDispatch->run();
    } /* END controllerPreDispatch */
}