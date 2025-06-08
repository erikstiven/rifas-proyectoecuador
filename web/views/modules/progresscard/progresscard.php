<?php
$percent = 0;

if (isset($totalSales) && isset($diff) && $diff > 0) {
    $percent = ceil($totalSales * 100 / $diff);
}
?>

<style>
    .progress-bar {
        background: linear-gradient(90deg, #00ff95, #008f4c) !important;
        color: white;
        font-weight: 600;
    }
</style>

<div class="container d-flex justify-content-center py-5">
    <div class="col-12 col-md-10 col-lg-9"> <!-- Más ancho -->

        <div class="card bg <?php echo isset($template) ? urldecode($template->color1_template) : 'bg-light'; ?> p-5 rounded-4 text-center shadow-lg" style="min-height: 320px;">

            <h3 class="mb-4 text-uppercase fw-bold text-white" style="letter-spacing: 0.5px;">
                🎟️ Tickets Vendidos
            </h3>

            <!-- Barra de progreso mejorada -->
            <div class="progress mb-3 mx-auto" style="height: 22px; border-radius: 50px; overflow: hidden; width: 90%;">
                <div class="progress-bar" role="progressbar" style="width: <?php echo $percent; ?>%;">
                    <?php echo $percent ?>%
                </div>
            </div>

            <!-- Descripción -->
            <?php if (!empty($raffle->description_targetprogress_raffle)): ?>
                <p class="mt-3 px-2 text-white" style="font-size: 1rem;">
                    <?php echo urldecode($raffle->description_targetprogress_raffle); ?>
                </p>
            <?php endif; ?>

            <!-- Botón personalizado -->
            <button type="submit" class="btn btn-outline-light btn-lg w-100 rounded-pill">
                PARTICIPA AHORA
            </button>
        </div>

    </div>
</div>