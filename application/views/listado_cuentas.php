<div class="container">
    <h1>Eliminar Cuentas</h1>
    <table>
        <thead>
            <tr>
                <th colspan="6">Listado de Cuentas</th>
            </tr>
            <tr>
                <th>Número de Cuenta</th>
                <th>Propietario</th>
                <th>Tipo</th>
                <th>Saldo</th>
                <th>Eliminar</th>
                <th>Informacion</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cuentas as $cuenta) {
                if ($cuenta['status'] == 1) {
                    ?>
                    <tr>
                        <td><?php echo $cuenta['nro_cuenta']; ?></td>
                        <td><?php echo $cuenta['nombres'] . ' ' . $cuenta['paterno'] . ' ' . $cuenta['materno']; ?></td>
                        <td><?php echo $cuenta['tipo']; ?></td>
                        <td><?php echo $cuenta['saldo']; ?></td>
                        <td>
                            <form action="<?= site_url('Cuenta/borrar'); ?>" method="POST">
                                <input type="hidden" name="nro_cuenta" value="<?php echo $cuenta['nro_cuenta'] ?>">
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                        <td>
                            <form action="<?= site_url('panel'); ?>" method="POST">
                                <input type="hidden" name="ci" value="<?php echo $cuenta['ci'] ?>">
                                <input type="hidden" name="nro_cuenta" value="<?php echo $cuenta['nro_cuenta'] ?>">
                                <button type="submit">Ver</button>
                            </form>
                        </td>
                    </tr>
                <?php }
            }
            ; ?>
        </tbody>
    </table>
</div>

<style>
    body {
        font-family: Arial, sans-serif;
        /* Cambia Arial por cualquier otra fuente que prefieras */
    }
    h1 {
        width: 90%;
        background-color: #F0F0F0;
        padding: 10px;
        border-radius: 10px;
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    /* Estilo para la tabla */
    table {
        width: 90%;
        border-collapse: collapse;
        border-spacing: 0;
        overflow-y: auto;
    }

    /* Estilo para las celdas de encabezado */
    th {
        background-color: #f2f2f2;
        border: 1px solid #dddddd;
        padding: 8px;
        text-align: center;
    }

    /* Estilo alternativo para filas */
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    /* Estilo para las celdas */
    td {
        border: 1px solid #dddddd;
        padding: 8px;
        text-align: center;
    }
</style>