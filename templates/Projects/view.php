<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 */

?>
<div class="mx-8 py-3">
    <h2 class="text-3xl font-[500] border-b-[0.05px] pb-4 mb-1">Tableau de bord du projet <?= $project->name ?></h2>
    <div class="flex space-x-2 items-center mb-3 pb-1 border-b">
    <button data-tooltip-target="tooltip-taches" class="hover:bg-gray-300 font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center" type="button">
           <i class="bi bi-list-task text-lg"></i>
        </button>
        <div id="tooltip-taches" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Ouvrir la liste des tâches
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <a href="/projectUsers/index/<?= $project->id.'/?'.$project->id ?>" data-tooltip-target="tooltip-membres" class="hover:bg-gray-300 font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center" type="button">
            <i class="bi bi-person text-xl"></i>
        </a>
        <div id="tooltip-membres" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Ouvrir la liste des membres
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <a href="/projects/edit/<?= $project->id ?>" data-tooltip-target="tooltip-edite" class="hover:bg-gray-300 font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center" type="button">
            <i class="bi bi-pencil-square text-lg"></i>
        </a>
        <div id="tooltip-edite" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Modifier le projet
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <?= $this->Form->postLink(
            __(''),
            ['action' => 'delete', $project->id],
            ['confirm' => __('Voulez vous vraiment supprimer ce projet ?', $project->id), 'class' => 'bi bi-trash3
            hover:bg-gray-300 font-medium rounded-lg text-lg px-5 py-3 text-center inline-flex items-center',
            'data-tooltip-target' => "tooltip-delete"]
        ) ?>
        <div id="tooltip-delete" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Supprimer le projet
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>

    <div class="flex justify-between space-x-2">
        <div class="cart-task">
            <p class="cart-task-title">Tâches terminées</p>
            <p class="cart-task-count">10</p>
            <p class="cart-task-check">Tâches trouvées</p>
        </div>
        <div class="cart-task">
            <p class="cart-task-title">Tâches en cours</p>
            <p class="cart-task-count">3</p>
            <p class="cart-task-check">Tâches trouvées</p>
        </div>
        <div class="cart-task">
            <p class="cart-task-title">Tâches Annulées</p>
            <p class="cart-task-count">1</p>
            <p class="cart-task-check">Tâches trouvées</p>
        </div>
        <div class="cart-task">
            <p class="cart-task-title">Tâches total</p>
            <p class="cart-task-count">13</p>
            <p class="cart-task-check">Tâches trouvées</p>
        </div>
    </div>
</div>