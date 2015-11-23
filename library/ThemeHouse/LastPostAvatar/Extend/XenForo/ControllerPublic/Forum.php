<?php

/**
 *
 * @see XenForo_ControllerPublic_Forum
 */
class ThemeHouse_LastPostAvatar_Extend_XenForo_ControllerPublic_Forum extends XFCP_ThemeHouse_LastPostAvatar_Extend_XenForo_ControllerPublic_Forum
{

    /**
     *
     * @see XenForo_ControllerPublic_Forum::_getThreadFetchElements()
     */
    protected function _getThreadFetchElements(array $forum, array $displayConditions)
    {
        /* @var $threadModel XenForo_Model_Thread */
        $threadModel = $this->_getThreadModel();

        $threadFetchElements = parent::_getThreadFetchElements($forum, $displayConditions);

        $threadFetchConditions = $threadFetchElements['conditions'];
        $threadFetchOptions = $threadFetchElements['options'];

        if (isset($threadFetchOptions['join_th'])) {
            $threadFetchOptions['join_th'] |= ThemeHouse_LastPostAvatar_Extend_XenForo_Model_Thread::FETCH_THEMEHOUSE_LASTPOST_AVATAR;
        } else {
            $threadFetchOptions['join_th'] = ThemeHouse_LastPostAvatar_Extend_XenForo_Model_Thread::FETCH_THEMEHOUSE_LASTPOST_AVATAR;
        }

        return array(
            'conditions' => $threadFetchConditions,
            'options' => $threadFetchOptions
        );
    } /* END _getThreadFetchElements */
}