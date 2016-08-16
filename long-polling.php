<?php

set_time_limit(0);

require_once 'DebianBot.php';

define('BOT_TOKEN', 'your bot token');

$bot = new DebianDayBot(BOT_TOKEN, 'DebianDayBotChat');
$bot->runLongpoll();
