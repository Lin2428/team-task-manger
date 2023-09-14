<div class="mx-8 py-3">
    <h2 class="text-3xl font-[500] border-b-[0.05px] pb-4 mb-4">Votre profile</h2>
    <div class="flex space-x-2 items-center mb-3 pb-1 border-b">
        <a href="/users/edit/<?= $user->id ?>" class="py-2 px-3 text-white rounded-md bg-primary hover:bg-[#427dbb] cursor-pointer"><i class="bi bi-person-fill-gear"></i> Modifier le profiles</a>
        <a href="/projects/index/" data-tooltip-target="tooltip-taches" class="hover:bg-gray-300 font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center" type="button">
            <i class="bi bi-journal-bookmark text-lg"></i>
        </a>
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

    <div class="border p-3 rounded-md">
        <p class="text-3xl font-bold"><?= $user->name ?></p>
        <p class="text-lg"><?= $user->email ?></p>
        <p><?= $user->phone ?></p>
    </div>
    <br>
    <p class="text-xl font-[600]">Vos projets</p>
    <div class="grid grid-cols-2 mt-3 space-x-3">
        <?php foreach ($user->projects as $project) : ?>
            <div class="border p-2 rounded-md max-h-[300px] overflow-hidden">
                <div class="flex justify-between items-center mb-2">
                    <a href="/projects/view/<?= $project->id ?>" class="font-bold hover:text-primary"><?= $project->name ?></a>
                    <span><?= $project->status ?></span>
                </div>
                <p><?= $project->description ?></p>
            </div>
        <?php endforeach ?>
    </div>
</div>