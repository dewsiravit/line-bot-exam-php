<?php
 $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('8XOO0p2GBqlmCXbqQXbWD7h04zjLaS/X3tLjJvnntXmZV4lvVgSWyz2RllKgAp4MUYjSsX1MTxcpfOgJ2reQ3HGw+34gpCPchE51xfA23yM6aTZzKP0z0Xo3NilqiWppVJBwVh0mvT8ujyKQ0UChglGUYhWQfeY8sLGRXgo3xvw=
');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '26604a0a46d202c44f45cabe032ebc8e']);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->replyMessage('<replyToken>', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
 
?>
