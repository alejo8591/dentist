<?php
/* @var $this Rh1Controller */
/* @var $model Rh1 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php 
	Yii::app()->clientScript->registerCoreScript('jquery');
	$form=$this->beginWidget('CActiveForm', array(
		'id'=>'rh1-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'provider_class'); ?>
		<?php echo $form->textField($model,'provider_class',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'provider_class'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_surname'); ?>
		<?php echo $form->textField($model,'name_surname',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'name_surname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_document'); ?>
		<?php echo $form->textField($model,'id_document',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'id_document'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'provider_code'); ?>
		<?php echo $form->textField($model,'provider_code',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'provider_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<br />

   <div id="rh1Values">
        <?php
          foreach($model->rh1Values as $id => $rh1Values):
              $this->renderPartial('_rh1values', array(
                  'model' => $rh1Values,
                  'index' => $id,
                  'display' => 'block',
              ));
          endforeach;
        ?>
    </div> 
   <div>
      <?php echo CHtml::link('Agregar - Residuos Hospitalarios por Mes', '#', array('id' => 'loadRV')); ?>
   </div>
   <br />

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
   $index = 0;
      Yii::app()->clientScript->registerScript('loadsoptionsDiagnoses', '
      var _index = ' . $index . ';
      $("#loadRV").click(function(e){
         e.preventDefault();
         var _url = "' . Yii::app()->controller->createUrl("loadRV", array("load" => $this->action->id)) . '&index="+_index;
         $.ajax({
            url: _url,
            success:function(response){
               $("#rh1Values").append(response);
               $("#rh1Values .crow").last().animate({
                  opacity : 1, 
                   left: "+50", 
                   height: "toggle"
               });
            }
         });
      _index++;});
      ', CClientScript::POS_END); 
 ?>