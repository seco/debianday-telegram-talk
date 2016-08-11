<?php

set_time_limit(0);

require_once 'DebianBot.php';

define('BOT_TOKEN', '257666118:AAGnC4fEN2dABmtpxAgNxnTqj054YXh-u9Y');

$bot = new DebianDayBot(BOT_TOKEN, 'DebianDayBotChat');
$bot->runLongpoll();