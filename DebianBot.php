<?php

require_once 'TelegramBot.php';

class DebianDayBot extends TelegramBot {

  public function init() {
    parent::init();
  }

}

class DebianDayBotChat extends TelegramBotChat {

  public function command_start($text, $message) {
    
    $informacoesDaMensagem = json_decode($message, true);
    
    $chatId = 'your chat_id';
    $replyMarkup = array( 'keyboard' => array(array('Ligar', 'Desligar', 'Como estou?')),'one_time_keyboard' => true, 'resize_keyboard' => true);

		$this->apiSendMessage("Olá ", array('reply_markup' => $replyMarkup));
  }

  public function message($text, $message) {

    $mensagens = array(0 => "Eu não converso, somente executo comandos.", 1 => "Digite um comando, não estou para conversa.");
    
    if ($text=='Ligar') {
      $this->apiSendMessage("Lâmapada ligada");  
    } else if ($text=='Desligar') {
      $this->apiSendMessage("Lâmapada Desligada");
    } else if ($text=='Como estou?') {
        //alguma ação
    } else {
        $this->apiSendMessage($mensagens[rand(0,1)]);  
    }
  }

}
