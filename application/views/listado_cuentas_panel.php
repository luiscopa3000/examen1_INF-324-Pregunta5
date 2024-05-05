<div class="container">
    <h1>Datos del cliente</h1>

    <div class="datos">
        <div class="col1">
            <p><strong>Nro. de cuenta</strong></p>
            <p><strong>CI</strong></p>
            <p><strong>Nombres</strong></p>
            <p><strong>Apellido Paterno</strong></p>
            <p><strong>Apellido Materno</strong></p>
            <p><strong>Fecha de Nacimiento</strong></p>
            <p><strong>Género</strong></p>
            <p><strong>Dirección</strong></p>
            <p><strong>Teléfono</strong></p>
            <p><strong>Celular</strong></p>
            <p><strong>Correo</strong></p>
        </div>
        <div class="col2">
            <?php foreach($personas as $persona) {?>
            <p><?php echo $nro_cuenta?></p>
            <p><?php echo $persona['ci'] ?></p>
            <p><?php echo $persona['nombres'] ?></p>
            <p><?php echo $persona['paterno'] ?></p>
            <p><?php echo $persona['materno'] ?></p>
            <p><?php echo $persona['fecha_nac'] ?></p>
            <p><?php echo ($persona['genero'] == 1) ? "Masculino" : "Femenino"; ?></p>
            <p><?php echo $persona['direccion_dom'] ?></p>
            <p><?php echo $persona['telefono'] ?></p>
            <p><?php echo $persona['celular'] ?></p>
            <p><?php echo $persona['correo'] ?></p>
            <?php } ?>
        </div>
    </div>
</div>

<style>
    h1 {
        width: 70%;
        background-color: #E4E3E9;
        padding: 10px;
        border-radius: 10px;
    }
    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
    }
    .container .datos {
        display: flex;
        flex-direction: row;
        background-color: #F0F0F0;
        padding: 15px;
        border-radius: 10px;
        padding-left: 10%;
        padding-right: 10%;
    }
    .datos .col1 {
        margin-right: 20px;
    }
</style>