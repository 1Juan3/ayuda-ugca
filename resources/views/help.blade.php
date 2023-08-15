@extends('layaouts/template')
@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/help.css') }}">
@endsection
@section('nav')
<nav class="navbar">
  <input type="checkbox" name="" id="toggler">
  <label for="toggler"><i class="navbar-toggler-icon"></i></label>
  <div class="menu">
    <ul class="list">
      <li><a href="https://siugc.ugc.edu.co/sgacampus/#home"><strong> ACADEMICO SINU</strong> </a></li> 
      <li><a href="https://campusvirtual.ugca.edu.co/login/index.php"><strong>CAMPUS VIRTUAL</strong></a></li>
      <li><a href="https://accounts.google.com/v3/signin/identifier?dsh=S-1626705870%3A1681826542713169&hd=miugca.edu.co&sacu=1&flowName=GlifWebSignIn&flowEntry=AddSession"><strong>CORREO MI UGCA</strong></a></li>
    </ul>
  </div>
</nav>
@endsection
@section('contenido')
<div class="body">
      <section>
        <h1>AYUDA UGC ARMENIA</h1>
        <p>Bienvenidos a la plataforma de ayuda de UGC Armenia. <br> Estamos comprometidos en brindarle asistencia eficiente y eficaz <br> para resolver cualquier problema o inquietud que pueda tener.</p>
      </section>
      <div class="botones">
        <div class="seleccion1">
          <div class="progress-bar " style="width: 100%; border-radius: 80px;   height: 50px; width: 50px; color: rgb(89,210,56,255); box-shadow: 5px 5px 5px 5px black; background-color: rgb(89,210,56,255);" >.</div>
          <a href="/ayudaddt"><button class="btn" > Ayuda DDT (SINU - miugca)</button> </a>
        </div>
        <div class="seleccion1"> 
          <div class="progress-bar " style="width: 100%; border-radius: 80px;   height: 50px; width: 50px; color: rgb(255, 157, 10);  box-shadow: 5px 5px 5px 5px black; background-color: rgb(255, 157, 10);" >.</div>
          <a href="/ayudaescuela"><button class="btn"> Ayuda Escuela (Moodle)</button></a>
        </div>
        <div class="seleccion1">
          <div class="progress-bar " style="width: 100%; border-radius: 80px;   height: 50px; width: 50px; color: rgb(0, 102, 255);  box-shadow: 5px 5px 5px 5px black; background-color: rgb(0, 102, 255);" >.</div>
          <a href="/ayudabiblioteca"><button class="btn" style="width: 300px;"> Ayuda Biblioteca</button></a>
        </div>
    </div>
</div>


@endsection

@section('footer')
<footer>
  <img src="{{ asset('img/mascota.png') }}" alt="mascota" style="height: 100px;  margin-top: 60px;" >
  <div class="parte1">
    <p>© UGC Armenia 2023</p>
    <img src="{{ asset('img/logoUGCA.png') }}" alt="logo ugc" > 
  </div>
</footer>
@endsection
