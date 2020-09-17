<?php include "inc/header.php"?>

<div class="container-fluid cuerpo">
    <div class="row justify-content-md-center">
        <div class="col-12 py-2 barra">
            <?php include "inc/navbar.php"?>
        </div>
        <div class="col-md-9 col-lg-7 py-3 my-4">
            <H1 class="negro">Contáctenos</H1>
            <h2 class="mt-5">Puede llamarnos al:</h2>
            <h4 class="amarillo osw">
                (011) 3769-0929 (Zona Norte) 
                <a href="https://api.whatsapp.com/send?phone=541137690929" class="text-decoration-none amarillo">
                    <span class="bg-negro rounded px-1">Enviar Whatsapp<i class="fa fa-whatsapp"></i></span>
                </a>
            </h4>
            <h4 class="amarillo osw py-1">
                (0223) 312-6713 (Zona Sur)
                <a href="https://api.whatsapp.com/send?phone=542233126713" class="text-decoration-none amarillo">
                    <span class="bg-negro rounded px-1">Enviar Whatsapp<i class="fa fa-whatsapp"></i></span>
                </a>
            </h4>
            <h4 class="amarillo osw">
                (011) 6488-3305 (Zona Central)
                <a href="https://api.whatsapp.com/send?phone=541164883305" class="text-decoration-none amarillo">
                    <span class="bg-negro rounded px-1">Enviar Whatsapp<i class="fa fa-whatsapp"></i></span>
                </a>
            </h4>
            
            <h2 class="mt-5">Mandarnos un correo al:</h2>
            <h4 class="amarillo osw">CONTACTO@MADERASGUNTHER.COM.AR</h4>
            
            <h2 class="mt-5">O dejenos un mensaje con sus datos</h2>
            <form id="formulario" method="POST">
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
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="amarillo" for="mensaje">Mensaje</label>
                            <textarea placeholder="Dejenos su mensaje..." name="mensaje" rows="8" id="mensaje" class="form-control" required ></textarea >
                        </div>                     
                    </div>
                    <div class="col-md-12">
                        <button class="g-recaptcha btn bg-negro blanco d-block mx-auto osw" 
                            data-sitekey="6LfMqMwZAAAAAHLr5W6ZBnX3yWBTuF6jxKIvecR5" 
                            data-callback='onSubmit' 
                            data-action='submit'>Enviar mensaje</button>                   
                    </div>
                    
                </div>
                
            </form>
            
            <script>
                function onSubmit(token) {
                    var frm=$("#formulario"); //Identificamos el formulario por su id
                    var d = frm.serialize();
                    $.ajax({
                        type:"POST", 
                        url:"carga_formulario.php", 
                        data:{d}, 
                        success:function(datos){ 
                            if(datos==1){
                                alertify.success("Su mensaje fue enviado");
                                frm.trigger("reset");
                            }else{
                                alertify.error("Hubo un problema al enviar el mensaje. \nIntente nuevamente mas tarde");
                            }
                         },
                    })
                }
            </script>
        </div>
    </div>
</div>   
<?php include "inc/footer.php"?>
