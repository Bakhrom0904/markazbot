<?php

include 'Telegram.php';
include 'user.php';
include 'db_connect.php';

$telegram = new Telegram('5731774050:AAFt89wzU_yDi6ky6rcLZIZAJv0XfeFM2ss');

$chat_id = $telegram->ChatID();
$text=$telegram->Text();

if($text=="/start")
{
    chooseLanguage();
}

else {
    switch (getPage($chat_id)){
    case 'start':
        if($text == "Русский 🇷🇺")
        {
           setLanguage($chat_id,'ru');
        }
        elseif($text == "O'zbek tili 🇺🇿"){
            setLanguage($chat_id,'uz');
        }
        else {
            chooseButtons();
        }
        
    }
}

function chooseLanguage()
{
    global $telegram, $chat_id;

    $text= "Пожалуйста выберите язык.\n Iltimos tilni tanlang.";

    setPage($chat_id,'start');

    $option = array(
        array($telegram->buildKeyboardButton("Русский 🇷🇺"),$telegram->buildKeyboardButton("O'zbek tili 🇺🇿"))
    );

    $keyb = $telegram->buildKeyBoard($option, $onetime=false, $resize=true);

    $content = array('chat_id' => $chat_id, 'text' => $text, 'reply_markup' => $keyb);

    $telegram->sendMessage($content);
}

