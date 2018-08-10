<?php

/**
 * StudipDeveloperChatLinkPlugin.class.php
 *
 * Integriert einen Link zum IRC-Entwicklerchat #stud.ip auf freenode.
 *
 * @author  Jan-Hendrik Willms <tleilax+studip@gmail.com>
 * @version 1.0
 **/

class StudipDeveloperChatLinkPlugin extends StudIPPlugin implements SystemPlugin
{

    public function __construct()
    {
        parent::__construct();

        $url = 'https://matrix.to/#/%23Stud.IP:matrix.org';

        $position = Navigation::hasItem('/links/logout') ? 'logout' : 'login';

        $navigation = new Navigation('Entwickler-Chat');
        $navigation->setURL($url);
        Navigation::insertItem('/links/chat', $navigation, $position);
    }
}
