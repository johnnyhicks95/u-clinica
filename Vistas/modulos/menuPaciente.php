<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    
      <ul class="sidebar-menu">
        
        <li>
          <a href="http://localhost:8080/u-clinica/inicio">
            <i class="fa fa-home"></i>
            <span>Inicio</span>
          </a>
        </li>

        <li>
          <a href="http://localhost:8080/u-clinica/Ver-consultorios">
            <i class="fa fa-medkit"></i>
            <span>Consultorios</span>
          </a>
        </li>

        <li>
        <?php
        echo '  <a href="http://localhost:8080/u-clinica/historial/'.$_SESSION["id"].'">';
        ?>
            <i class="fa fa-calendar-check-o"></i>
            <span>Historial</span>
          </a>
        </li>

      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>