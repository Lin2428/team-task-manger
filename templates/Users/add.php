<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="center-add-user">
    <div class="users-form-content">
        <?= $this->Form->create($user) ?>

        <h1 class="connect-title">Créer un <span class="font-bold">Compte</span></h1>
        <?php
        echo $this->Form->control('name', ['label' => 'Noms', 'required' => true]);
        echo $this->Form->control('phone', ['required' => true]);
        echo $this->Form->control('email', ['required' => true]);
        echo $this->Form->control('password', ['required' => true]);
        ?>
        <button type="submit" class="btn btn-primary md:w-[100%] w-[250px]">Créer le compte</button>
        <?= $this->Form->end() ?>
    </div>

    <div class="flex items-center justify-center my-10">
        <div class="md:w-[100%] md:max-w-[10rem] h-[2px] bg-gray-300"></div>
        <a href="/users/" class="mx-3 text-primary font-sans">Ou se connecter</a>
        <div class=" md:w-[100%] md:max-w-[10rem] h-[2px] bg-gray-300"></div>
    </div>
</div>