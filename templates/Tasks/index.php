<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Task> $tasks
 */
?>
<div class="tasks index content">
    <?= $this->Html->link(__('New Task'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tasks') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('project_id') ?></th>
                    <th><?= $this->Paginator->sort('created_by') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?= $this->Number->format($task->id) ?></td>
                    <td><?= $task->has('project') ? $this->Html->link($task->project->name, ['controller' => 'Projects', 'action' => 'view', $task->project->id]) : '' ?></td>
                    <td><?= $this->Number->format($task->created_by) ?></td>
                    <td><?= $task->has('user') ? $this->Html->link($task->user->name, ['controller' => 'Users', 'action' => 'view', $task->user->id]) : '' ?></td>
                    <td><?= $task->has('creator') ? $this->Html->link($task->creator->name, ['controller' => 'Users', 'action' => 'view', $task->creator->id]) : '' ?></td>
                    <td><?= h($task->name) ?></td>
                    <td><?= h($task->status) ?></td>
                    <td><?= h($task->created) ?></td>
                    <td><?= h($task->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $task->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $task->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $task->id], ['confirm' => __('Are you sure you want to delete # {0}?', $task->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
