<?php
/* @var $this PersonalBackgroundController */
/* @var $model PersonalBackground */
/* @var $form CActiveForm */
?>

<div class="form">

<?php 
	 Yii::app()->clientScript->registerCoreScript('jquery');
	
  $form=$this->beginWidget('CActiveForm', array(
	'id'=>'personal-background-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tbl_anamnesis'); ?>
		<?php echo $form->dropDownList($model,'id_tbl_anamnesis', $model->getAnamnesies()); ?>
		<?php echo $form->error($model,'id_tbl_anamnesis'); ?>
	</div>
	<br />
  <div id="optionsSocialHabits">
        <?php
        foreach($model->optionsSocialHabits as $id => $optionsSocialHabits):
            $this->renderPartial('_optionssocialhabits', array(
                'model' => $optionsSocialHabits,
                'index' => $id,
                'display' => 'block',
            ));
        endforeach;
        ?>
  </div> 
   <div>
      <?php echo CHtml::link('Antecedentes Psicosociales', '#', array('id' => 'loadOptionsSocialHabitsByAjax')); ?>
   </div>
   <br />
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php
   $index = 0;
    Yii::app()->clientScript->registerScript('loadscripts', '
    var _index = ' . $index . ';
    $("#loadOptionsSocialHabitsByAjax").click(function(e){
       e.preventDefault();
       var _url = "' . Yii::app()->controller->createUrl("loadOptionsSocialHabitsByAjax", array("load_for_one" => $this->action->id)) . '&index="+_index;
       $.ajax({
          url: _url,
          success:function(response){
             $("#optionsSocialHabits").append(response);
             $("#optionsSocialHabits .crow").last().animate({
                opacity : 1, 
                 left: "+50", 
                 height: "toggle"
             });
          }
       });
    _index++;});

    var __index = ' . $index . ';
    $("#loadPhoneByAjax").click(function(e){
       e.preventDefault();
       var __url = "' . Yii::app()->controller->createUrl("loadPhoneByAjax", array("load_for_two" => $this->action->id)) . '&index="+__index;
       $.ajax({
          url: __url,
          success:function(response){
             $("#phone").append(response);
             $("#phone .crow").last().animate({
                opacity : 1, 
                 left: "+50", 
                 height: "toggle"
             });
          }
       });
    __index++;});

    ', CClientScript::POS_END); 
 ?>