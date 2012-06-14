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

        $url = 'http://webchat.freenode.net/?channels=stud.ip&prompt=1';
        if ($GLOBALS['user']->username) {
            $url .= '&nick=' . urlencode($GLOBALS['user']->username);
        }

        $navigation = new Navigation('Chat');
        $navigation->setURL($url);
        Navigation::insertItem('/links/chat', $navigation, 'logout');
    }
}