<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="mx-8 py-3">
    <h2 class="text-3xl font-[500] border-b-[0.05px] pb-4 mb-4">Votre profile</h2>
    <div class="flex space-x-2 items-center mb-3 pb-1 border-b">
        <a href="/users/edit/<?= $user->id ?>" class="py-2 px-3 text-white rounded-md bg-primary hover:bg-[#427dbb] cursor-pointer"><i class="bi bi-person-fill-gear"></i> Modifier le profiles</a>
   
        <div id="tooltip-taches" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Vos projets
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <a href="/projectUsers/index/" data-tooltip-target="tooltip-membres" class="hover:bg-gray-300 font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center" type="button">
            <i class="bi bi-clipboard2-check text-lg"></i>
        </a>
        <div id="tooltip-membres" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Vos tâches
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>
    <div class="users-form-content">
        <?= $this->Form->create($user) ?>

        <h1 class="connect-title">Modifier le <span class="font-bold">Compte</span></h1>
        <?php
        echo $this->Form->control('name', ['label' => 'Noms', 'required' => true]);
        echo $this->Form->control('phone', ['required' => true]);
        echo $this->Form->control('email', ['required' => true]);
        ?>
        <button type="submit" class="btn btn-primary md:w-[100%] w-[250px]">Modifier le compte</button>
        <?= $this->Form->end() ?>
    </div>