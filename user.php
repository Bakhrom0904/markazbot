<?php

function setPage($chat_id,$page)
{
    file_put_contents('users/'.$chat_id.'page.txt',$page);
}

function getPage($chat_id)
{
    file_get_contents('users/'.$chat_id.'page.txt');
}

function setLanguage($chat_id,$page)
{
    file_put_contents('users/'.$chat_id.'language.txt',$page);
}

function getLanguage($chat_id)
{
    file_get_contents('users/'.$chat_id.'language.txt');
}