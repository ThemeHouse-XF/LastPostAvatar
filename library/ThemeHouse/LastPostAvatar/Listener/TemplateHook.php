<?php

class ThemeHouse_LastPostAvatar_Listener_TemplateHook extends ThemeHouse_Listener_TemplateHook
{

    protected function _getHooks()
    {
        return array(
            'thread_list_threads',
            'thread_list_stickies'
        );
    } /* END _getHooks */

    public static function templateHook($hookName, &$contents, array $hookParams, XenForo_Template_Abstract $template)
    {
        $templateHook = new ThemeHouse_LastPostAvatar_Listener_TemplateHook($hookName, $contents, $hookParams, $template);
        $contents = $templateHook->run();
    } /* END templateHook */

    protected function _threadListThreads()
    {
        $this->_threadListAnyThreads('threads');
    } /* END _threadListThreads */

    protected function _threadListStickies()
    {
        $this->_threadListAnyThreads('stickyThreads');
    } /* END _threadListStickies */

    protected function _thThreadListItemLastPostAvatar($viewParams = null)
    {
        if (!$viewParams) {
            $viewParams = $this->_fetchViewParams();
        }
        if ($viewParams['thread']['discussion_state'] != 'deleted') {
            if ($viewParams['thread']['discussion_type'] != 'redirect') {
                $pattern = '#(<li id="thread-' . $viewParams['thread']['thread_id'] .
                     '".*<dl class="lastPostInfo">)(.*</dl>.*</li>)#Us';
                $replacement = '${1}' . $this->_render('th_thread_list_item_lastpostavatar', $viewParams) . '${2}';
                $this->_contents = preg_replace($pattern, $replacement, $this->_contents);
            }
        }
    } /* END _thThreadListItemLastPostAvatar */ /* END _thThreadListItemThreadThumbs */

    protected function _threadListAnyThreads($threadType)
    {
        $viewParams = $this->_fetchViewParams();
        if (!isset($viewParams[$threadType])) {
            return;
        }
        foreach ($viewParams[$threadType] as $viewParams['thread']) {
            $this->_thThreadListItemLastPostAvatar($viewParams);
        }
    } /* END _threadListAnyThreads */
}