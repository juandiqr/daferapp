<div class="pedidosproveedores">
    <?php echo $this->Form->create('Pedidosproveedore', array('type' => 'file')); ?>
    <fieldset>
        <legend><?php __('Nuevo Pedido a proveedor desde el Presupuesto a Proveedor ' . $presupuestosproveedore['Presupuestosproveedore']['numero']); ?></legend>
        <table class="view">
            <tr>
                <td colspan="2">
                    <?php echo $this->Form->input('id'); ?>
                    <?php echo $this->Form->input('numero', array('value' => $numero)); ?>
                    <div class="input text required">
                        <label for="PedidosproveedorePresupuestosproveedoreId">Presupuesto de Proveedor <?php echo $presupuestosproveedore['Presupuestosproveedore']['numero'] ?></label>
                        <?php echo $this->Form->input('presupuestosproveedore_id', array('type' => 'hidden', 'value' => $presupuestosproveedore['Presupuestosproveedore']['id'])); ?>
                    </div>
                </td>
                <td colspan="2">
                    <?php echo $this->Form->input('estadospedidosproveedore_id', array('label' => 'Estado')); ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <?php echo $this->Form->input('fecha'); ?>
                </td>
                <td colspan="2">
                    <?php echo $this->Form->input('confirmado'); ?>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <?php echo $this->Form->input('observaciones'); ?>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Pedido escaneado Actual: <?php echo $this->Html->link(__($this->Form->value('Pedidosproveedore.pedidoescaneado'), true), '/files/pedidosproveedore/' . $this->Form->value('Pedidosproveedore.pedidoescaneado')); ?>
                    <?php echo $this->Form->input('remove_file', array('type' => 'checkbox', 'label' => 'Borrar Documento Escaneado Actual', 'hiddenField' => false)); ?>
                    <?php echo $this->Form->input('file', array('type' => 'file', 'label' => 'Pedidos escaneado')); ?>
                </td>
                <td>
                    <?php echo $this->Form->input('fecharecepcion', array('label' => 'Fecha de Recepcion')); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $this->Form->input('transportista_id', array('label' => 'Transportista')); ?>
                </td>
                <td>
                    <?php echo $this->Form->input('numero_expedicion', array('label' => 'Nº Expedición')); ?>
                </td>
                <td>
                    <?php echo $this->Form->input('tipo_envio', array('label' => 'Tipo de Envio')); ?>
                </td>
            </tr>
        </table>  
        <h2>Detalles del Pedido a Proveedor</h2>
        <div class="related">
            <h3>Validar Articulos para el Pedido</h3>
            <?php if (!empty($presupuestosproveedore['ArticulosPresupuestosproveedore'])): ?>
                <table cellpadding = "0" cellspacing = "0">
                    <tr>
                        <th><?php __('Ref'); ?></th>
                        <th><?php __('Nombre'); ?></th>
                        <th><?php __('Tarea de la Orden'); ?></th>
                        <th><?php __('Cantidad'); ?></th>
                        <th><?php __('Precio Proveedor€'); ?></th>
                        <th><?php __('Descuento %'); ?></th>
                        <th><?php __('Neto €'); ?></th>
                        <th><?php __('Total €'); ?></th>
                        <th><?php __('Validar'); ?></th>
                    </tr>
                    <?php
                    if (!empty($presupuestosproveedore['ArticulosPresupuestosproveedore'])) {
                        $i = 0;
                        $j = 0;
                        foreach ($presupuestosproveedore['ArticulosPresupuestosproveedore'] as $articulo_presupuestosproveedor):
                            $class = null;
                            if ($i++ % 2 == 0) {
                                $class = ' class="altrow"';
                            }
                            ?>
                            <tr<?php echo $class; ?>>
                                <td><?php echo $articulo_presupuestosproveedor['Articulo']['ref']; ?></td>
                                <td><?php echo $articulo_presupuestosproveedor['Articulo']['nombre']; ?></td>
                                <td><?php echo!empty($articulo_presupuestosproveedor['Tarea']) ? $articulo_presupuestosproveedor['Tarea']['descripcion'] : 'No tiene Tarea de Orden Relacionada'; ?></td>
                                <td><?php echo $articulo_presupuestosproveedor['cantidad']; ?></td>
                                <td><?php echo $articulo_presupuestosproveedor['precio_proveedor']; ?></td>
                                <td><?php echo $articulo_presupuestosproveedor['descuento']; ?></td>
                                <td><?php echo $articulo_presupuestosproveedor['neto']; ?></td>
                                <td><?php echo $articulo_presupuestosproveedor['total']; ?></td>
                                <td><?php echo $this->Form->input('ArticulosPresupuestosproveedore.' . $i . '.id', array('label' => 'Validar', 'type' => 'checkbox', 'checked' => true, 'value' => $articulo_presupuestosproveedor['id'])) ?></td>
                            </tr>
                            <?php
                            $j++;
                        endforeach;
                    }
                    ?>
                </table>
            <?php endif; ?>
        </div>
    </fieldset>
    <?php echo $this->Form->end(__('Guardar', true)); ?>
</div>