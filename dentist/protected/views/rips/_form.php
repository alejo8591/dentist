<?php
/* @var $this RipsController */
/* @var $model Rips */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rips-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tbl_anamnesis'); ?>
		<?php echo $form->dropDownList($model,'id_tbl_anamnesis', $model->getAnamnesies()); ?>
		<?php echo $form->error($model,'id_tbl_anamnesis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bill_of_sale'); ?>
		<?php echo $form->textField($model,'bill_of_sale',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'bill_of_sale'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<br />

   <div id="ripsProcedures">
        <?php
          foreach($model->ripsProcedures as $id => $ripsProcedures):
              $this->renderPartial('_ripsprocedures', array(
                  'model' => $ripsProcedures,
                  'index' => $id,
                  'display' => 'block',
              ));
          endforeach;
        ?>
    </div> 
   <div>
      <?php echo CHtml::link('Agregar - Agregar ítems al RIPS', '#', array('id' => 'loadRP')); ?>
   </div>
   <br />

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
   $index = 0;
      Yii::app()->clientScript->registerScript('loadripsprocedures', '
      var _index = ' . $index . ';
      $("#loadRP").click(function(e){
         e.preventDefault();
         var _url = "' . Yii::app()->controller->createUrl("loadRP", array("load" => $this->action->id)) . '&index="+_index;
         $.ajax({
            url: _url,
            success:function(response){
               $("#ripsProcedures").append(response);
               $("#ripsProcedures .crow").last().animate({
                  opacity : 1, 
                   left: "+50", 
                   height: "toggle"
               });
            }
         });
      _index++;});
      ', CClientScript::POS_END); 
 ?>