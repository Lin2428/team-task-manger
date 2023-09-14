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
    <?php foreach ($messages as $message) : ?>
        <div class="message-user">
            <p class="">
            <a href="/users/view/<?= $message->user->id ?>" class="text-sm font-bold hover:text-primary"><?= $message->user_id == $id ? "Vous" : $message->user->name ?></a><br>
                <?= $message->message ?>
            </p>
        </div>
    <?php endforeach ?>

    <div class="write-message">
    <?= $this->Form->create($message) ?>
            <fieldset>
                <legend><?= __('Add Message') ?></legend>
                <?php
                    echo $this->Form->control('message');
                    echo $this->Form->control('user_id', ['type' => 'hiden', 'value' => $id]);
                    echo $this->Form->control('project_id', ['options' => $projects]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
    </div>
</div>