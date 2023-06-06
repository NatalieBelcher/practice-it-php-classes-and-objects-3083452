<?php

include '_includes.php';

$admin = new Member();
$admin->username = 'admin-test';

$member = new Member();
$member->username = 'member-test';

$workspace = $admin->createWorkspace('workspacetest');
$admin->addWorkspaceMember($member, $workspace);
$chat = $member->createChat('new chat', $workspace);
$member->postMessageToChat('Hello there!', $chat);
