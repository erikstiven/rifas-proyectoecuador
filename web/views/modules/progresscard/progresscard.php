<?php
$percent = 0;

if (isset($totalSales) && isset($diff) && $diff > 0) {
    $percent = ceil($totalSales * 100 / $diff);
}

// Colores definidos desde base de datos
$colorText   = urldecode($template->color0_template); // texto y bordes
$colorHover  = urldecode($template->color4_template); // hover del botón
$colorCard   = urldecode($template->color3_template); // fondo de la card
$colorBarra  = urldecode($template->color0_template); // color de la barra de progreso
$colorBarra  = 'black'; // color de la barra de progreso

?>
<div class="container d-flex justify-content-center py-5">
    <div class="col-12 col-md-10 col-lg-9">

        <div class="card p-5 rounded-4 text-center shadow-lg"
            style="min-height: 320px; background: <?php echo $colorCard ?>">

            <h3 class="mb-4 text-uppercase fw-bold" style="letter-spacing: 0.5px; color: <?php echo $colorText ?>;">
                🎟️ Tickets Vendidos
            </h3>

            <!-- Barra de progreso con color dinámico -->
            <div class="progress mb-3 mx-auto"
                style="height: 22px; border-radius: 50px; overflow: hidden; width: 90%;">
                <div class="progress-bar"
                    role="progressbar"
                    style="width: <?php echo $percent; ?>%; background-color: <?php echo $colorBarra2 ?>; color: white; font-weight: 100;">
                    <?php echo $percent ?>%
                </div>
            </div>


            <!-- Descripción -->
            <?php if (!empty($raffle->description_targetprogress_raffle)): ?>
                <p class="mt-3 px-2" style="font-size: 1rem; color: <?php echo $colorText ?>;">
                    <?php echo urldecode($raffle->description_targetprogress_raffle); ?>
                </p>
            <?php endif; ?>

            <!-- Botón PARTICIPA AHORA -->
            <a href="/participar"
                onmouseover="this.style.backgroundColor='<?php echo $colorHover ?>'; this.querySelector('span').style.color='white';"
                onmouseout="this.style.backgroundColor='transparent'; this.querySelector('span').style.color='<?php echo $colorText ?>';"
                style="
                 display: inline-block;
                 padding: 12px 24px;
                 border: 2px solid <?php echo $colorText ?>;
                 border-radius: 50px;
                 font-weight: 600;
                 font-size: 1.1rem;
                 background-color: transparent;
                 text-decoration: none;
                 transition: all 0.3s ease;
                 margin-top: 10px;
               ">
                <span style="color: <?php echo $colorText ?>;">PARTICIPA AHORA</span>
            </a>

        </div>

    </div>
</div>