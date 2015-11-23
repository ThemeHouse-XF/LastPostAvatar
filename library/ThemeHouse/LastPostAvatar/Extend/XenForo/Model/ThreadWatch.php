<?php

class ThemeHouse_LastPostAvatar_Extend_XenForo_Model_ThreadWatch extends XFCP_ThemeHouse_LastPostAvatar_Extend_XenForo_Model_ThreadWatch
{

    public function getThreadsWatchedByUser($userId, $newOnly, array $fetchOptions = array())
	{
	    $threadModel = $this->_getThreadModel();

	    $fetchOptions['join_th'] = ThemeHouse_LastPostAvatar_Extend_XenForo_Model_Thread::FETCH_THEMEHOUSE_LASTPOST_AVATAR;

	    return parent::getThreadsWatchedByUser($userId, $newOnly, $fetchOptions);
	} /* END getThreadsWatchedByUser */
}