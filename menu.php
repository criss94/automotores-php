        <ul>
        <?php 
        if (!isset($_SESSION["login"])) {
         ?>
            <li>
                <a href="config.php">Configuración<span class="arrow"></span></a>
            </li>
            <li>
                <a href="busqueda-avanzada.php">Busqueda avanzada<span class="arrow"></span></a>
            </li>
            <li>
                <a href="catalogo-motos.php">Motos<span class="arrow"></span></a>
            </li>
            <li>
                <a href="catalogo-usados.php">Autos usados<span class="arrow"></span></a>
            </li>
            <li>
                <a href="autos-nuevos.php">Autos nuevos<span class="arrow"></span></a>
            </li>

         <?php
        }else{
         ?>
             <li>
                <a href="form-config-user.php">Cambiar cuenta<span class="arrow"></span></a>
            </li>
              <li>
                <a href="#"><i class="fa fa-user" style="padding:4px;background:white;color:black;border-radius:50px"></i><?php echo " ",$_SESSION["user"]," ",$_SESSION["lastname"]; ?></a>
            </li>
         <?php
        }
         ?>
        </ul>