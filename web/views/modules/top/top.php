<!--=================================
TOP MEJORADO SIN FONDO RECTANGULAR Y CENTRADO VISUALMENTE
==================================-->

<div class="container-fluid p-0" id="top">
  <div class="container p-0">
    <div class="row align-items-center justify-content-between py-2 px-3">

      <!-- LOGO -->
      <div class="col-auto d-flex align-items-center">
        <a href="/" class="d-inline-block" style="margin-left: 55px;">
          <img src="/views/assets/img/ProyectoEcuadorLogo.png"
            alt="Proyecto Ecuador"
            style="height: 100px; max-width: 100%; object-fit: contain; filter: drop-shadow(0 0 3px rgba(0,0,0,0.7));">
        </a>
      </div>

      <!-- CONSULTAR NÚMEROS + WHATSAPP -->
      <div class="col-auto d-flex align-items-center gap-3">

        <!-- FORMULARIO CONSULTAR NÚMEROS -->
        <form action="/consultar-numeros" method="POST"
          class="d-flex align-items-center bg-white rounded-pill shadow-sm px-3"
          style="height: 50px; max-width: 520px; gap: 12px;">

          <!-- Ícono -->
          <i class="bi bi-envelope-fill text-dark" style="font-size: 1.2rem;"></i>

          <!-- Input de correo -->
          <input type="email"
            name="email"
            class="form-control border-0 bg-transparent"
            placeholder="Consulta tus números con tu correo"
            style="font-size: 0.95rem; color: #222;"
            required>

          <!-- Botón de búsqueda -->
          <button type="submit"
            class="btn btn-gradient px-4 py-1 text-white fw-bold rounded-pill"
            style="background: linear-gradient(135deg, #9C6BFF, #BB7CFF); box-shadow: 0 3px 6px rgba(0,0,0,0.3); transition: 0.3s;">
            Buscar
          </button>
        </form>

        <!-- LINK WHATSAPP -->
        <a href="https://wa.me/<?php echo urldecode($raffle->phone_raffle) ?>?text=duda"
          target="_blank"
          style="color: white; text-decoration: none; font-weight: 500; font-size: 1rem;">
          <i class="bi bi-whatsapp"></i> Atención al cliente
        </a>

      </div>

    </div>
  </div>
</div>