<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProjectUser $projectUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Project User'), ['action' => 'edit', $projectUser->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Project User'), ['action' => 'delete', $projectUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectUser->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Project Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Project User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="projectUsers view content">
            <h3><?= h($projectUser->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Project') ?></th>
                    <td><?= $projectUser->has('project') ? $this->Html->link($projectUser->project->name, ['controller' => 'Projects', 'action' => 'view', $projectUser->project->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $projectUser->has('user') ? $this->Html->link($projectUser->user->name, ['controller' => 'Users', 'action' => 'view', $projectUser->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= $projectUser->has('role') ? $this->Html->link($projectUser->role->name, ['controller' => 'Roles', 'action' => 'view', $projectUser->role->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($projectUser->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($projectUser->created) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
