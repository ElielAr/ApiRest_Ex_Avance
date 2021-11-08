<?php 
    include("ApiRest_Servidor/concliente.php");
    
    $con=conectar();

    $sql="SELECT *  FROM datainde";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Api - Delicuencia</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="sass/estilos.css">
        <link rel="stylesheet" href="sass/estilos_tab.css">
        <link rel="stylesheet" href="sass/style.css">
        <link rel="stylesheet" href="sass/normalize.css">
    </head>
    <body>
    <header>
        <p>reportagn.com</p>
    </header>

    <nav>
        <div class="logo">
            <div class="logo_img">
                <img src="img/logo.png">
            </div>
            <br>
            <div class="logo_text">
                Reporta Tu Indicencia 
            </div>
           
            
        </div>

        <div class="links">
            <a href="menu.html"> Inicio </a>
            
        </div>
    </nav>

       <!-- Form container -->
    <section id="form-width">
      
      <form id="form-container" action="http://app-c935da0b-c862-426e-8b68-2dfdad35a3bd.cleverapps.io/" method="POST">
        <div class="row">
          <!-- form input -->
          <div class="col-lg-6 col-md-12 col-sm-12">
             <!-- logo -->
             <div class="logotipe d-flex justify-content-center">
                 <a href="#" class="d-flex align-items-center">
                     <img src="img/logo_poli.jpg" class="img-fluid">
                     <h3 class="ubuntu">Reporta MX</h3>
                 </a>
             </div>

              <!--<h4 class="text-center text-uppercase anton"> TITULO </h4> -->
              <hr>
             
              <!-- inputs -->
              <div class="inputs-form form-group">
                  <label for="username" class="ubuntu">Correo:</label>
                  <input type="email" name="correo" id="correo" class="form-control mb-4" required>

                  <label for="email_form" class="ubuntu">Telefono:</label>
                  <input type="number" name="telefono" id="telefono" class="form-control mb-4" required>

                  <label for="email_form" class="ubuntu">Hecho:</label>
                  <input type="text" name="hecho" id="hecho" class="form-control mb-4" required>

                  <label for="email_form" class="ubuntu">Descripcion:</label>
                  <textarea name="descripcion" placeholder="Describre el hecho delictivo!"> </textarea>

                  <button type="submit" class="btn mt-1 ubuntu" id="send-form">Enviar</button>

              </div>

          </div>

          <!-- form img -->
          <div class="col-lg-6 col-md-12 col-sm-12">
           <figure class="w-100 img-form">
               <img src="img/logo_enviar.jpg">
           </figure>

          </div>
           
        </div>
      </form>

  </section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>    
    </body>
</html>