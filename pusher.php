<?php
require __DIR__ . '/vendor/autoload.php';

$options = array(
    'cluster' => 'eu',
    'useTLS' => true
);
$pusher = new Pusher\Pusher(
    'f8fd881e07287e11fcfb',
    'f7930a38b2386a214ef2',
    '662300',
    $options
);

$pusher->trigger('userChat'.$_POST['id'], 'chat_msg', $_POST['msg']);
?>