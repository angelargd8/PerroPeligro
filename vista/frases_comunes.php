<!--Universidad del Valle de Guatemala-->
<!--Autores: Francis Aguilar, 22243; Angela García, 22869; Gerardo Pineda, 22880; Fernando Enrique Echeverría Leal, 22610-->
<!--Programación Orientada a Objetos, sección 20-->
<!--11 de Noviembre 2022-->
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Menu Principal</title>
    
        <script type="text/javascript" src="../modelo/Videos.js" ></script>
            

        </script>
        




    
    </head>

<body><center>

<!-- ----------------------------------------menu --------------------------------------------->
    
<?php include "../modelo/encabezado.php"?>



	<font >
        <h1 class="text-light" font="Arial">Frases</h1>
        <br><br><br><br><br>
        <table border="5" style="margin: 0 auto;">
                    <tr>
                        <form action="frases.html?valor=Adios" method="POST">                   
                            <td><input type="submit" class="btn btn-block btn-lg empezar" value="          Adios         "></td>
                        </form>  
                        <form  action="frases.html?valor=Apodo" method="POST">
                            <td><input type="submit" class="btn btn-block btn-lg empezar" value="             Apodo            " ></td>
                        </form>
                        <form action="frases.html?valor=Bienvenido" method="POST">                   
                            <td><input type="submit" class="btn btn-block btn-lg empezar" value="         Bienvenido         "></td>
                        </form>  
                        
                        
                        
                    
                    </tr>
                    <tr>
                        <form action="frases.html?valor=ComoEstas" method="POST">     
                            <td><input type="submit"  class="btn btn-block btn-lg empezar" value="    Como estas    "></td>
                        </form>
                        <form action="frases.html?valor=CualEsTuNombre" method="POST">     
                            <td><input type="submit"  class="btn btn-block btn-lg empezar" value=" Cual es tu nombre"></td>
                        </form>
                        <form action="frases.html?valor=DondeVives" method="POST">     
                            <td><input type="submit"  class="btn btn-block btn-lg empezar" value="       Donde Vives         "></td>
                        </form>
                        
                        

                    </tr>
                    <tr>
                        <form action="frases.html?valor=Guatemala" method="POST">
                            <td><input type="submit" class="btn btn-block btn-lg empezar" value="    Guatemala     " ></td>
                        </form>
                        <form action="frases.html?valor=Hola" method="POST">
                            <td><input type="submit" class="btn btn-block btn-lg empezar" value="               Hola             " ></td>
                        </form>
                        <form action="frases.html?valor=MiNombreEs" method="POST">
                            <td><input type="submit"  class="btn btn-block btn-lg empezar" value="      Mi Nombre Es      "></td>
                        </form>
                        

                    </tr>
                    <tr>
                        <form action="frases.html?valor=BuenasTardes" method="POST">     
                            <td><input type="submit"  class="btn btn-block btn-lg empezar" value="Buenas Tardes "></td>
                        </form>
                        <form action="frases.html?valor=BuenasNoches" method="POST">
                            <td><input type="submit" class="btn btn-block btn-lg empezar" value="  Buenas Noches     "></td>
                        </form>
                        <form action="frases.html?valor=Nombre" method="POST">
                            <td><input type="submit" class="btn btn-block btn-lg empezar" value="          Nombre              "></td>
                        </form>


                    </tr>
                    <tr>
                        <form action="frases.html?valor=Gracias" method="POST">                    
                            <td><input type="submit" class="btn btn-block btn-lg empezar" value="        Gracias        "></td>
                        </form>
                        

                    </tr>
        </table>  
        </table>  
  
                    
                
                
               
                
                

</body>

</html>