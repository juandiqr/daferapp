<div class="tareaspresupuestoclientesOtrosservicios form">
<?php echo $this->Form->create('TareaspresupuestoclientesOtrosservicio');?>
	<fieldset>
 		<legend><?php __('Edit Tareaspresupuestoclientes Otrosservicio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tareaspresupuestocliente_id');
		echo $this->Form->input('desplazamiento');
		echo $this->Form->input('manoobradesplazamiento');
		echo $this->Form->input('kilometraje');
		echo $this->Form->input('dietas');
		echo $this->Form->input('varios');
		echo $this->Form->input('total');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('TareaspresupuestoclientesOtrosservicio.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('TareaspresupuestoclientesOtrosservicio.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tareaspresupuestoclientes Otrosservicios', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tareaspresupuestoclientes', true), array('controller' => 'tareaspresupuestoclientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tareaspresupuestocliente', true), array('controller' => 'tareaspresupuestoclientes', 'action' => 'add')); ?> </li>
	</ul>
</div>