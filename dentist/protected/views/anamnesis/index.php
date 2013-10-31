<?php
/* @var $this AnamnesisController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Anamnesises',
);

$this->menu=array(
	array('label'=>'Create Anamnesis', 'url'=>array('create')),
	array('label'=>'Manage Anamnesis', 'url'=>array('admin')),
);
?>

<?php foreach ($testPersonalHistory as $data): ?>
<h2>mira el mensaje de tu madre <?php echo $data->id_tbl_personal_history; ?></h2>
<?php endforeach; ?>

<h1>Anamnesises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
