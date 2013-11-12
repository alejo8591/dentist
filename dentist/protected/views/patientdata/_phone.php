 <div class="row">
    <?php echo CHtml::activeLabelEx($phone, "[".$index."]type_phone"); ?>
    <?php echo CHtml::activeTextField($phone, "[".$index."]type_phone"); ?>
    <?php echo CHtml::error($phone,"[".$index."]type_phone"); ?>
 </div>
 <div class="row">
    <?php echo CHtml::activeLabelEx($phone, "[".$index."]phone"); ?>
    <?php echo CHtml::activeTextField($phone, "[".$index."]phone"); ?>
    <?php echo CHtml::error($phone,"[".$index."]phone"); ?>
 </div> 
 <div class="row">
    <?php echo CHtml::activeLabelEx($phone, "[".$index."]phone_extension"); ?>
    <?php echo CHtml::activeTextField($phone, "[".$index."]phone_extension"); ?>
    <?php echo CHtml::error($phone,"[".$index."]phone_extension"); ?>
 </div> 
 <div class="row">
    <?php echo CHtml::activeLabelEx($phone, "[".$index."]description"); ?>
    <?php echo CHtml::activeTextFieldd($phone, "[".$index."]description"); ?>
    <?php echo CHtml::error($phone,"[".$index."]description"); ?>
 </div> 