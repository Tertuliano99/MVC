   <!-- Sidebar -->
   <div class="adminx-sidebar expand-hover push">
        <ul class="sidebar-nav">
          <li class="sidebar-nav-item">
            <a href="<?php echo DIRPAGE."/"?>" class="sidebar-nav-link active">
              <span class="sidebar-nav-icon">
                <i data-feather="home"></i>
              </span>
              <span class="sidebar-nav-name">
                Dashboard
              </span>
              <span class="sidebar-nav-end">

              </span>
            </a>
          </li>

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navForms" aria-expanded="false" aria-controls="navForms">
              <span class="sidebar-nav-icon">
                <i data-feather="users"></i>
              </span>
              <span class="sidebar-nav-name">
                Formandos
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navForms">
              <li class="sidebar-nav-item">
                <a href="<?php echo DIRPAGE."formando/cadastro"?>" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                  <i data-feather="plus" class="nav-collapse-icon"></i>
                  </span>
                  <span class="sidebar-nav-name">
                    Novo
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="<?php echo DIRPAGE."formando/listar"?>" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                  <i data-feather="list"></i>
                  </span>
                  <span class="sidebar-nav-name">
                    Listar
                  </span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navUI" aria-expanded="false" aria-controls="navUI">
              <span class="sidebar-nav-icon">
                <i data-feather="book"></i>
              </span>
              <span class="sidebar-nav-name">
                Cursos
              </span>
              <span class="sidebar-nav-end">
                    <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navUI">
              <li class="sidebar-nav-item">
                  <a href="#" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                  <i data-feather="plus" class="nav-collapse-icon"></i>
                  </span>
                  <span class="sidebar-nav-name">
                    Novo
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                  <a href="#" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                  <i data-feather="list"></i>
                  </span>
                  <span class="sidebar-nav-name">
                    Listar
                  </span>
                </a>
              </li>
       
            </ul>
          </li>

        </ul>
      </div><!-- Sidebar End -->