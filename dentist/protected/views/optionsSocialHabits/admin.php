<?php
/* @var $this OptionsSocialHabitsController */
/* @var $model OptionsSocialHabits */

$this->breadcrumbs=array(
	'Options Social Habits'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List OptionsSocialHabits', 'url'=>array('index')),
	array('label'=>'Create OptionsSocialHabits', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#options-social-habits-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Options Social Habits</h1>

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
	'id'=>'options-social-habits-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_tbl_option_social_habits',
		'id_tbl_personal_background',
		'name_option_social_habits',
		'flag_option_social_habits',
		'observation_option_social_habits',
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
