<header style="background: #4678BF; top: 0; z-index: 999999" class="w-100">
  <nav class="navbar px-md-5 w-100 d-none d-md-block" style="top: 0; z-index: 999999999">
    <div class="container-fluid padding-x">
      <div class="logo" style="width: 250px">
          <a href="/" class="navbar-brand">
              <img src="{{asset('images/logo.png')}}" alt="">
          </a>
      </div>

      <div class="row width justify-content-center align-items-center">
              <ul class="navbar-nav flex-row justify-content-between p-0">
                  <li class="nav-item text-center mx-4" name="inicio">Inicio</li>
                  <li class="nav-item text-center mx-4" name="productos">Productos</li>
                  <li class="nav-item text-center mx-4" name="mision">Misi&oacute;n</li>
                  <li class="nav-item text-center mx-4" name="contacto">Contacto</li>
              </ul>
      </div>
      <div class="width d-flex justify-content-end" style="width: 250px">
              <div class="whatsapp px-3 py-2 rounded-pill d-flex align-items-center">
                <i class="fab fa-whatsapp me-3"></i>
                Consultanos
              </div>
      </div>
    </div>
  </nav>

  

  <nav class="navbar px-md-5 w-100 d-block d-md-none" style="top: 0; z-index: 999999999">
    <div class="container-fluid padding-x d-block">
      <div class="d-flex justify-content-between">
        <div class="logo">
          <a href="/" class="navbar-brand">
              <img src="{{asset('images/logo.png')}}" alt="">
          </a>
      </div>

      <button class="border-none bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapse" aria-expanded="false" aria-controls="collapse" style="border: none"><i class="fas fa-bars" style="color: #F0F6FF; font-size: 30px"></i></button>
        
    </div>
    <div class="d-flex justify-content-center align-items-center">
      <ul class="navbar-nav text-center collapse w-100" id="collapse" >
        <li class="nav-item text-center me-0 my-2" name="inicio">Inicio</li>
        <li class="nav-item text-center me-0 my-2" name="productos">Productos</li>
        <li class="nav-item text-center me-0 my-2" name="mision">Misi&oacute;n</li>
        <li class="nav-item text-center me-0 my-2" name="contacto">Contacto</li>
      </ul>
    </div>
  </nav>
</header>

<style>
  .logo img{
    width: 250px
  }
</style>