<?php

class ThemeHouse_LastPostAvatar_Listener_TemplatePostRender extends ThemeHouse_Listener_TemplatePostRender
{

    protected function _getTemplates()
    {
        return array(
            'node_forum_level_1',
            'node_forum_level_2',
            'node_category_level_2',
            'th_node_level_1_socialgroups',
            'th_node_level_2_socialgroups',
            'th_library_level_1_library',
            'th_library_level_2_library',
            'th_social_forum_list_item_socialgroups'
        );
    } /* END _getTemplates */

    public static function templatePostRender($templateName, &$content, array &$containerData,
        XenForo_Template_Abstract $template)
    {
        $templatePostRender = new ThemeHouse_LastPostAvatar_Listener_TemplatePostRender($templateName, $content,
            $containerData, $template);
        list($content, $containerData) = $templatePostRender->run();
    } /* END templatePostRender */

    protected function _nodeForumLevel1()
    {
        return $this->_nodeForumLevel2();
    } /* END _nodeForumLevel1 */

    protected function _nodeForumLevel2()
    {
        $viewParams = $this->_fetchViewParams();
        $lastPostTitleMaxChars = XenForo_Application::get('options')->th_lastPostAvatar_lastPostTitleMaxLength;
        if (isset($viewParams['forum'])) {
            $node = $viewParams['forum'];
            if (!$node['lastPost']['date']) {
                return;
            }
            $rendered = $this->_render('th_node_forum_avatar_lastpostavatar');
            $title = XenForo_Helper_String::wholeWordTrim($node['lastPost']['title'], $lastPostTitleMaxChars);
        } else
            if (isset($viewParams['category'])) {
                $node = $viewParams['category'];
                if (!$node['lastPost']['date']) {
                    return;
                }
                $rendered = $this->_render('th_node_category_avatar_lastpostavatar');
                $title = XenForo_Helper_String::wholeWordTrim($node['lastPost']['title'], $lastPostTitleMaxChars);
            } else
                if (isset($viewParams['library'])) {
                    $node = $viewParams['library'];
                    if (!$node['lastArticlePage']['date']) {
                        return;
                    }
                    $rendered = $this->_render('th_node_library_avatar_lastpostavatar');
                    $title = XenForo_Helper_String::wholeWordTrim($node['lastArticlePage']['title'],
                        $lastPostTitleMaxChars);
                }
        if (!isset($node['privateInfo']) || !$node['privateInfo']) {
    		$pattern = '#(<div class="nodeLastPost(?: secondaryContent)?">)(.*)(<a[^>]*>)[^<]*(</a>)#Us';
            $replacement = '${1}' . $rendered . '${2}' . '${3}' . $title . '${4}';
            $this->_contents = preg_replace($pattern, $replacement, $this->_contents, 1);
        }
    } /* END _nodeForumLevel2 */

    protected function _nodeCategoryLevel2()
    {
        return $this->_nodeForumLevel2();
    } /* END _nodeCategoryLevel2 */

    protected function _thNodeLevel1Socialgroups()
    {
        return $this->_nodeForumLevel2();
    } /* END _thNodeLevel1Socialgroups */

    protected function _thNodeLevel2Socialgroups()
    {
        return $this->_nodeForumLevel2();
    } /* END _thNodeLevel2Socialgroups */

    protected function _thLibraryLevel1Library()
    {
        return $this->_nodeForumLevel2();
    } /* END _thLibraryLevel1Library */

    protected function _thLibraryLevel2Library()
    {
        return $this->_nodeForumLevel2();
    } /* END _thLibraryLevel2Library */

    protected function _thSocialForumListItemSocialgroups()
    {
        return $this->_nodeForumLevel2();
    } /* END _thSocialForumListItemSocialgroups */
}