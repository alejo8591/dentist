<?php

/**
 * This is the model class for table "tbl_options_extraoral_examination".
 *
 * The followings are the available columns in table 'tbl_options_extraoral_examination':
 * @property integer $id_tbl_option_extraoral_examination
 * @property string $username
 * @property integer $id_tbl_physical_examination
 * @property integer $id_tbl_anamnesis
 * @property string $name_option_extraoral_examination
 * @property integer $flag_option_extraoral_examination
 * @property string $observation_option_extraoral_examination
 * @property string $create_user_id
 * @property string $create_time
 * @property string $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property PhysicalExamination $idTblPhysicalExamination
 * @property PhysicalExamination $username0
 * @property PhysicalExamination $idTblAnamnesis
 */
class OptionsExtraoralExamination extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_options_extraoral_examination';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, id_tbl_physical_examination, id_tbl_anamnesis', 'required'),
			array('id_tbl_physical_examination, id_tbl_anamnesis, flag_option_extraoral_examination', 'numerical', 'integerOnly'=>true),
			array('username, create_user_id, update_user_id', 'length', 'max'=>64),
			array('name_option_extraoral_examination', 'length', 'max'=>128),
			array('observation_option_extraoral_examination, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_option_extraoral_examination, username, id_tbl_physical_examination, id_tbl_anamnesis, name_option_extraoral_examination, flag_option_extraoral_examination, observation_option_extraoral_examination, create_user_id, create_time, update_user_id, update_time', 'safe', 'on'=>'search'),
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
			'idTblPhysicalExamination' => array(self::BELONGS_TO, 'PhysicalExamination', 'id_tbl_physical_examination'),
			'username0' => array(self::BELONGS_TO, 'PhysicalExamination', 'username'),
			'idTblAnamnesis' => array(self::BELONGS_TO, 'PhysicalExamination', 'id_tbl_anamnesis'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_option_extraoral_examination' => 'Id Tbl Option Extraoral Examination',
			'username' => 'Username',
			'id_tbl_physical_examination' => 'Id Tbl Physical Examination',
			'id_tbl_anamnesis' => 'Id Tbl Anamnesis',
			'name_option_extraoral_examination' => 'Name Option Extraoral Examination',
			'flag_option_extraoral_examination' => 'Flag Option Extraoral Examination',
			'observation_option_extraoral_examination' => 'Observation Option Extraoral Examination',
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

		$criteria->compare('id_tbl_option_extraoral_examination',$this->id_tbl_option_extraoral_examination);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('id_tbl_physical_examination',$this->id_tbl_physical_examination);
		$criteria->compare('id_tbl_anamnesis',$this->id_tbl_anamnesis);
		$criteria->compare('name_option_extraoral_examination',$this->name_option_extraoral_examination,true);
		$criteria->compare('flag_option_extraoral_examination',$this->flag_option_extraoral_examination);
		$criteria->compare('observation_option_extraoral_examination',$this->observation_option_extraoral_examination,true);
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
	 * @return OptionsExtraoralExamination the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
