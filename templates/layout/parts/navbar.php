  <!-- NAVBAR LOGIN -->
  <?php if (empty($users)) : ?>
    <nav class="nav-bar-login">
      <h2 class="nav-bar-login-logo">>>PROJECTS</h2>
    </nav>
  <?php else : ?>

    <!-- NAVBAR USER -->
    <nav class="nav-bar-user">
      <div class="nav-bar-content">
        <h2 class="nav-bar-user-logo "><span class="text-lg">Team task</span> manger</h2>
        <div class="nav-link">

          <a href="#" data-tooltip-target="tooltip-notification">
            <i class="bi bi-bell icon-navbar"></i>
            <span class="navber-baget">0</span>
          </a>

          <div id="tooltip-notification" role="tooltip" class="tooltipe-content tooltip">
            Notifications
            <div class="tooltip-arrow" data-popper-arrow></div>
          </div>

          <a href="#" data-tooltip-target="tooltip-message">
            <i class="bi bi-inbox icon-navbar"></i>
            <span class="navber-baget">0</span>
          </a>
          <div id="tooltip-message" role="tooltip" class="tooltipe-content tooltip">
            Boite de réception
            <div class="tooltip-arrow" data-popper-arrow></div>
          </div>

          <a href="#" data-tooltip-target="tooltip-add-user"><i class="bi bi-person-add text-xl"></i></a>
          <div id="tooltip-add-user" role="tooltip" class="tooltipe-content tooltip">
            inviter des membres
            <div class="tooltip-arrow" data-popper-arrow></div>
          </div>

          <span class=" text-gray-300 text-lg"> | </span>

          <a href="#" data-tooltip-target="tooltip-search"><i class="bi bi-search icon-navbar"></i></a>
          <div id="tooltip-search" role="tooltip" class="tooltipe-content tooltip">
            Tout rechercher
            <div class="tooltip-arrow" data-popper-arrow></div>
          </div>

          <button id="dropdownUsert" data-dropdown-toggle="dropdown" class="px-2 py-0 bg-[#f6f7fc] rounded-full hover:bg-gray-300 transition-all duration-200 "><i class="bi bi-person-circle icon-navbar-user"></i></button>

          <div id="dropdown" class="dropdown-user">
            <ul class="py-2 text-sm font-bold text-gray-800" aria-labelledby="dropdownUsert">
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 "><i class="bi bi-person text-lg"></i> Mon profil</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 "><i class="bi bi-gear"></i> Paramètre</a>
              </li>
              <li class=" block px-4">
                <i class="bi bi-moon text-lg"> </i>
                <label class="relative inline-flex items-center cursor-pointer">
                  <input type="checkbox" value="" class="sr-only peer">
                  <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-none rounded-full peer peer-checked:after:translate-x-full  after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
                </label>
              </li>


              <li>
                <a href="/users/logout" class="block px-4 py-2 hover:bg-gray-100 "><i class="bi bi-box-arrow-left"></i> Déconnexion</a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </nav>

  <?php endif ?>