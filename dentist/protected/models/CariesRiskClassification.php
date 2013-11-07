<?php

/**
 * This is the model class for table "tbl_caries_risk_classification".
 *
 * The followings are the available columns in table 'tbl_caries_risk_classification':
 * @property integer $id_tbl_caries_risk_classification
 * @property string $username
 * @property integer $id_tbl_anamnesis
 * @property integer $id_tbl_dental_examination
 * @property string $name_caries_risk_classification
 * @property string $observation_caries_risk_classification
 * @property string $score_caries_risk_classification
 * @property string $total_sector_caries_risk_classification
 * @property string $create_user_id
 * @property string $create_time
 * @property string $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property DentalExamination $idTblDentalExamination
 * @property DentalExamination $username0
 * @property DentalExamination $idTblAnamnesis
 */
class CariesRiskClassification extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_caries_risk_classification';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tbl_caries_risk_classification, username, id_tbl_anamnesis, id_tbl_dental_examination', 'required'),
			array('id_tbl_caries_risk_classification, id_tbl_anamnesis, id_tbl_dental_examination', 'numerical', 'integerOnly'=>true),
			array('username, name_caries_risk_classification, score_caries_risk_classification, total_sector_caries_risk_classification, create_user_id, update_user_id', 'length', 'max'=>64),
			array('observation_caries_risk_classification, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_caries_risk_classification, username, id_tbl_anamnesis, id_tbl_dental_examination, name_caries_risk_classification, observation_caries_risk_classification, score_caries_risk_classification, total_sector_caries_risk_classification, create_user_id, create_time, update_user_id, update_time', 'safe', 'on'=>'search'),
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
			'username0' => array(self::BELONGS_TO, 'DentalExamination', 'username'),
			'idTblAnamnesis' => array(self::BELONGS_TO, 'DentalExamination', 'id_tbl_anamnesis'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_caries_risk_classification' => 'Id Tbl Caries Risk Classification',
			'username' => 'Username',
			'id_tbl_anamnesis' => 'Id Tbl Anamnesis',
			'id_tbl_dental_examination' => 'Id Tbl Dental Examination',
			'name_caries_risk_classification' => 'Name Caries Risk Classification',
			'observation_caries_risk_classification' => 'Observation Caries Risk Classification',
			'score_caries_risk_classification' => 'Score Caries Risk Classification',
			'total_sector_caries_risk_classification' => 'Total Sector Caries Risk Classification',
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

		$criteria->compare('id_tbl_caries_risk_classification',$this->id_tbl_caries_risk_classification);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('id_tbl_anamnesis',$this->id_tbl_anamnesis);
		$criteria->compare('id_tbl_dental_examination',$this->id_tbl_dental_examination);
		$criteria->compare('name_caries_risk_classification',$this->name_caries_risk_classification,true);
		$criteria->compare('observation_caries_risk_classification',$this->observation_caries_risk_classification,true);
		$criteria->compare('score_caries_risk_classification',$this->score_caries_risk_classification,true);
		$criteria->compare('total_sector_caries_risk_classification',$this->total_sector_caries_risk_classification,true);
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
	 * @return CariesRiskClassification the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
