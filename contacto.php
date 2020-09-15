<?php include "inc/header.php"?>

<div class="container-fluid cuerpo">
    <div class="row justify-content-md-center">
        <div class="col-12 py-2 barra">
            <?php include "inc/navbar.php"?>
        </div>
        <div class="col-md-9 col-lg-7 py-3 my-4">
            <H1>Contáctenos</H1>
            
            <form action="carga_formulario.php" method="POST">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="amarillo" for="Nombre">Nombre</label>
                            <input type="text" placeholder="Ingrese su nombre..." name="nombre" id="nombre" required class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="amarillo" for="email">E-Mail</label>
                            <input type="email" placeholder="Ingrese su e-mail..." id="email" name="email" required class="form-control">
                        </div>                     
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="amarillo" for="telefono">Telefono</label>
                            <input type="number" placeholder="Ingresar codigo de area y numeros sin guiones ni espacio..." name="telefono" id="telefono" required class="form-control">
                        </div>                       
                    </div>
                </div>
                <div class="form-group">
                    <label class="amarillo" for="mensaje">Mensaje</label>
                    <textarea placeholder="Dejenos su mensaje..." name="mensaje" rows="8" id="mensaje" class="form-control" required ></textarea >
                </div>
                <button type="submit" class="btn btn-primary" >Enviar Mensaje</button>
            </form>
             
        </div>
    </div>
</div>       
<?php include "inc/footer.php"?>
