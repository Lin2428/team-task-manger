<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Message $message
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Message'), ['action' => 'edit', $message->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Message'), ['action' => 'delete', $message->id], ['confirm' => __('Are you sure you want to delete # {0}?', $message->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Messages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Message'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="messages view content">
            <h3><?= h($message->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $message->has('user') ? $this->Html->link($message->user->name, ['controller' => 'Users', 'action' => 'view', $message->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Project') ?></th>
                    <td><?= $message->has('project') ? $this->Html->link($message->project->name, ['controller' => 'Projects', 'action' => 'view', $message->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($message->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($message->created) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Message') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($message->message)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>