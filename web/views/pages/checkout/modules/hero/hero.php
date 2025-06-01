<!--=================================
HERO
==================================-->

<div class="container-fluid p-0" id="heroCheckout">

    <div class="container-fluid">

        <div class="container">

            <div class="row row-cols-1 pt-4">

                <div class="offset-3 col-6 textAlign text-dark text-center">

                    <h1 class="josefin-sans-700 text-uppercase py-2 px-1 b1 pt-3 mb-0 mb-lg-3 rounded">Gracias por tu compra</h1>

                    <h2 class="p-2">Estos son tus números elegidos</h2>

                    <div class="text-center position-relative" style="z-index:1">

                        <div class="d-flex flex-wrap w-100 justify-content-center p-2 rounded">


                            <div class="h3 text-center numbers rounded-circle m-1" item="0" number="5"><span class=" p-2">5</span></div>


                            <div class="h3 text-center numbers rounded-circle m-1" item="0" number="18"><span class=" p-2">18</span></div>


                            <div class="h3 text-center numbers rounded-circle m-1" item="0" number="30"><span class=" p-2">30</span></div>



                        </div>

                    </div>

                    <div class="col p-1 mb-5 py-lg-5 px-lg-5 position-relative">

                        <?php

                        include "views/modules/product/product.php";

                        ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="position-relative">

       <?php 

           include "views/modules/svgs/svgs.php";

        ?>

    </div>

</div>