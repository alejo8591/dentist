<?php

/**
 * This is the model class for table "tbl_periodontal_risk_classification".
 *
 * The followings are the available columns in table 'tbl_periodontal_risk_classification':
 * @property integer $id_tbl_periodontal_risk_classification
 * @property integer $id_tbl_dental_examination
 * @property string $name_periodontal_risk_classification
 * @property integer $flag_periodontal_risk_classification
 * @property string $observation_periodontal_risk_classification
 * @property string $create_user_id
 * @property string $create_time
 * @property string $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property DentalExamination $idTblDentalExamination
 */
class PeriodontalRiskClassification extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_periodontal_risk_classification';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tbl_dental_examination', 'required'),
			array('id_tbl_dental_examination, flag_periodontal_risk_classification', 'numerical', 'integerOnly'=>true),
			array('name_periodontal_risk_classification, create_user_id, update_user_id', 'length', 'max'=>64),
			array('observation_periodontal_risk_classification, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_periodontal_risk_classification, id_tbl_dental_examination, name_periodontal_risk_classification, flag_periodontal_risk_classification, observation_periodontal_risk_classification, create_user_id, create_time, update_user_id, update_time', 'safe', 'on'=>'search'),
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
			'idTblDentalExamination' => array(self::BELONGS_TO, 'DentalExamination', 'id_tbl_dental_examination'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_periodontal_risk_classification' => 'Id Tbl Periodontal Risk Classification',
			'id_tbl_dental_examination' => 'Id Tbl Dental Examination',
			'name_periodontal_risk_classification' => 'Name Periodontal Risk Classification',
			'flag_periodontal_risk_classification' => 'Flag Periodontal Risk Classification',
			'observation_periodontal_risk_classification' => 'Observation Periodontal Risk Classification',
			'create_user_id' => 'Create User',
			'create_time' => 'Create Time',
			'update_user_id' => 'Update User',
			'update_time' => 'Update Time',
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

		$criteria->compare('id_tbl_periodontal_risk_classification',$this->id_tbl_periodontal_risk_classification);
		$criteria->compare('id_tbl_dental_examination',$this->id_tbl_dental_examination);
		$criteria->compare('name_periodontal_risk_classification',$this->name_periodontal_risk_classification,true);
		$criteria->compare('flag_periodontal_risk_classification',$this->flag_periodontal_risk_classification);
		$criteria->compare('observation_periodontal_risk_classification',$this->observation_periodontal_risk_classification,true);
		$criteria->compare('create_user_id',$this->create_user_id,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_user_id',$this->update_user_id,true);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PeriodontalRiskClassification the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
