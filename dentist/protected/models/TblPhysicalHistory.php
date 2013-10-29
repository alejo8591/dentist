<?php

/**
 * This is the model class for table "tbl_physical_history".
 *
 * The followings are the available columns in table 'tbl_physical_history':
 * @property integer $id_tbl_physical_history
 * @property string $tbl_physical_historycol
 * @property integer $id_tbl_anamnesis
 * @property string $tbl_physical_historycol1
 *
 * The followings are the available model relations:
 * @property TblAnamnesis $idTblAnamnesis
 */
class TblPhysicalHistory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_physical_history';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tbl_anamnesis', 'numerical', 'integerOnly'=>true),
			array('tbl_physical_historycol, tbl_physical_historycol1', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_physical_history, tbl_physical_historycol, id_tbl_anamnesis, tbl_physical_historycol1', 'safe', 'on'=>'search'),
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
			'idTblAnamnesis' => array(self::BELONGS_TO, 'TblAnamnesis', 'id_tbl_anamnesis'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_physical_history' => 'Id Tbl Physical History',
			'tbl_physical_historycol' => 'Tbl Physical Historycol',
			'id_tbl_anamnesis' => 'Id Tbl Anamnesis',
			'tbl_physical_historycol1' => 'Tbl Physical Historycol1',
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

		$criteria->compare('id_tbl_physical_history',$this->id_tbl_physical_history);
		$criteria->compare('tbl_physical_historycol',$this->tbl_physical_historycol,true);
		$criteria->compare('id_tbl_anamnesis',$this->id_tbl_anamnesis);
		$criteria->compare('tbl_physical_historycol1',$this->tbl_physical_historycol1,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblPhysicalHistory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
