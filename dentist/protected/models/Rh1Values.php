<?php

/**
 * This is the model class for table "tbl_rh1_values".
 *
 * The followings are the available columns in table 'tbl_rh1_values':
 * @property integer $id_tbl_rh1_values
 * @property integer $id_tbl_rh1
 * @property string $month
 * @property string $landfill_ordinary
 * @property string $landfill_idrs
 * @property string $recycling_recyclable
 * @property string $recycling_idr
 * @property string $total_waste_not_hazardous
 * @property string $hef_biosanitary
 * @property string $hef_sharps
 * @property string $hef_idd
 * @property string $incineration_sharps
 * @property string $incineration_pathological
 * @property string $incineration_chemical
 * @property string $incineration_other_residues
 * @property string $incineration_idi
 * @property string $ots_other_residues
 * @property string $ots_chemical_reactives
 * @property string $ots_idos
 * @property string $total_waste_hazardous
 *
 * The followings are the available model relations:
 * @property Rh1 $idTblRh1
 */
class Rh1Values extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_rh1_values';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tbl_rh1', 'required'),
			array('id_tbl_rh1', 'numerical', 'integerOnly'=>true),
			array('month', 'length', 'max'=>64),
			array('landfill_ordinary, landfill_idrs, recycling_recyclable, recycling_idr, total_waste_not_hazardous, hef_biosanitary, hef_sharps, hef_idd, incineration_sharps, incineration_pathological, incineration_chemical, incineration_other_residues, incineration_idi, ots_other_residues, ots_chemical_reactives, ots_idos, total_waste_hazardous', 'length', 'max'=>3),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_rh1_values, id_tbl_rh1, month, landfill_ordinary, landfill_idrs, recycling_recyclable, recycling_idr, total_waste_not_hazardous, hef_biosanitary, hef_sharps, hef_idd, incineration_sharps, incineration_pathological, incineration_chemical, incineration_other_residues, incineration_idi, ots_other_residues, ots_chemical_reactives, ots_idos, total_waste_hazardous', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idTblRh1' => array(self::BELONGS_TO, 'Rh1', 'id_tbl_rh1'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_rh1_values' => 'Id Tbl Rh1 Values',
			'id_tbl_rh1' => 'Id Tbl Rh1',
			'month' => 'Month',
			'landfill_ordinary' => 'Landfill Ordinary',
			'landfill_idrs' => 'Landfill Idrs',
			'recycling_recyclable' => 'Recycling Recyclable',
			'recycling_idr' => 'Recycling Idr',
			'total_waste_not_hazardous' => 'Total Waste Not Hazardous',
			'hef_biosanitary' => 'Hef Biosanitary',
			'hef_sharps' => 'Hef Sharps',
			'hef_idd' => 'Hef Idd',
			'incineration_sharps' => 'Incineration Sharps',
			'incineration_pathological' => 'Incineration Pathological',
			'incineration_chemical' => 'Incineration Chemical',
			'incineration_other_residues' => 'Incineration Other Residues',
			'incineration_idi' => 'Incineration Idi',
			'ots_other_residues' => 'Ots Other Residues',
			'ots_chemical_reactives' => 'Ots Chemical Reactives',
			'ots_idos' => 'Ots Idos',
			'total_waste_hazardous' => 'Total Waste Hazardous',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_tbl_rh1_values',$this->id_tbl_rh1_values);
		$criteria->compare('id_tbl_rh1',$this->id_tbl_rh1);
		$criteria->compare('month',$this->month,true);
		$criteria->compare('landfill_ordinary',$this->landfill_ordinary,true);
		$criteria->compare('landfill_idrs',$this->landfill_idrs,true);
		$criteria->compare('recycling_recyclable',$this->recycling_recyclable,true);
		$criteria->compare('recycling_idr',$this->recycling_idr,true);
		$criteria->compare('total_waste_not_hazardous',$this->total_waste_not_hazardous,true);
		$criteria->compare('hef_biosanitary',$this->hef_biosanitary,true);
		$criteria->compare('hef_sharps',$this->hef_sharps,true);
		$criteria->compare('hef_idd',$this->hef_idd,true);
		$criteria->compare('incineration_sharps',$this->incineration_sharps,true);
		$criteria->compare('incineration_pathological',$this->incineration_pathological,true);
		$criteria->compare('incineration_chemical',$this->incineration_chemical,true);
		$criteria->compare('incineration_other_residues',$this->incineration_other_residues,true);
		$criteria->compare('incineration_idi',$this->incineration_idi,true);
		$criteria->compare('ots_other_residues',$this->ots_other_residues,true);
		$criteria->compare('ots_chemical_reactives',$this->ots_chemical_reactives,true);
		$criteria->compare('ots_idos',$this->ots_idos,true);
		$criteria->compare('total_waste_hazardous',$this->total_waste_hazardous,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Rh1Values the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
