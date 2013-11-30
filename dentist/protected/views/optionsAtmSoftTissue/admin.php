<?php
/* @var $this OptionsAtmSoftTissueController */
/* @var $model OptionsAtmSoftTissue */

$this->breadcrumbs=array(
	'Options Atm Soft Tissues'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List OptionsAtmSoftTissue', 'url'=>array('index')),
	array('label'=>'Create OptionsAtmSoftTissue', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#options-atm-soft-tissue-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Options Atm Soft Tissues</h1>

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
	'id'=>'options-atm-soft-tissue-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_tbl_option_atm_soft_tissue',
		'id_tbl_atm',
		'name_option_atm_soft_tissue',
		'flag_option_atm_soft_tissue',
		'observation_atm_soft_tissue',
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
