<?php
// =====================
// CONSULTAR HERO FONDO CON CONTENIDO DE CONSULTA
// =====================
?>

<div class="container-fluid p-0 position-relative" id="hero">
  <div class="container p-0">
    <div class="row row-cols-1 row-cols-lg-2">
      <div class="col p-3 py-lg-5 px-lg-5 position-relative">
        <figure class="position-absolute" style="top:0;left:0;">
          <img src="/views/assets/img/hero-building.png" class="img-fluid">
        </figure>

        <div class="container position-relative" style="z-index:1">
          <div class="row justify-content-center">
            <div class="col-lg-10 bg-white bg-opacity-75 p-5 rounded-4 shadow mt-5 mb-5">

              <h2 class="mb-4 text-center text-dark">Consulta tus números asignados</h2>

              <!-- Formulario -->
              <form method="GET" class="mb-4">
                <div class="row g-3 align-items-center">
                  <div class="col-md-6">
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Tu correo electrónico" required>
                  </div>
                  <div class="col-md-4">
                    <select name="raffle_id" class="form-select form-select-lg">
                      <option value="">Todos los sorteos</option>
                      <?php
                      $raffles = CurlController::request("raffles?select=id_raffle,tittle", "GET", []);
                      if ($raffles->status == 200) {
                        foreach ($raffles->results as $r) {
                          $selected = (isset($_GET['raffle_id']) && $_GET['raffle_id'] == $r->id_raffle) ? 'selected' : '';
                          echo "<option value='{$r->id_raffle}' $selected>{$r->tittle}</option>";
                        }
                      }
                      ?>
                    </select>
                  </div>
                  <div class="col-md-2 text-center">
                    <button type="submit" class="btn btn-green-gradient btn-lg w-100 rounded-pill">Consultar</button>
                  </div>
                </div>
              </form>

              <?php
              if (isset($_GET['email'])) {
                $email = $_GET['email'];
                $selectedRaffle = $_GET['raffle_id'] ?? null;
                $apikey = "TU_API_KEY_AQUI";
                $method = "GET";
                $fields = [];

                $urlClients = "clients?linkTo=email_client&equalTo=" . urlencode($email) . "&select=id_client";
                $clientsRes = CurlController::request($urlClients, $method, $fields);

                if ($clientsRes->status == 200 && count($clientsRes->results) > 0) {
                  $idClients = array_map(fn($c) => $c->id_client, $clientsRes->results);
                  $numbersByRaffle = [];

                  foreach ($idClients as $id_client) {
                    $urlSales = "sales?linkTo=id_client_sale,status_sale&equalTo=$id_client,PAID";
                    $salesRes = CurlController::request($urlSales, $method, $fields);

                    if ($salesRes->status == 200 && count($salesRes->results) > 0) {
                      foreach ($salesRes->results as $sale) {
                        $raffleId = $sale->id_raffle_sale;
                        $number = $sale->number_sale;
                        if (!$selectedRaffle || $raffleId == $selectedRaffle) {
                          $numbersByRaffle[$raffleId][] = $number;
                        }
                      }
                    }
                  }

                  if (count($numbersByRaffle) > 0) {
                    echo "<div class='text-center mb-4'><strong>Números asignados por sorteo:</strong></div>";
                    foreach ($numbersByRaffle as $raffleId => $numbers) {
                      $urlRaffle = "raffles?linkTo=id_raffle&equalTo=$raffleId&select=tittle";
                      $raffleRes = CurlController::request($urlRaffle, $method, $fields);
                      $raffleName = ($raffleRes->status == 200 && count($raffleRes->results) > 0) ? $raffleRes->results[0]->tittle : "Sorteo #$raffleId";

                      echo "<div class='mb-4 text-center'>";
                      echo "<h5 class='text-primary mb-2'>🔹 $raffleName</h5>";
                      echo "<div class='d-flex flex-wrap justify-content-center gap-2'>";
                      foreach ($numbers as $num) {
                        echo "<span class='badge bg-success fs-5 p-2 px-3'>$num</span>";
                      }
                      echo "</div></div>";
                    }
                  } else {
                    echo "<div class='alert alert-warning text-center'>No se encontraron números asignados con estado <strong>PAID</strong>.</div>";
                  }

                } else {
                  echo "<div class='alert alert-danger text-center mt-4'>Este correo no está registrado en el sistema.</div>";
                }
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.querySelector('form')?.addEventListener('submit', function (e) {
    const email = document.querySelector('input[name="email"]').value.trim();
    if (!email.includes('@')) {
      alert("Ingresa un correo electrónico válido.");
      e.preventDefault();
    }
  });
</script>

<style>
  .btn-green-gradient {
    background: linear-gradient(90deg, #00ff95, #008f4c);
    color: white;
    font-weight: bold;
    border: none;
    transition: 0.3s ease;
  }
  .btn-green-gradient:hover {
    filter: brightness(1.1);
    transform: scale(1.02);
  }
</style>