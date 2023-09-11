<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Task $task
 * @var string[]|\Cake\Collection\CollectionInterface $projects
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $creators
 * 
 * @var array $projects
 * @var array $users
 */

?>
<div class="flex flex-col mx-8 py-3">
    <div>
        <h1 class="text-3xl font-bold border-b pb-4">Créer une nouvelle Tâche</h1>
        <?= $this->Form->create($task) ?>
        <div class="flex items-center space-x-3 mb-4">
            <di class="-mt-2">
                <?php echo $this->Form->control('name', ['label' => 'Titre de la tâche']); ?>
            </di>
            <div class="mt-4">
                <label for="project_id" class="text-gray-500">Projet</label><br>
                <select name="project_id" id="project_id" class="py-[6px] px-2 rounded-md border-gray-300">
                    <option selected value="<?= $task->project->id ?>"><?= $task->project->name ?></option>
                    <?php foreach ($projects as $project) : ?>
                        <option value="<?= $project->id ?>"><?= $project->name ?></option>
                    <?php endforeach ?>
                </select>
            </div>

            <div class="mt-4">
                <label for="user_id" class="text-gray-500">Tâche attribué à</label><br>
                <select name="user_id" id="user_id" class="py-[6px] px-2 rounded-md border-gray-300">
                    <option selected value="<?= $task->user->id ?>"><?= $task->user->name ?></option>
                    <?php foreach ($users as $user) : ?>
                        <option value="<?= $user->id ?>"><?= $user->name ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <?php

            ?>
        </div>
        <?php
        echo $this->Form->control('created_by', ['type' => 'hidden', 'value' => $creators]);
        echo $this->Form->control('description');
        echo $this->Form->control('status', ['type' => 'hidden', 'value' => 'ouvert']);
        ?>
        <button type="submit" class="btn bg-primary w-full">Modifier la tâche</button>
        <?= $this->Form->end() ?>
    </div>
</div>
</div>