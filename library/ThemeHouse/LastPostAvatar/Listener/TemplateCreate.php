<?php

class ThemeHouse_LastPostAvatar_Listener_TemplateCreate extends ThemeHouse_Listener_TemplateCreate
{

    protected function _getTemplates()
    {
        return array(
            'forum_view',
            'forum_list',
            'th_social_category_view_socialgroups'
        );
    } /* END _getTemplates */

    public static function templateCreate(&$templateName, array &$params, XenForo_Template_Abstract $template)
    {
        $templateCreate = new ThemeHouse_LastPostAvatar_Listener_TemplateCreate($templateName, $params, $template);
        $templateCreate->run();
    } /* END templateCreate */

    protected function _forumView()
    {
        $this->_preloadTemplate('th_thread_list_item_lastpostavatar');
        $this->_forumList();
    } /* END _forumView */

    protected function _forumList()
    {
        $this->_preloadTemplate('th_node_forum_avatar_lastpostavatar');
        $this->_preloadTemplate('th_node_category_avatar_lastpostavatar');
        $this->_preloadTemplate('th_node_library_avatar_lastpostavatar');
    } /* END _forumList */

    protected function _thSocialCategoryViewSocialgroups()
    {
        $this->_preloadTemplate('th_node_forum_avatar_lastpostavatar');
    } /* END _thSocialCategoryViewSocialgroups */ /* END _socialCategoryView */
}