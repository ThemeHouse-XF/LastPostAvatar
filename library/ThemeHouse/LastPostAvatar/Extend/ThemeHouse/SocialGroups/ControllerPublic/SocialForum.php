<?php

/**
 *
 * @see ThemeHouse_SocialGroups_ControllerPublic_SocialForum
 */
class ThemeHouse_LastPostAvatar_Extend_ThemeHouse_SocialGroups_ControllerPublic_SocialForum extends XFCP_ThemeHouse_LastPostAvatar_Extend_ThemeHouse_SocialGroups_ControllerPublic_SocialForum
{

    /**
     *
     * @see ThemeHouse_SocialGroups_ControllerPublic_SocialForum::_getThreadFetchElements()
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