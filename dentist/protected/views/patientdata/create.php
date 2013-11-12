<div class="form">
   <?php 
      Yii::app()->clientScript->registerCoreScript('jquery');
      $form=$this->beginWidget('CActiveForm', array(
      'id'=>'patienData-form',
      // Please note: When you enable ajax validation, make sure the corresponding
      // controller action is handling ajax validation correctly.
      // There is a call to performAjaxValidation() commented in generated controller code.
      // See class documentation of CActiveForm for details on this.
      'enableAjaxValidation'=>true,
   )); ?>

   <p class="note">Campos con el <span class="required">*</span> son obligatorios.</p>

   <?php echo $form->errorSummary($model); ?>

   <div class="row">
    <?php echo $form->labelEx($model,'username'); ?>
    <?php echo $form->dropDownList($model,'username',$model->getUsernames()); ?>
    <?php echo $form->error($model,'username'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'name'); ?>
    <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128)); ?>
    <?php echo $form->error($model,'name'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'surname'); ?>
    <?php echo $form->textField($model,'surname',array('size'=>60,'maxlength'=>128)); ?>
    <?php echo $form->error($model,'surname'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'date_birth'); ?>
    <?php 
      $this->widget('zii.widgets.jui.CJuiDatePicker',
        array(
              'attribute'=>'date_birth',
              'model'=>$model,
              'options' => array(
                                'mode'=>'focus',
                                'dateFormat'=>'d MM, yy',
                                'showAnim' => 'slideDown',
                                ),
              'htmlOptions'=>array('size'=>30,'class'=>'date'),
              ));
    ?>
      <?php echo $form->error($model,'date_birth'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'place_of_birth'); ?>
    <?php echo $form->textField($model,'place_of_birth',array('size'=>60,'maxlength'=>128)); ?>
    <?php echo $form->error($model,'place_of_birth'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'genre'); ?>
    <?php echo $form->dropDownList($model,'genre', $model->getTypeGenre()); ?>
    <?php echo $form->error($model,'genre'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'blood_group'); ?>
    <?php echo $form->dropDownList($model,'blood_group', $model->getTypeBloodGroup()); ?>
    <?php echo $form->error($model,'blood_group'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'id_tbl_country'); ?>
    <?php echo $form->dropDownList($model,'id_tbl_country', $model->getCountries()); ?>
    <?php echo $form->error($model,'id_tbl_country'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'id_tbl_city'); ?>
    <?php echo $form->dropDownList($model,'id_tbl_city', $model->getCities()); ?>
    <?php echo $form->error($model,'id_tbl_city'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'id_tbl_level_schooling'); ?>
    <?php echo $form->dropDownList($model,'id_tbl_level_schooling', $model->getLevelSchooling()); ?>
    <?php echo $form->error($model,'id_tbl_level_schooling'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'id_tbl_profession'); ?>
    <?php echo $form->dropDownList($model,'id_tbl_profession', $model->getProfessions()); ?>
    <?php echo $form->error($model,'id_tbl_profession'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'occupation'); ?>
    <?php echo $form->textField($model,'occupation',array('size'=>60,'maxlength'=>64)); ?>
    <?php echo $form->error($model,'occupation'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'contact'); ?>
    <?php echo $form->textField($model,'contact',array('size'=>60,'maxlength'=>64)); ?>
    <?php echo $form->error($model,'contact'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'id_tbl_healt_regimen'); ?>
    <?php echo $form->dropDownList($model,'id_tbl_healt_regimen', $model->getHealtRegimen()); ?>
    <?php echo $form->error($model,'id_tbl_healt_regimen'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'id_tbl_healt_institution'); ?>
    <?php echo $form->dropDownList($model,'id_tbl_healt_institution', $model->getHealtInstitutions()); ?>
    <?php echo $form->error($model,'id_tbl_healt_institution'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'description_healt'); ?>
    <?php echo $form->textArea($model,'description_healt',array('rows'=>6, 'cols'=>50)); ?>
    <?php echo $form->error($model,'description_healt'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'family_history'); ?>
    <?php echo $form->textArea($model,'family_history',array('rows'=>6, 'cols'=>50)); ?>
    <?php echo $form->error($model,'family_history'); ?>
  </div>
  <br />
  <div id="address">
        <?php
        foreach($model->address as $id => $address):
            $this->renderPartial('_address', array(
                'model' => $address,
                'index' => $id,
                'display' => 'block',
            ));
        endforeach;
        ?>
    </div> 
   <div>
      <?php echo CHtml::link('Agregar Dirección(es)', '#', array('id' => 'loadAddressByAjax')); ?>
   </div>
   <br />
   <div id="phone">
        <?php
        foreach ($model->phone as $id => $phone):
            $this->renderPartial('_phone', array(
                'model' => $phone,
                'index' => $id,
                'display' => 'block',
            ));
        endforeach;
        ?>
    </div> 
   <div>
      <?php echo CHtml::link('Agregar Número(s) de teléfono', '#', array('id' => 'loadPhoneByAjax')); ?>
   </div>
   <br />
    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear Anamnesis' : 'Save'); ?>
    </div>
<?php $this->endWidget(); ?>
</div><!-- form -->

 <?php
   $index = 0;
      Yii::app()->clientScript->registerScript('loadscripts', '
      var _index = ' . $index . ';
      $("#loadAddressByAjax").click(function(e){
         e.preventDefault();
         var _url = "' . Yii::app()->controller->createUrl("loadAddressByAjax", array("load_for_one" => $this->action->id)) . '&index="+_index;
         $.ajax({
            url: _url,
            success:function(response){
               $("#address").append(response);
               $("#address .crow").last().animate({
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
