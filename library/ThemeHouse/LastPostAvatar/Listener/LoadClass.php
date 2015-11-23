<?php

class ThemeHouse_LastPostAvatar_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
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
                    'XenForo_Model_Thread',
                    'XenForo_Model_ThreadWatch'
                ), /* END 'model' */
            ), /* END 'ThemeHouse_LastPostAvatar' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassController($class, array &$extend)
    {
        $loadClassController = new ThemeHouse_LastPostAvatar_Listener_LoadClass($class, $extend, 'controller');
        $extend = $loadClassController->run();
    } /* END loadClassController */

    public static function loadClassModel($class, array &$extend)
    {
        $loadClassModel = new ThemeHouse_LastPostAvatar_Listener_LoadClass($class, $extend, 'model');
        $extend = $loadClassModel->run();
    } /* END loadClassModel */
}