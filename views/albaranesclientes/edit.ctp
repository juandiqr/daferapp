<div class="albaranesclientes form">
<?php echo $this->Form->create('Albaranescliente');?>
	<fieldset>
 		<legend><?php __('Edit Albaranescliente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fecha');
		echo $this->Form->input('numeroalbaran');
		echo $this->Form->input('observaciones');
		echo $this->Form->input('albaranescaneado');
		echo $this->Form->input('tiposiva_id');
		echo $this->Form->input('facturable');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Albaranescliente.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Albaranescliente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Albaranesclientes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Facturas Clientes', true), array('controller' => 'facturas_clientes', 'action' => 'index')); ?> </li>
	</ul>
</div>