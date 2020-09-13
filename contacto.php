<?php include "inc/header.php"?>
<body>    
    <div class="container-fluid cuerpo">
        <div class="row justify-content-md-center">
            <div class="col-sm-7 py-3 barra">
                <?php include "inc/navbar.php"?>
            </div>
            <div class="col-md-7 py-3 my-4">
                <H1>Contáctenos</H1>
                     
                <div class="formulario">
                    <form action="carga_formulario.php" method="POST">
                        <input type=" text" placeholder = "Nombre" name ="nombre" id = "nombre" required class="nombrecaja">
                        <input type=" email" placeholder = " Email" id =" email" name = "email"  required class="emailcaja">
                        <input type=" number" placeholder = " Télefono" name ="telefono" id = "telefono" required class="telefonocaja">
                        <textarea type ="text" placeholder ="dejenos su mensaje"name = "mensaje" rows ="8" cols ="80"  id = "textarea" class ="mensajecaja" required ></textarea >
                        <input type="submit" value="Enviar Mensaje">

                    </form>
                </div> 
            </div>
        </div>
    </div>
</body>       
<?php include "inc/footer.php"?>
