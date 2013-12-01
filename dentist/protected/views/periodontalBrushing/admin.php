<?php
/* @var $this PeriodontalBrushingController */
/* @var $model PeriodontalBrushing */

$this->breadcrumbs=array(
	'Periodontal Brushings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PeriodontalBrushing', 'url'=>array('index')),
	array('label'=>'Create PeriodontalBrushing', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#periodontal-brushing-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Periodontal Brushings</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'periodontal-brushing-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_tbl_periodontal_brushing',
		'id_tbl_periodontal_examination',
		'name_option_periodontal_brushing',
		'type_periodontal_brushing',
		'flag_option_periodontal_brushing',
		'observations_periodontal_brushing',
		/*
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
