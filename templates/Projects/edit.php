<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="flex flex-col mx-8 py-3">
    <div>
        <h1 class="text-3xl font-bold border-b pb-4">Modifier le Projet</h1>
        <?= $this->Form->create($project) ?>
            <div class="flex items-center space-x-3">
                <div class="mt-4 ">
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
                <textarea name="description" id="description" class="w-full rounded-md min-h-[100px] p-2 border-gray-300"><?= $project->description ?></textarea>
            </div>
             <button type="submit" class="btn bg-primary w-full">Modifier le projet</button>
        <?= $this->Form->end() ?>
    </div>
</div>
            
