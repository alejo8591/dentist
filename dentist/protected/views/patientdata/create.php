<div class="form">
<?php echo CHtml::beginForm()?>
<ul class="phone">
   <li>
      <div class="row">
         <?php echo CHtml::activeLabel($phone, "type_phone")?>
         <?php echo CHtml::activeTextField($phone, "type_phone")?>
      </div>
      <div class="row">
         <?php echo CHtml::activeLabel($phone, "phone")?>
         <?php echo CHtml::activeTextField($phone, "phone")?>
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
</div>
<div class="row buttons">
   <?php echo CHtml::button('Add phone',
      array('class' => 'phone-add'))?>
      <?php Yii::app()->clientScript->registerCoreScript("jquery")?>
<script>
   $(".phone-add").click(function(){
      $.ajax({
         success: function(html){
            $(".phone").append(html);
         },
                  type: 'get',
                  url: '<?php echo $this->createUrl('phone')?>',
                  data: {
                     index: $(".phone li").size()
                  },
                  cache: false,
                  dataType: 'html'
               });
            });
         </script>
      </div>
   <?php echo CHtml::endForm()?>
   </div>