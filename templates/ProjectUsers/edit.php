<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProjectUser $projectUser
 * @var string[]|\Cake\Collection\CollectionInterface $projects
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $roles
 */
?>

<div class="flex flex-col items-center mt-3">
    <div>
        <h1 class="text-3xl font-bold">Modifier le rôle du membre</h1>
        <?= $this->Form->create($projectUser) ?>
        <div class="flex justify-between items-center space-x-3">
            <div class="mt-6 ">
                <?php
                 echo $this->Form->control('project_id', [
                    'options' => $projects,
                    'label' => '',
                    'class' => 'py-[6px] px-2 w-[500px] rounded-md border-gray-300 mb-4'
                ]);

                echo $this->Form->control('user_id', [
                    'options' => $users,
                    'label' => '',
                    'class' => 'py-[6px] px-2 w-[500px] rounded-md border-gray-300 mb-4'
                ]);
                echo $this->Form->control('role_id', [
                    'options' => $roles,
                    'label' => '',
                    'class' => 'py-[6px] px-2 w-[500px] rounded-md border-gray-300 mb-4'
                ]);
                ?>
            </div>
        </div>
        <button type="submit" class="btn bg-primary w-full">Ajouter au membres</button>
        <?= $this->Form->end() ?>
    </div>
</div>