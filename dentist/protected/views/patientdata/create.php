<div class="form">
<ul class="phone">
      <?php $this->renderPartial('_phone', array('phones'=>$phones), false, true); ?>
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
   </div>