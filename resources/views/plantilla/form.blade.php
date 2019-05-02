<div class="form-home">
    <div class="content">
        <div class="title">
            <h2>Suscríbete y participa</h2>
            <div class="line"></div>
        </div>
        <div class="form">
            <form action="" target="_blank">
                @csrf
                <p>Nombre: <br> <input type="text" name="nombre"></p>
                <p>Apellido: <br> <input type="text" name="apellido"></p>
                <p>Número de cliente: <br> <input type="text" name="cliente"></p>
                <p class="space"><br></p>
                <p>Teléfono: <br> <input type="text" name="telefono"></p>
                <p>Correo electrónico: <br> <input type="text" name="correo"></p>
                <p>Estado: <br> <input type="text" name="estado"></p>
                <p>Código postal: <br> <input type="text" name="codigopostal"></p>
                <p><input type="radio" name="estado" value="Soltero" class="radio">¿Es usted titular de la cuenta?</p>
                <p class="space"><br></p>
                <div class="button"><input type="submit" value="Suscribirme" class="button-x"></div>
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
</div>