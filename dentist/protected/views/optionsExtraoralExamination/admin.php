<?php
/* @var $this OptionsExtraoralExaminationController */
/* @var $model OptionsExtraoralExamination */

$this->breadcrumbs=array(
	'Options Extraoral Examinations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List OptionsExtraoralExamination', 'url'=>array('index')),
	array('label'=>'Create OptionsExtraoralExamination', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#options-extraoral-examination-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Options Extraoral Examinations</h1>

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
	'id'=>'options-extraoral-examination-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_tbl_option_extraoral_examination',
		'id_tbl_physical_examination',
		'name_option_extraoral_examination',
		'flag_option_extraoral_examination',
		'observation_option_extraoral_examination',
		'create_user_id',
		/*
		'create_time',
		'update_user_id',
		'update_time',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
