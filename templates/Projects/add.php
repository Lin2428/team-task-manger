<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 * @var \Cake\Collection\CollectionInterface|string[] $users
 *
 * @var array $users
 */
?>
<div class="flex flex-col mx-8 py-3">
    <div>
        <h1 class="text-3xl font-bold border-b pb-4">Créer un nouveau Projet</h1>
        <?= $this->Form->create($project, ['id' => 'project-form']) ?>
        <div class="flex items-center space-x-3">
            <div class="mt-4">
                <label for="user_id" class="text-gray-500">Propriétaire</label><br>
                <select name="user_id" id="user_id" class="py-[6px] px-2 rounded-md border-gray-300">
                    <option value="<?= $user->id ?>"><?= $user->name ?></option>
                </select>
            </div>
            <?php
            echo $this->Form->control('name', ['label' => 'Nom du projet']);
            ?>

        </div>
        <div class="mt-6">
            <label for="description" class="text-gray-500">Description</label>
            <textarea name="description" id="description" class="w-full rounded-md min-h-[100px] p-2 border-gray-300"></textarea>
        </div>

        <h1 class="text-3xl font-bold mb-4 mt-5">Ajouter des membres au projet</h1>
        <div class="grid grid-cols-12">
            <div class=" flex space-x-3 items-center col-span-5">
                <?= $this->Form->control(
                    'user',
                    [
                        'options' => $users,
                        'label' => 'Utilisateur',
                        'id' => 'project-user-select',
                        'class' => 'py-[6px] px-2 rounded-md border-gray-300'
                    ]
                ) ?>
                <?= $this->Form->control(
                    'role',
                    [
                        'options' => $roles,
                        'id' => 'project-role-select',
                        'label' => 'Rôle',
                        'class' => 'py-[6px] px-2 rounded-md border-gray-300'
                    ]
                ) ?>
                <button type="button" class="btn bg-primary" id="add-user-to-project">Ajouter</button>
            </div>
        </div>

        <div class="relative overflow-x-auto rounded-md border mt-3">
            <table class="w-full text-sm text-left text-gray-500 " id="project-users">
                <thead class="text-xs text-gray-700 uppercase border-b">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nom
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Rôle
                        </th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>


        <button type="submit" class="btn bg-primary w-full">Créer le projet</button>
        <?= $this->Form->end() ?>
    </div>
</div>