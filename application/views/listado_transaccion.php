<div class="container">
    <h1>Lista de transacciones</h1>
    <?php if (count($transacciones) > 0) { ?>
        <table>
            <thead>
                <tr>
                    <th>Número de Transacción</th>
                    <th>Fecha</th>
                    <th>Tipo de Transacción</th>
                    <th>Monto</th>
                    <th>Descripción</th>
                    <th>Destino</th>
                    <th>Número de Cuenta</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transacciones as $transaccion): ?>
                    <tr>
                        <td><?php echo $transaccion['nro_tr']; ?></td>
                        <td><?php echo $transaccion['fecha']; ?></td>
                        <td><?php echo $transaccion['tipo_tr']; ?></td>
                        <td><?php echo $transaccion['monto']; ?></td>
                        <td><?php echo $transaccion['descripcion']; ?></td>
                        <td><?php echo $transaccion['destino']; ?></td>
                        <td><?php echo $transaccion['nro_cuenta']; ?></td>
                    </tr>
                <?php endforeach;
    } else {
        echo "Sin transacciones";
    } ?>
        </tbody>
    </table>
</div>

<style>
    
    /* Estilo para la tabla */
    table {
        width: 70%;
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