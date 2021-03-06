<div>
    <h2><?php __('Facturas Clientes'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('Numero', 'numero'); ?></th>
            <th><?php echo $this->Paginator->sort('Cliente', 'cliente_id'); ?></th>
            <th><?php echo $this->Paginator->sort('Fecha', 'fecha'); ?></th>
            <th><?php echo $this->Paginator->sort('Observaciones', 'observaciones'); ?></th>
            <th><?php echo $this->Paginator->sort('Base Imponible', 'baseimponible'); ?></th>
            <th><?php echo $this->Paginator->sort('Impuestos', 'impuestos'); ?></th>
            <th><?php echo $this->Paginator->sort('Total', 'total'); ?></th>
            <th><?php echo $this->Paginator->sort('Factura escaneada', 'facturaescaneada'); ?></th>
            <th><?php echo $this->Paginator->sort('Estado', 'estadosfacturascliente_id'); ?></th>
            <th class="actions"><?php __('Acciones'); ?></th>
        </tr>
        <?php
        $i = 0;
        foreach ($facturasClientes as $facturasCliente):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            ?>
            <tr<?php echo $class; ?>>
                <td><?php echo $facturasCliente['FacturasCliente']['numero']; ?>&nbsp;</td>
                <td><?php echo $this->Html->link($facturasCliente['Cliente']['nombre'], array('controller' => 'clientes', 'action' => 'view', $facturasCliente['Cliente']['id'])); ?></td>
                <td><?php echo $this->Time->format('d-m-Y', $facturasCliente['FacturasCliente']['fecha']); ?>&nbsp;</td>
                <td><?php echo $facturasCliente['FacturasCliente']['observaciones']; ?>&nbsp;</td>
                <td><?php echo redondear_dos_decimal($facturasCliente['FacturasCliente']['baseimponible']); ?>&nbsp;</td>
                <td><?php echo redondear_dos_decimal($facturasCliente['FacturasCliente']['impuestos']); ?>&nbsp;</td>
                <td><?php echo redondear_dos_decimal($facturasCliente['FacturasCliente']['total']); ?></td>
                <td><?php if (!empty($facturasCliente['FacturasCliente']['facturaescaneada'])) echo $this->Html->image('clip.png', array('url' => array('action' => 'downloadFile', $facturasCliente['FacturasCliente']['id']))); ?>&nbsp;</td>
                <td><?php echo $facturasCliente['Estadosfacturascliente']['estado']; ?></td>
                <td class="actions">
                    <?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $facturasCliente['FacturasCliente']['id'])); ?>
                    <?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $facturasCliente['FacturasCliente']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $facturasCliente['FacturasCliente']['id'])); ?>
                    <?php echo $this->Html->link(__('Pdf', true), array('action' => 'pdf', $facturasCliente['FacturasCliente']['id'])); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Página %page% de %pages%, mostrando %current% filas de %count% total, starting on record %start%, finalizando en %end%', true)
        ));
        ?>	</p>

    <div class="paging">
        <?php echo $this->Paginator->prev('<< ' . __('Anterior', true), array(), null, array('class' => 'disabled')); ?>
        | 	<?php echo $this->Paginator->numbers(); ?>
        |
        <?php echo $this->Paginator->next(__('Siguiente', true) . ' >>', array(), null, array('class' => 'disabled')); ?>
    </div>
</div>
