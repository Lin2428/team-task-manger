<?php

/**
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $this->fetch('title') ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>


  <?php $this->Vite->asset(['resources/css/app.css', 'resources/js/app.js'], ['block' => false]) ?>

</head>

<body>
  <nav class="nav-bar">
    <h2 class="nav-bar-logo">>>PROJECTS</h2>
  </nav>

  <div class="flash">
  <?= $this->Flash->render() ?>
  </div>

  <?= $this->fetch('content') ?>

  <?= $this->fetch('script') ?>
</body>

</html>