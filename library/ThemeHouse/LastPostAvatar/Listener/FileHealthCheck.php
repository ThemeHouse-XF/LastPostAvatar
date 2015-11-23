<?php

class ThemeHouse_LastPostAvatar_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/LastPostAvatar/Extend/ThemeHouse/SocialGroups/ControllerPublic/SocialCategory.php' => '7d7ab3d436f25f20601847bd45ca3a03',
                'library/ThemeHouse/LastPostAvatar/Extend/ThemeHouse/SocialGroups/ControllerPublic/SocialForum.php' => '418af46128891531207b73cd61e7f86c',
                'library/ThemeHouse/LastPostAvatar/Extend/ThemeHouse/SocialGroups/Model/SocialForum.php' => '95e2d973e7740accef0a24237e5a305b',
                'library/ThemeHouse/LastPostAvatar/Extend/XenForo/ControllerPublic/Forum.php' => 'ac4fa3fbde44edb0dbfd0b78763f0a5a',
                'library/ThemeHouse/LastPostAvatar/Extend/XenForo/Model/Node.php' => '48a4b84c7461b0462a67ddd3b660d406',
                'library/ThemeHouse/LastPostAvatar/Extend/XenForo/Model/Thread.php' => 'd2eaed8b25125af63e06963006529783',
                'library/ThemeHouse/LastPostAvatar/Extend/XenForo/Model/ThreadWatch.php' => '19225e818dce6db752655553d7b84f75',
                'library/ThemeHouse/LastPostAvatar/Install/Controller.php' => '9a3802b18e1222a35a39684c1f39c0e4',
                'library/ThemeHouse/LastPostAvatar/Install.php' => '0d4abc41b518b7f996ca33e851b9765b',
                'library/ThemeHouse/LastPostAvatar/Listener/ControllerPreDispatch.php' => '6561516f143e9323cb82a93de7b226fb',
                'library/ThemeHouse/LastPostAvatar/Listener/InitDependencies.php' => 'ce407ff5715c837d02b1aba7975bf512',
                'library/ThemeHouse/LastPostAvatar/Listener/LoadClass.php' => '413919c37d2ce92bde9fa881c9e98eff',
                'library/ThemeHouse/LastPostAvatar/Listener/TemplateCreate.php' => '0b22234487d9559aaedca39cd92455d6',
                'library/ThemeHouse/LastPostAvatar/Listener/TemplateHook.php' => 'bd49c3de37bd26ff78b9d89d87900684',
                'library/ThemeHouse/LastPostAvatar/Listener/TemplatePostRender.php' => '3fb0bccb598dcd8a479bda44c306a370',
                'library/ThemeHouse/Install.php' => '18f1441e00e3742460174ab197bec0b7',
                'library/ThemeHouse/Install/20151109.php' => '2e3f16d685652ea2fa82ba11b69204f4',
                'library/ThemeHouse/Deferred.php' => 'ebab3e432fe2f42520de0e36f7f45d88',
                'library/ThemeHouse/Deferred/20150106.php' => 'a311d9aa6f9a0412eeba878417ba7ede',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
                'library/ThemeHouse/Listener/Template.php' => '0aa5e8aabb255d39cf01d671f9df0091',
                'library/ThemeHouse/Listener/Template/20150106.php' => '8d42b3b2d856af9e33b69a2ce1034442',
                'library/ThemeHouse/Listener/TemplateCreate.php' => '6bdeb679af2ea41579efde3e41e65cc7',
                'library/ThemeHouse/Listener/TemplateCreate/20150106.php' => 'c253a7a2d3a893525acf6070e9afe0dd',
                'library/ThemeHouse/Listener/TemplateHook.php' => 'a767a03baad0ca958d19577200262d50',
                'library/ThemeHouse/Listener/TemplateHook/20150106.php' => '71c539920a651eef3106e19504048756',
                'library/ThemeHouse/Listener/TemplatePostRender.php' => 'b6da98a55074e4cde833abf576bc7b5d',
                'library/ThemeHouse/Listener/TemplatePostRender/20150106.php' => 'efccbb2b2340656d1776af01c25d9382',
            ));
    }
}