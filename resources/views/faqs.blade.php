@extends('plantilla.master')
@section('content')


	@include('plantilla.nav')

	@include('plantilla.canvas')
<div class="faqs">
    <div class="title">
        <h2>Preguntas frecuentes</h2>
    </div>
    <div class="content">
        <div class="photo"><img src="{{ asset('clientlibs/img/FaqsEngie.jpg') }}" alt="Engie"></div>
        <h2>¿Cómo puedo participar del concurso ENGIE Te Premia?</h2>
        <p>Para participar tienes que ser usuario de ENGIE México, estar registrado en nuestro portal Mi Cuenta (https://www.engiemexico.com/miCuenta), no tener adeudos en los últimos 6 meses, ser titular de la cuenta, y responder correctamente las preguntas de la Trivia ENGIE Te premia en el sitio www.engietepremia.com. ¡Mucha suerte!</p>
        <h2>Acabo de adquirir el servicio de ENGIE, ¿puedo participar?</h2>
        <p>¡Claro!, recuerda que para participar tienes que estar registrado en nuestro portal Mi Cuenta (https://www.engiemexico.com/miCuenta), y responder correctamente las preguntas de la Trivia ENGIE Te Premia en el sitio www.engietepremia.com ¡Mucha suerte!</p>
        <h2>Soy extranjero, ¿puedo concursar?</h2>
        <p>Sí, con tu documento de residencia en México y comprobar que eres el usuario titular de la cuenta</p>
        <h2>Si no soy usuario de Mi Cuenta, ¿puedo participar?</h2>
        <p>No, es requisito indispensable ser usuario de Mi Cuenta, así que ¡regístrate ahora mismo en  https://www.engiemexico.com/miCuenta </p>
        <h2>Tengo adeudos del servicio de Gas Natural ENGIE, ¿puedo participar?</h2>
        <p>No, ponte al día y participa para ganar hasta $20,000 en tarjeta de regalo. Acércate a nuestra Agencia ENGIE, llama al 01 800 000 62 94.</p>
        <h2>No soy el titular de la cuenta pero soy el usuario principal y quien paga el gas, ¿puedo participar?</h2>
        <p>No, te recomendamos acercarte a tu agencia ENGIE para realizar el cambio de titular. Ubica la Agencia aquí: https://www.engiemexico.com/?#!EngieAgencias </p>
        <h2>¿Cómo va a ser la selección de ganadores de ENGIE Te Premia?</h2>
        <p>Un jurado calificador revisará si cada concursante cumplió con todos los requisitos: 1) estar inscrito en Mi Cuenta; 2) Haber contestado correctamente las preguntas de la Trivia; además se tomarán en consideración el tiempo de respuesta de la trivia, entre más rápido hayan contestado correctamente, más posibilidades; así como la antigüedad que tiene el participante con el servicio de ENGIE.</p>
        <h2>¿Cuándo darán a conocer a los ganadores?</h2>
        <p>Se publicarán los nombres en la página de Internet www.engietepremia.com.mx a partir del 15 de julio de 2019. Los afortunados ganadores recibirán un correo personalizado confirmando su estatus de ganadores de esta promoción.</p>
        <h2>Tengo otras dudas sobre el concurso ENGIE Te Premia, ¿dónde me puedo comunicar?</h2>
        <p>Puedes marcar al teléfono 01 (55) 4161 – 6919 con un horario de atención de 10:00 a 15:00 horas de Lunes a Viernes.</p>
        <h2>¿Cuándo y en dónde se otorgarán los premios?</h2>
        <p>Los ganadores serán notificados a partir del 15 de julio del presente año, los premios serán entregados según las fechas establecidas para cada Estado. Las fechas pueden ser consultadas en las bases ubicas en el sitio www.engietepremia.com.mx opción del menú “Bases”.</p>
        <h2>¿Cómo sé si gané y qué premio gané?</h2>
        <p>Una vez identificados y definidos a los Clientes ganadores del concurso, se publicarán los nombres en la página de Internet www.engietepremia.com.mx a partir del 15 de julio de 2019. Por seguridad, los afortunados ganadores recibirán un correo personalizado confirmando su estatus de ganadores de esta promoción.</p>
        <h2>¿Dónde recogeré mi premio?</h2>
        <p>La entrega de los premios se llevará a cabo en las Oficinas Locales de ENGIE de los Estados participantes señaladas de la siguiente manera:</p>
        <ul>
            <li>ESTADO DE MEXICO.  27 de julio de 2019, en un horario de 11:00 a 14:00 horas.</li>
            <li>PUEBLA. 3 de agosto de 2019, en un horario de 11:00 a 14:00 horas</li>
            <li>QUERÉTARO. 3 de agosto de 2019, en un horario de 11:00 a 14:00 horas.</li>
            <li>JALISCO. 10 de agosto de 2019, en un horario de 11:00 a 14:00 horas.</li>
            <li>TAMAULIPAS. 10 de agosto de 2019, en un horario de 11:00 a 14:00 horas. (Tampico)</li>
            <li>TAMAULIPAS 17 de agosto 2019, en un horario de 11:00 a 14:00 horas. (Reynosa)</li>
            <li>TAMAULIPAS  17 de agosto, en un horario de 11:00 a 14:00 horas. (Matamoros)</li>
        </ul>
        <h2>¿Puedo ceder mi premio a algún familiar directo?</h2>
        <p>No., El premio es sólo para usuarios titulares del servicio de ENGIE, por lo tanto el premio no podrá cederse a otra persona, aún cuando sea un usuario de ENGIE.</p>
        <h2>¿Tengo algún periodo de tiempo para recoger mi premio, en caso de que no pueda ir en la fecha indicada?</h2>
        <p>Si por algún motivo el Ganador no puede recoger su premio en los días especificados en cada Estado, podrá recogerlo dentro de los 40 días naturales posteriores a la realización del Concurso en el Estado y/o Municipio de donde sea residente el ganador.</p>
    </div>
</div>

	@include('plantilla.footer')
	

@endsection