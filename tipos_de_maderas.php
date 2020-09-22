<?php include "inc/header.php"?>

<div class="container-fluid cuerpo">
    <div class="row justify-content-md-center">
        <div class="col-12 py-2 barra">
            <?php include "inc/navbar.php"?>
        </div>
        <div class="col-md-9 col-lg-7 py-3 my-4"> 
            <H1 class="negro">Maderas</H1>
            <div id="rurales" class="p-4">
            <h2 class="blanco">RURALES</h2>
                <ul class="list-group">
                    <li class="list-group-item"><i class="fa fa-chevron-down fa-fw"></i>Varillas de alambrado</li>
                    <li class="list-group-item">Anchico</li>
                    <li class="list-group-item">Guayaubira</li>
                    <li class="list-group-item">Eucaliptus rostrata</li>
                    <li class="list-group-item">Curupay</li>
                    <li class="list-group-item">Lapacho</li>
                    <li class="list-group-item">Rabo</li>
                </ul>
            </div>


            <div id="construccion" class="p-4" >
                <h2 class="blanco">CONTRUCCIÓN</h2>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header p-1" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fa fa-chevron-down fa-fw"></i>Eucalipto
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="img/gallery/14min.jpeg" class="w-100" alt="...">
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="negro">La madera de eucalipto es una madera de gran resistencia, se usa mayormente para  exteriores, pero también la utilizan en carpintería interior tiene mucho potencial de explotación.</p>
                                    </div>
                                </div>
                                
                                <a href="contacto.php#formulario">Cotizar ahora</a>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">Eucalipto</li>
                    <li class="list-group-item">Euca. Poste tratado</li>
                    <li class="list-group-item">Fenólicos</li>
                    <li class="list-group-item">Decks</li>
                    <li class="list-group-item">Machimbre</li>
                    <li class="list-group-item">Machimbre tratado</li>
                    <li class="list-group-item">Pino</li>
                    <li class="list-group-item">Pino tratado</li>
                    <li class="list-group-item">Para escalones
                        <ul>
                            <li class="list-group-item">Zota caballo</li>
                            <li class="list-group-item">Laurel</li>
                            <li class="list-group-item">Guatambu</li>
                            <li class="list-group-item">Paraíso</li>
                        </ul>
                    </li>

                </ul>
            </div>

            <div id = "carpinteria" class ="p-4">
            <h2 class="blanco">CARPINTERÍA</h2>
                <ul class="list-group">
                    <li class="list-group-item">Cedro</li>
                    <li class="list-group-item">Loro negro</li>
                    <li class="list-group-item">Paraíso</li>
                    <li class="list-group-item">Zota caballo</li>
                    <li class="list-group-item">Laurel</li>
                    <li class="list-group-item">Grapia</li>
                    <li class="list-group-item">Guayabira</li>
                    <li class="list-group-item">Anchico </li>
                </ul>
            </div>

            <div id = "arte_rustico" class ="p-4">
            <h2 class="blanco" osw > ARTE RÚSTICO</h2>
                <ul class="list-group">
                    <li class="list-group-item">imágenes de arte rústico</li>
                   
                </ul>
            </div>
    </div>
</div>   
<?php include "inc/footer.php"?>
