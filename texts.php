<?php
include "db_connect.php";
include "user.php";

function getmText($keyword, $chat)
{
    global $db;

    $lang=getLanguage($chat_id);

    $result = $db->query("SELECT*FROM 'texts' WHERE 'keyword' = '{$keyword}' LIMIT 1");

    $arr = $result->fetch_assoc();

    var_dump($arr);

    
}