<?php 
  require 'sendMessage.php';

  $flexDataJson = '';
  $flexDataJsonDeCode = json_decode($flexDataJson,true);

  $datas['url'] = "https://api.line.me/v2/bot/message/push";
  $datas['token'] = "x8IjU+aePqcU5RUBRJlyvR1knBI8gkMfT2yharvm1iA1CH6ALXVskcekhf2AP3w65wvuaYZzo1VKY/n0TTKBGd0ESR7upDhFvDCS13bQVg74IljowJoh8ORV3PuNmfWEyh2ZTbg1EvGKhMgkaI/tpAdB04t89/1O/w1cDnyilFU=";
  $messages['to'] = "U2689c41e6a80c9420c5447acbd6e730b";
  $messages['messages'][] = $flexDataJsonDeCode;
  $encodeJson = json_encode($messages);


  sentMessage($encodeJson,$datas);
?>
