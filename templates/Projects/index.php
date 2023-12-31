<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Project> $projects
 */

?>
<div class="mx-8 py-3">
    <h2 class="text-3xl font-[500] border-b-[0.05px] pb-4 mb-4">Gestion de Projet</h2>
    <div class="flex space-x-1 items-center text-gray-800 text-sm">
        <a href="/projects/add" class="py-2 px-3 text-white rounded-md bg-primary hover:bg-[#427dbb] cursor-pointer">Nouveau projet</a>

        <form>
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search" class="block px-4 pl-10 text-sm border rounded-md" placeholder="Réchercher" required>
            </div>
        </form>

        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="hover:bg-gray-300 font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center" type="button"><i class="bi bi-funnel"></i> Filtre
            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg>
        </button>
    </div>
    <div class="relative overflow-x-auto mt-5 border rounded-md">
        <table class="w-full text-sm text-left text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase border-b">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary ">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3 border-l">
                        Nom
                    </th>
                    <th scope="col" class="px-6 py-3 border-l">
                        Propriétaire
                    </th>
                    <th scope="col" class="px-6 py-3 border-l">
                        Date de création
                    </th>
                    <th scope="col" class="px-6 py-3 border-l">
                        Derniere modication
                    </th>
                    <th scope="col" class="px-6 py-3 border-l">
                        Statut
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($projects as $project) : ?>
                    <tr class="bg-white border-b hover:bg-gray-100 hover:shadow-xl">
                        <th class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary ">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="row" class="table-th-name border-l">
                            <div class="flex justify-between items-center w-full">
                                <a href="/projects/view/<?= $project->id ?>" class="flex justify-between items-center w-full">
                                    <span><?= $project->name ?></span>
                                    <span data-tooltip-target="tooltip-open-project" class="project-open"><i class="bi bi-arrows-angle-expand mr-3"></i> Ouvrir</span>
                                        <div id="tooltip-open-project" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        Ouvrir la page du projet
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                                <a href="#" data-tooltip-target="tooltip-open-message" class=" ml-2 px-4  h-full border-l"><i class="bi bi-chat-dots text-lg text-gray-700"></i></a>
                                <div id="tooltip-open-message" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    Démarer la conversation
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </div>
                        </th>
                        <th scope="row" class="table-th">
                            <?= $project->user->name ?>
                        </th>
                        <th scope="row" class="table-th ">
                            <?= $project->created ?>
                        </th>
                        </th>
                        <th scope="row" class="table-th ">
                            <?= $project->modified ?>
                        </th>
                        <th scope="row" class="table-th ">
                            <?php if ($project->statut == 0) : ?>
                                Pas commencé
                            <?php endif ?>
                        </th>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>