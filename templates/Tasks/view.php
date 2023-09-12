<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Task $task
 */
?>

<div class="mx-8 py-3">
    <h2 class="text-3xl font-[500] border-b-[0.05px] pb-4 mb-1"><?= $task->name ?></h2>
    <div class="flex items-center space-x-1 border-b pb-1.5 mb-3">
        <span class="p-2 bg-primary text-white font-bold rounded-full"><?= ucfirst($task->status) ?></span>
        <a href="/tasks/edit/<?= $task->id ?>" data-tooltip-target="tooltip-edite" class="hover:bg-gray-300 font-medium rounded-lg px-5 pt-2 pb-1 text-center inline-flex items-center" type="button">
            <i class="bi bi-pencil-square text-lg"></i>
        </a>
        <div id="tooltip-edite" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Modifier la tâche
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <?= $this->Form->postLink(
            __(''),
            ['action' => 'delete', $task->id],
            [
                'confirm' => __('Voulez vous vraiment supprimer cette tâche ?', $task->id), 'class' => 'bi bi-trash3
            hover:bg-gray-300 font-medium rounded-lg text-lg px-5 py-3 text-center inline-flex items-center',
                'data-tooltip-target' => "tooltip-delete"
            ]
        ) ?>
        <div id="tooltip-delete" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Supprimer la tâche
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>
    <div class="flex justify-between space-x-2">
        <div class="card-description">
            <div class="card-description-head">
                Créer par <a href="/users/view/<?= $task->creator->id ?>" class="font-bold"><?= $task->creator->name ?></a>
            </div>
            <div class="card-description-body">
                <?= $task->description ?>
            </div>
        </div>

        <div class="card-desc-info">
            <div class="flex justify-between items-center border-b">
                <span>Responsable</span>
                <a href="/users/view/<?= $task->user->id ?>" class="font-bold"><?= $task->user->name ?></a>
            </div>
            <div class="flex justify-between items-center border-b">
                <span>Date de création</span>
                <span><?= $task->created ?></span>
            </div>
            <div class="flex justify-between items-center border-b">
                <span>Dernier Modificatin</span>
                <span><?= $task->modified ?></span>
            </div>
        </div>
    </div>
</div>