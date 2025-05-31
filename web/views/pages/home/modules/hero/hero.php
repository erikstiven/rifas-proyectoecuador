<!--=================================
HERO
==================================-->

<div class="container-fluid p-0 position-relative" id="hero">

    <div class="container p-0">

        <div class="row row-cols-1 row-cols-lg-2">

            <div class="col p-3 py-lg-5 px-lg-5 position-relative">

                <figure class="position-absolute" style="top:0;left:0;">
                    <img src="/views/assets/img/hero-building.png" class="img-fluid">
                </figure>

                <div class="p-3 py-lg-5 px-lg-5 position-relative" style="z-index:1">

                    <h4 class="text-uppercase josefin-sans-700 t1">Ahora tienes la oportunidad</h4>
                    <h1 class="text-uppercase josefin-sans-700 display-2">De ganar un coche</h1>
                    <p class="h5 josefin-sans-700">¿Serás tú nuestro próximo afortunado ganador?</p>

                    <div class="btn-group py-4">
                        <a href="#main" class="btn btn-default btn-lg rounded pt-3 text-uppercase b1 border-0">Participa Ahora</a>
                        <button type="button" class="btn btn-default btn-lg mx-3 rounded pt-3 rounded-circle b2 border-0" data-bs-toggle="modal" data-bs-target="#myVideo"><i class="h3 bi bi-play-circle-fill"></i></button>
                    </div>

                </div>

            </div>

            <div class="col p-1 mb-5 py-lg-5 px-lg-5 position-relative">

                <?php

                include "views/modules/product/product.php";

                ?>

            </div>

        </div>

    </div>

    <div>

        <svg class="position-absolute" style="bottom:5px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#360254" fill-opacity="1" d="M0,288L60,282.7C120,277,240,267,360,245.3C480,224,600,192,720,176C840,160,960,160,1080,176C1200,192,1320,224,1380,240L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>

        <svg class="position-absolute" style="bottom:-10px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#100235" fill-opacity="1" d="M0,224L60,213.3C120,203,240,181,360,154.7C480,128,600,96,720,112C840,128,960,192,1080,202.7C1200,213,1320,171,1380,149.3L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>

    </div>

</div>