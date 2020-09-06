<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>formulario de contacto</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href = "estilos.css">
        <!--<link rel="html" href = "tabla_consulta_contacto.html">-->
    </head>
    <body>
       <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3276.953651199528!2d-58.63809673631198!3d-34.7819420939863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc49b14741381%3A0xd09ccf5bf8ea80ea!2sAmado%20Nervo%20981%2C%20Gonz%C3%A1lez%20Cat%C3%A1n%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1598799830223!5m2!1ses-419!2sar" width="100%" height="100" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>-->
       <section class="contacto">
          <div class="ubicacion">
            <H1>Contáctenos</H1>
        
              
           </div>
       </section>  
           
           <div class="formulario">
               
                <form action="carga_formulario.php" method="POST">
                    <input type=" text" placeholder = "Nombre" name ="nombre" id = "nombre" required class="nombrecaja">
                    <input type=" email" placeholder = " Email" id =" email" name = "email"  required class="emailcaja">
                    <input type=" number" placeholder = " Télefono" name ="telefono" id = "telefono" required class="telefonocaja">
                    <textarea type ="text" placeholder ="dejenos su mensaje"name = "mensaje" rows ="8" cols ="80"  id = "textarea" class ="mensajecaja" required ></textarea >
                    <button type="submit"name = "button" id = "button"  class="booton"><strong>Envíe su mensaje</strong> </button>

                </form>
            </div>    
        

   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <script src="js/funciones.js"></script>
    </body>
    
    <footer class= "pie_de_pagina"><strong><p>MADERAS GÜNTER<br></strong>
              
        Pablo: 011 3769 0929 whatsapp.</br>
        Raúl: 0223 312 6713 whatsapp.</br>
        Enrique: 011 6488 3305 whatsapp.</p>
    </footer>

</html>



