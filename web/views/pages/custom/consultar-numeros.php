<?php
$email = $_POST["email"] ?? null;

// Lógica para buscar en la API los números por email
$response = CurlController::request("orders?linkTo=email_order&equalTo=$email", "GET", []);

if ($response->status == 200) {
  // Mostrar los números
  $numbers = $response->results[0]->numbers_order ?? 'No asignado';
  echo "<h2>Tus números: $numbers</h2>";
} else {
  echo "<p>No se encontraron números para este correo.</p>";
}
?>
