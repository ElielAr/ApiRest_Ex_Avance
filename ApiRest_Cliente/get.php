<?php
   function api($ruta){
     $url="https://app-c935da0b-c862-426e-8b68-2dfdad35a3bd.cleverapps.io/";
     $respuesta=$url.$ruta;
     return $respuesta;
   }
   $direccion=api("");
   $json=file_get_contents($direccion);
   $datos=json_decode($json,true);
  /* print_r($datos);*/
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
    <br><br><br>
    <!--    formulario de busqueda-->
            
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Busca tu reporte con tu correo</h1>
                                <form action="http://app-c935da0b-c862-426e-8b68-2dfdad35a3bd.cleverapps.io/" method="POST">

                                    <input type="text" class="form-control mb-3" name="id" placeholder="correo">
        
                                    
                                    
                                    <input type="submit" class="btn btn-primary" value="Buscar">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Correo</th>
                                        <th>Telefono</th>
                                        <th>Hecho</th>
                                        <th>Descripcion</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                           foreach($datos as $key => $value){
                                            $id=$value['Dataid'];
                                            $correo=$value['Correo'];
                                            $telefono=$value['Telefono'];
                                            $hecho=$value['Hecho'];
                                            $descripcion=$value['Descripcion'];

                                            echo "<tr>
                                               <td>$id</td>
                                               <td>$correo</td>
                                               <td>$telefono</td>
                                               <td>$hecho</td>
                                                <td>$descripcion</td> 
                                                </tr>";
                                         }
                                        ?>
                                            
                                </tbody>
                            </table>
                          
                        </div>
                    </div>  
          
    </body>
</html>