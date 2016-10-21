<?php
function base_url()
{
    if (!empty($_SERVER['SERVER_PORT'])) {
        return 'http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'];
    }
    return 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['SERVER_PORT'] . '/';
}