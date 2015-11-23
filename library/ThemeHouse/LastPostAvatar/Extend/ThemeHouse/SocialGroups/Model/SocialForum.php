<?php

/**
 *
 * @see ThemeHouse_SocialGroups_Model_SocialForum
 */
class ThemeHouse_LastPostAvatar_Extend_ThemeHouse_SocialGroups_Model_SocialForum extends XFCP_ThemeHouse_LastPostAvatar_Extend_ThemeHouse_SocialGroups_Model_SocialForum
{

    /**
     * Constants to allow joins to extra tables in certain queries
     *
     * @var integer Join user table to fetch avatar info of last poster
     */
    const FETCH_THEMEHOUSE_LASTPOST_AVATAR = 0x01;

    /**
     *
     * @see ThemeHouse_SocialGroups_Model_SocialForum::prepareSocialForumFetchOptions()
     */
    public function prepareSocialForumFetchOptions(array $fetchOptions)
    {
        $selectFields = '';
        $joinTables = '';

        if (isset($fetchOptions['join_th'])) {
            if ($fetchOptions['join_th'] & self::FETCH_THEMEHOUSE_LASTPOST_AVATAR) {
                $selectFields .= ',
					last_post_user.avatar_date AS last_post_user_avatar_date, last_post_user.gravatar AS last_post_user_gravatar, last_post_user.gender AS last_post_user_gender';
                $joinTables .= '
					LEFT JOIN xf_user AS last_post_user ON
						(last_post_user.user_id = social_forum.last_post_user_id)';
            }
        }

        $socialForumFetchOptions = parent::prepareSocialForumFetchOptions($fetchOptions);

        return array(
            'selectFields' => $selectFields . $socialForumFetchOptions['selectFields'],
            'joinTables' => $joinTables . $socialForumFetchOptions['joinTables'],
            'orderClause' => $socialForumFetchOptions['orderClause']
        );
    } /* END prepareSocialForumFetchOptions */
}