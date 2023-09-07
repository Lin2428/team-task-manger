<?php

/**
 * @var \App\View\AppView $this
 */

$url = $this->request->getRequestTarget();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $this->fetch('title') ?></title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@400;500;700&display=swap" rel="stylesheet">

  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>


  <?php $this->Vite->asset(['resources/css/app.css', 'resources/js/app.js'], ['block' => false]) ?>

</head>



<body>
  <header>
    <?php require 'parts/navbar.php'; ?>
  </header>

  <?php if (str_contains($url, "/users/add") || str_contains($url, "/users/login")) : ?>
    <div class="flash">
      <?= $this->Flash->render() ?>
    </div>
    <?= $this->fetch('content') ?>
  <?php else : ?>
    <div class="body-user">

      <?php require 'parts/sidebar.php'; ?>

      <div class="user-main-contente relative">
        <div class="flash">
          <?= $this->Flash->render() ?>
        </div>
        <?= $this->fetch('content') ?>
      </div>
    </div>
  <?php endif ?>




  <?= $this->fetch('script') ?>

</body>

</html>