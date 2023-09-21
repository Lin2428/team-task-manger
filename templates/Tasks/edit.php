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
$projectId = $_SERVER['QUERY_STRING'];
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
                <label for="user_id" class="text-gray-500">Tâche attribué à</label><br>
                <select name="user_id" id="user_id" class="py-[6px] px-2 rounded-md border-gray-300">
                    <option selected value="<?= $task->user->id ?>"><?= $task->user->name ?></option>
                    <?php foreach ($projectUsers as $projectUser) : ?>
                        <option value="<?= $projectUser->user->id ?>"><?= $projectUser->user->name ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="mt-4">
                <label for="status" class="text-gray-500">Statut</label><br>
                <select name="status" id="user_id" class="py-[6px] px-2 rounded-md border-gray-300">
                    <option selected value="<?= $task->status ?>"><?= ucfirst($task->status) ?></option>
                        <option value="fermé">Fermé</option>
                        <option value="ouverte">Ouverte</option>
                </select>
            </div>
        </div>
        <?php
         echo $this->Form->control('project_id', ['type' => 'hidden', 'value' => $projectId]);
        echo $this->Form->control('created_by', ['type' => 'hidden', 'value' => $creators]);
        ?>

        <textarea name="description" id="description"><?= $task->description ?></textarea>
        <button type="submit" class="btn bg-primary w-full">Modifier la tâche</button>
        <?= $this->Form->end() ?>
    </div>
</div>
</div>