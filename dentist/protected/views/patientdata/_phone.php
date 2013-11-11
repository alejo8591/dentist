<li>
      <div class="row">
         <?php echo CHtml::activeLabel($phone, "type_phone")?>
         <?php echo CHtml::activeDropdownList($phone, "type_phone")?>
      </div>
      <div class="row">
         <?php echo CHtml::activeLabel($phone, "phone")?>
         <?php echo CHtml::activeTextField($phone, "[$index]phone")?>
      </div> 
      <div class="row">
         <?php echo CHtml::activeLabel($phone, "phone_extension")?>
         <?php echo CHtml::activeTextField($phone, "phone_extension")?>
      </div> 
      <div class="row">
         <?php echo CHtml::activeLabel($phone, "description")?>
         <?php echo CHtml::activeTextArea($phone, "description")?>
      </div> 
</li>