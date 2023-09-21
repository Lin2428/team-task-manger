<?php

use Cake\Http\Session;

use function PHPSTORM_META\type;

/**
 * 
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Message> $messages
 * 
 */

$id = $_SESSION['Auth']->id;
?>
<div class="mx-8 py-3">
    <h2 class="text-3xl font-[500] border-b-[0.05px] pb-4 mb-4">Message du project</h2>
    <div class="mb-[18rem]">
        <?php foreach ($messages as $message) : ?>
            <div class="message-user">
                <p class="">
                    <a href="/users/view/<?= $message->user->id ?>" class="text-sm font-bold hover:text-primary"><?= $message->user_id == $id ? "Vous" : $message->user->name ?></a><br>
                    <?= $message->message ?>
                </p>
            </div>
        <?php endforeach ?>
    </div>
</div>

<div class="write-message">
    <?= $this->Form->create() ?>
    <div class="flex justify-end absolute z-50 right-4 bottom-[11rem]">
        <button class="px-3 py-1 text-white rounded-md bg-primary">Envoyer</button>
    </div>
    <textarea class="z-40" name="message" id="message"></textarea>
    <?php
    echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => $id]);
    echo $this->Form->control('project_id', ['type' => 'hidden', 'value' => $projectId]);
    ?>
    <?= $this->Form->end() ?>
</div>