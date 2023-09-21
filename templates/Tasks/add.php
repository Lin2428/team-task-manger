<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Task $task
 * @var \Cake\Collection\CollectionInterface|string[] $projects
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $creators
 * 
 * @var array $projects
 *  @var array $users
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
                    <?php foreach ($projectUsers as $projectUser) : ?>
                        <option value="<?= $projectUser->user->id?>"><?= $projectUser->user->name ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <?php

            ?>
        </div>
        <?php
        echo $this->Form->control('project_id', ['type' => 'hidden', 'value' => $projectId]);
        echo $this->Form->control('created_by', ['type' => 'hidden', 'value' => $creators]);
        ?>
        <textarea name="description" id="description"></textarea>
        <?php
        echo $this->Form->control('status', ['type' => 'hidden', 'value' => 'ouverte']);
        ?>
        <button type="submit" class="btn bg-primary w-full">Créer la tâche</button>
        <?= $this->Form->end() ?>
    </div>
</div>
</div>