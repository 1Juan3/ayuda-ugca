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
          {{-- <li><button id="feedback-form">Feedback</button></li>
          <li><a id="feedback-form">Feedback</a></li> --}}
        </ul>

      </div>
    </nav>

@endsection
@section('contenido')
<div class="body">
        <h1>Ayuda DDT </h1>
        <p><strong>SINU - miugca</strong></p>
        <div class="parrrafo">
        <P>Escribe al correo electrónico <a href="mailto:ayudasistemas@miugca.edu.co"> ayudasistemas@miugca.edu.co </a>lo más recomendable es desde el correo MIUGCA pero si no puedes entonces, usa el personal que tengas registrado en la Universidad y que contestes con facilidad</P>
        </div>
        <section class="mostrar">
            <div class="parrafo2">
            <p>Le sugerimos enviar un correo electrónico a ayudasistemas@miugca.edu.co para   comunicarse con nuestro Departamento de Desarrollo Tecnológico. Preferiblemente, utilice su cuenta de correo MIUGCA para garantizar una comunicación más fluida. En caso de que  no sea posible, puede utilizar una dirección de correo electrónico personal previamente  registrada en la Universidad y que sea fácilmente accesible para responder a cualquier posible consulta.</p>
            </div>
            <div class="parrafos">
            <div class="llenarFormulario">
                <p>Aquí encontraras formulario breve que requiere su correo electrónico institucional  o personal  para enviar una solicitud. Se recomienda actualizar los datos con una cuenta institucional  en cuanto sea posible.   En el asunto del correo debe incluir su nombre  completo y código o número de identificación , y en el cuerpo del mensaje debe indicar el motivo de su solicitud. Este proceso permitirá una atención más  eficiente y oportuna.
                </p>
                <a id="feedback-form1">
                    <img src="{{ asset('img/FORMULARIO.png') }}" alt="FORMULARIO"  height="120px">
                </a>
            </div>
            <div class="llenarFormulario">
                <p>Le ofrecemos la opción de acceder a nuestro  portal de tickets, donde puede crear, editar y  consultar el estado de sus tickets, así como  también crear nuevos tickets. Si dispone de una  cuenta de  correo electrónico institucional, puede ingresar utilizando la opción de inicio de sesión con  Google,  tal y como se indica en el punto -3.  En caso de no contar con una cuenta MIUGCA, puede utilizar la opción de restablecimiento de contraseña utilizando una dirección de correo electrónico personal.</p>
                <a href="https://empatia.ugca.edu.co/#login" target="_blank">
                    <img src="{{ asset('img/ZAMMAD.png') }}" alt="ZAMMAD" style="height: 140px;">
                </a>
            </div>
            </div>
            <div class="llenarFormulario">
                <p >
                Se ofrece un botón para contactar con un funcionario del  DDT  y se solicita que se proporcione información universitaria para su identificación. <strong> En caso   de que el botón no esté disponible </strong>, se proporcionan opciones alternativas para dejar un mensaje. Se agradece su colaboración y se ofrece asistencia adicional si se requiere.
                </p>
                <a class="open-zammad-chat"> <img src="{{ asset('img/CHAT.png') }}" alt="CHAT" style="height: 140px;" alt=""></a>
            </div>
        </section>

        <section class="paarrafos">
            <div class="parrafos">
                    <div class="card">
                        <p><strong>llenar formulario</strong></p>
                    <a  id="feedback-form" >
                        <img src="{{ asset('img/FORMULARIO.png') }}" alt="FORMULARIO" style="height: 150px; " > 
                    </a>
                   
                        <div class="content">
                            <p>Aquí encontraras formulario breve que requiere su correo electrónico institucional o personal para enviar una solicitud. Se recomienda actualizar los datos con una cuenta institucional en cuanto sea posible. En el asunto del correo debe incluir su nombre completo y código o número de identificación , y en el cuerpo del mensaje debe indicar el motivo de su solicitud. Este
                            proceso permitirá una atención más eficiente y oportuna.</p>

                        </div>
                    </div>
                    <div class="card">
                    <p><strong>Abrir chat</strong></p>
                    <a class="open-zammad-chat"> <img src="{{ asset('img/CHAT.png') }}" alt="CHAT" style="height: 164px;"> </a>
                    <div class="content">
        
                        <p>Se ofrece un botón para contactar con un funcionario del  DDT  y se solicita que se proporcione información universitaria para su identificación. <strong> En caso   de que el botón no esté disponible </strong>, se proporcionan opciones alternativas para dejar un mensaje. Se agradece su colaboración y se ofrece asistencia adicional si se requiere.</p>
                    </div>
                </div>
                <div class="card">
                    <p><strong>Centro de ayuda</strong></p>
                    <a href="https://empatia.ugca.edu.co/#login" target="_blank" >
                    <img src="{{ asset('img/ZAMMAD.png') }}" alt="ZAMMAD" style="height: 164px;"> 
                    </a>
                    <div class="content">
            
                        <p>Le ofrecemos la opción de acceder a nuestro  portal de tickets, donde puede crear, editar y  consultar el estado de sus tickets, así como  también crear nuevos tickets. Si dispone de una  cuenta de  correo electrónico institucional, puede ingresar utilizando la opción de inicio de sesión con  Google,  tal y como se indica en el punto -3.  En caso de no contar con una cuenta MIUGCA, puede utilizar la opción de restablecimiento de contraseña utilizando una dirección de correo electrónico personal.</p>
                    </div>
                </div>

            </div>
        </section>
    <section class="parte2">
        <p>En caso de que necesite información sobre los niveles de suficiencia en tecnología e informática, tales como preguntas sobre el examen, requisitos, niveles, notas y otros temas relacionados, puede comunicarse con nosotros a través del número telefónico <a href="https://api.whatsapp.com/send/?phone=573137187203&text&type=phone_number&app_absent=0">3137187203</a>  Estaremos encantados de ayudarlo en todo lo que necesite.</p>
    </section>
    <section class="parte2">
        <p>Si es la primera vez que accede al <strong>Centro de ayuda</strong> o sistema de tickets, recibirá un correo electrónico con un enlace al portal. Una vez allí, seleccione la opción "olvidé mi contraseña" para recibir otro correo electrónico con un enlace para cambiar su contraseña. Por favor, revise su carpeta de spam en caso de que no encuentre el correo electrónico en su bandeja de entrada. Una vez que haya cambiado su contraseña, podrá acceder al portal utilizando su dirección de correo electrónico como nombre de usuario y la nueva contraseña que haya creado. Si necesita más información acerca de este proceso, por favor consulte el siguiente enlace: <a href="https://sway.office.com/T4dgAXcbH7Da7PBQ?ref=Link"> https://sway.office.com/T4dgAXcbH7Da7PBQ?ref=Link </a></p>
    </section>
    <section class="parte2">
        <p>Para el  <strong>Centro de ayuda</strong> si ya dispone de una cuenta de correo electrónico MIUGCA, simplemente haga clic en el botón "Google" e ingrese con sus credenciales habituales, tal y como lo hace para acceder a su correo electrónico. No será necesario que recuerde nuevas claves o usuarios. De esta manera, podrá crear un ticket y comunicarse con nuestro equipo de soporte técnico de forma eficiente.</p>
    </section>
</div>

@endsection
@section('footer')
<footer>

    <p>© UGC Armenia 2023</p>
    <img src="{{ asset('img/logoUGCA.png') }}" alt="logo ugc" > 
  </footer>
@endsection
<!--scrpt del chat de zammad.//-->
@section('chat')
<script src="https://empatia.ugca.edu.co/assets/chat/chat.min.js"></script>
<script>
$(function() {
  new ZammadChat({
    background: '#000000',
    fontSize: '12px',
    chatId: 1,
    show: false
  });
});
</script>
@endsection
@section('form')
<!--Scrip del formuario de zammad rapido.//-->
<script id="zammad_form_script" src="https://empatia.ugca.edu.co/assets/form/form.js"></script>
  <script>
    $(function() {
      $('#feedback-form').ZammadForm({
        messageTitle: 'Caso por Formulario en línea',
        messageSubmit: 'Enviar',
        messageThankYou: 'Gracias por su consulta (#%s)! Nos pondremos en contacto con usted lo antes posible.',
        showTitle: true,
        lastname: true,
        Name: 'Nombre',
        modal: true,
        attachmentSupport: true
      });
    });
  </script>.
@endsection
@section('form1')
<!--Scrip del formuario de zammad rapido.//-->
<script id="zammad_form_script" src="https://empatia.ugca.edu.co/assets/form/form.js"></script>
  <script>
    $(function() {
      $('#feedback-form1').ZammadForm({
        messageTitle: 'Caso por Formulario en línea',
        messageSubmit: 'Enviar',
        messageThankYou: 'Gracias por su consulta (#%s)! Nos pondremos en contacto con usted lo antes posible.',
        showTitle: true,
        lastname: true,
        Name: 'Nombre',
        modal: true,
        attachmentSupport: true
      });
    });
  </script>.
@endsection