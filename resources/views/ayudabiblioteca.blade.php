@extends('layaouts/template')
@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/ayudadtt.css') }}">
@endsection

@section('nav')
<nav class="navbar">
    <input type="checkbox" name="" id="toggler">
    <label for="toggler"><i class="navbar-toggler-icon"></i></label>
    <div class="menu">
      <ul class="list">
        <li><a href="/"><i class="bi bi-reply-all-fill" ></i> <strong> VOLVER </strong> </a></li>
        <li><a href="https://siugc.ugc.edu.co/sgacampus/#home"><strong> ACADEMICO SINU</strong> </a></li>
        <li><a href="https://campusvirtual.ugca.edu.co/login/index.php"><strong>CAMPUS VIRTUAL</strong></a></li>
        <li><a href="https://accounts.google.com/v3/signin/identifier?dsh=S-1626705870%3A1681826542713169&hd=miugca.edu.co&sacu=1&flowName=GlifWebSignIn&flowEntry=AddSession"><strong>CORREO MI UGCA </strong></a></li>
      </ul>
    </div>
  </nav>

@endsection

@section('contenido')

<div class="body">
        <h1>Ayuda biblioteca Rodrigo Gómez Jaramillo </h1>
        <p><strong>capacitación búsqueda localización y manejo eficiente de la información, ayuda con servicio de referencia, entre otros servicios</strong></p>
        <div class="parrrafo">
            <P>Si necesitas ingresar a la Biblioteca, puedes usar el enlace a continuación que te llevará a nuestros servicios:
                <a href="https://www.ugc.edu.co/sede/armenia/index.php/biblioteca"> https://www.ugc.edu.co/sede/armenia/index.php/biblioteca </a></P>
        </div>
        <section class="mostrar">
            <div class="parrafos">
            <div class="llenarFormulario">
                <p>Si necesita ayuda puede chatear con uno de los funcionarios de la Biblioteca utilizando este botón, se abrirá un chat en el cual por favor escriba sus datos de la Universidad para identificarlo, en pronto le estaremos atendiendol@
                </p>
                <a class="open-zammad-chat">
                    <img src="{{ asset('img/CHATAZUL.png') }}" alt="CHAT" style="height: 140px;">
                </a>
            </div>
            </div>

        </section>
        <section class="paarrafos">
            <div class="parrafos">
                    <div class="card">
                      <p><strong>Abrir Chat</strong></p>
                    <a class="open-zammad-chat">
                        <img src="{{ asset('img/CHATAZUL.png') }}" alt="CHAT" style="height: 200px;">
                    </a>
                        <div class="content">
                            <p>Si necesita ayuda puede chatear con uno de los funcionarios de la Biblioteca utilizando este botón, se abrirá un chat en el cual por favor escriba sus datos de la Universidad para identificarlo, en pronto le estaremos atendiendol@</p>
                        </div>
                    </div>
            </div>
        </section>
    <section class="parte2">
        <p>Adicionalmente tambien puedes comunicarte a los correos electrónicos: <a href="mailto:"> bibliougc@ugca.edu.co </a> y a <a href="mailto:"> procesostecnicos@ugca.edu.co </a></p>
    </section>
    <section class="parte2">
        <p>Tambien por WhatsApp al número <a href="https://api.whatsapp.com/send/?phone=573218163343&text&type=phone_number&app_absent=0"> 3218163343 </a> para ayuda con Biblioteca</p>
    </section>
</div>

@endsection

@section('footer')
<footer>
<p> © UGC Armenia 2023</p>
<img src="{{ asset('img/logoUGCA.png') }}" alt="logo ugc" > 
</footer>
@endsection
@section('chat')
<script src="https://ayudabiblioteca.ugca.edu.co/assets/chat/chat.min.js"></script>
  <script>
    $(function() {
      new ZammadChat({
        background: '#97bdfe',
        fontSize: '12px',
        flat: true,
        chatId: 1,
        show: false
      });
    });
  </script>
  @endsection