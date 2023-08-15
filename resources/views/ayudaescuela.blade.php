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
        <h1>Ayuda Escuela de Pedagogía y Docencia </h1>
        <p> <strong> soporte Moodle - Campus Virtual</strong></p>
        <section class="mostrar">
            <div class="parrafos">
            <div class="llenarFormulario">
                <p>La Escuela de Pedagogía y Docencia ofrece diversos servicios, entre ellos, la asistencia en el manejo de la plataforma Moodle Campus Virtual. Si necesitas ayuda en este u otros servicios, no dudes en contactarnos. Estamos a tu disposición para brindarte el mejor soporte posible.
                </p>

                <a  class="open-zammad-chat">
                    <img src="{{ asset('img/CHATNARANJA.png') }}" alt="CHAT" style="height: 140px;">
                </a>
            </div>
            </div>

        </section>
        <section class="paarrafos">
            <div class="parrafos">
                    <div class="card">
                      <p><strong>Abrir Chat</strong></p>
                    <a class="open-zammad-chat">
                        <img src="{{ asset('img/CHATNARANJA.png') }}" alt="CHAT" style="height: 200px;">
                    </a>
                        <div class="content">
                            <p>Para comunicarte con un funcionario de la Escuela de Pedagogía y Docencia, por favor haz clic en el botón "Clic". En caso de que el botón no aparezca, te pedimos que dejes tu mensaje en las otras opciones disponibles. Agradecemos tu comprensión y colaboración.</p>
                        </div>
                    </div>
            </div>
        </section>
    <section class="parte2">
        <p>Adicionalmente, puedes comunicarte con nosotros por medio de los correos electrónicos: <a href="mailto:"> direscuela@miugca.edu.co </a> y <a href="mailto:">virtualidadep@ugca.edu.co</a> </p>
    </section>
    <section class="parte2">
        <p>Tambien por WhatsApp al número <a href="https://api.whatsapp.com/send/?phone=573122088577&text&type=phone_number&app_absent=0"> 3122088577 </a> o <a href="https://api.whatsapp.com/send/?phone=573104269450&text&type=phone_number&app_absent=0"> 3104269450 </a> Centro de Ayuda - Reporte de novedades</p>
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
<script src="https://ayudaescuela.ugca.edu.co/assets/chat/chat.min.js"></script>
  <script>
    $(function() {
      new ZammadChat({
        background: '#ff8000',
        fontSize: '12px',
        flat: true,
        chatId: 1,
        show: false
      });
    });
  </script>
  @endsection