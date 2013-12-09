<div class="row">
	<?php echo $form->labelEx($model,'cie10_code'); ?>
	<?php echo $form->textField($model,'cie10_code',array('size'=>60,'maxlength'=>128)); ?>
	<?php echo $form->error($model,'cie10_code'); ?>
</div>

<div class="row">
	<?php echo $form->labelEx($model,'cups_code'); ?>
	<?php echo $form->textField($model,'cups_code',array('size'=>60,'maxlength'=>128)); ?>
	<?php echo $form->error($model,'cups_code'); ?>
</div>

<div class="row">
	<?php echo $form->labelEx($model,'value_procedure'); ?>
	<?php echo $form->textField($model,'value_procedure',array('size'=>60,'maxlength'=>256)); ?>
	<?php echo $form->error($model,'value_procedure'); ?>
</div>