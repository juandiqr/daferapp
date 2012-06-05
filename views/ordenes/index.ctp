<div class="ordenes">
    <h2><?php __('Ordenes'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('Nº'); ?></th>
            <th><?php echo $this->Paginator->sort('Fecha'); ?></th>
            <th><?php echo $this->Paginator->sort('Nº Aviso de taller', 'avisostallere_id'); ?></th>
            <th><?php echo $this->Paginator->sort('Cliente'); ?></th>
            <th><?php echo $this->Paginator->sort('Centros de Trabajo'); ?></th>
            <th><?php echo $this->Paginator->sort('Máquina'); ?></th>
            <th><?php echo $this->Paginator->sort('Estado'); ?></th>
            <th><?php echo $this->Paginator->sort('Urgente'); ?></th>
            <th><?php echo $this->Paginator->sort('Fecha prevista de reparación'); ?></th>
            <th class="actions"><?php __('Acciones'); ?></th>
        </tr>
        <?php
        $i = 0;
        foreach ($ordenes as $ordene):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            ?>
            <tr<?php echo $class; ?>>
                <td><?php echo $ordene['Ordene']['numero']; ?>&nbsp;</td>
                <td>CAMPO NUEVO DE FECHA ?</td>
                <td><?php echo $this->Html->link($ordene['Avisostallere']['numero'], array('controller' => 'avisostalleres', 'action' => 'view', $ordene['Avisostallere']['id'])); ?></td>
                <td><?php echo $this->Html->link($ordene['Avisostallere']['Cliente']['nombre'], array('controller' => 'clientes', 'action' => 'view', $ordene['Avisostallere']['Cliente']['id'])); ?></td>
                <td><?php echo $this->Html->link($ordene['Avisostallere']['Centrostrabajo']['centrotrabajo'], array('controller' => 'centrostrabajos', 'action' => 'view', $ordene['Avisostallere']['Centrostrabajo']['id'])); ?></td>
                <td><?php echo $this->Html->link($ordene['Avisostallere']['Maquina']['nombre'], array('controller' => 'maquinas', 'action' => 'view', $ordene['Avisostallere']['Maquina']['id'])); ?></td>
                <td><?php echo $this->Html->link($ordene['Estadosordene']['estado'], array('controller' => 'avisostalleres', 'action' => 'view', $ordene['Avisostallere']['id'])); ?></td>
                <td><?php echo!empty($ordene['Ordene']['urgente']) ? 'Sí' : 'No' ?></td>
                <td><?php echo $ordene['Ordene']['fecha_prevista_reparacion']; ?></td>
                <td class="actions">
                    <?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $ordene['Ordene']['id'])); ?>
                    <?php echo $this->Html->link(__('Pdf', true), array('action' => 'pdf', $ordene['Ordene']['id'])); ?>
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