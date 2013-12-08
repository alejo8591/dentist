 <div class="row">
    <?php echo CHtml::activeLabelEx($model, "[".$index."]type_phone"); ?>
    <?php echo CHtml::activeDropDownList($model, "[".$index."]type_phone", $model->getTypePhones()); ?>
    <?php echo CHtml::error($model,"[".$index."]type_phone"); ?>
 </div>
 <div class="row">
    <?php echo CHtml::activeLabelEx($model, "[".$index."]phone"); ?>
    <?php echo CHtml::activeTextField($model, "[".$index."]phone"); ?>
    <?php echo CHtml::error($model,"[".$index."]phone"); ?>
 </div> 
 <div class="row">
    <?php echo CHtml::activeLabelEx($model, "[".$index."]phone_extension"); ?>
    <?php echo CHtml::activeTextField($model, "[".$index."]phone_extension"); ?>
    <?php echo CHtml::error($model,"[".$index."]phone_extension"); ?>
 </div> 
 <div class="row">
    <?php echo CHtml::activeLabelEx($model, "[".$index."]description"); ?>
    <?php echo CHtml::activeTextArea($model, "[".$index."]description"); ?>
    <?php echo CHtml::error($model,"[".$index."]description"); ?>
 </div> 