<div class="center-login">
    <div class="users-form-content">
        <?= $this->Form->create() ?>

        <h1 class="connect-title">Vous <span class="font-bold">Connecter</span></h1>
        <?= $this->Form->control('email', ['type' => 'email', 'required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
        <a href="#" class="text-sm font-sans my-3 text-primary">Vous avez oublié votre mot de passe ?</a>
        <button type="submit" class="btn btn-primary md:w-[100%] w-[250px]">Se connecter</button>
        <?= $this->Form->end() ?>
    </div>
    <div class="flex items-center justify-center mt-10">
        <div class="md:w-[100%] md:max-w-[10rem] h-[2px] bg-gray-300"></div>
        <a href="/users/add" class="mx-3 text-primary font-sans">Ou créer un compte</a>
        <div class=" md:w-[100%] md:max-w-[10rem] h-[2px] bg-gray-300"></div>
    </div>
</div>