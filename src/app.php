<?php

include '_includes.php';

$admin = new Member('acme_admin');

$memberA = new Member('acme_memberA');
$memberB = new Member('acme_memberB');

$workspace = $admin->createWorkspace('acme');
$admin->addWorkspaceMember($memberA, $workspace);
$admin->addWorkspaceMember($memberB, $workspace);

// creating a chat using the Chat class
// $chat = $memberA->createChat('general', $workspace);

$channel = $admin->createChannel('channel name', $workspace);
$admin->postMessageToChat('Hello!', $channel);

$dm = $memberA->createDirectMessage([$memberB], $workspace);
$memberB->postMessageToChat('Hello again!', $dm);

echonl($channel->getMessages());
echonl($dm->getMessages($memberB));
echonl($dm->getMessages($memberA));
echonl($dm->getMessages($admin));
