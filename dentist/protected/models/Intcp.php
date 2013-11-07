<?php

/**
 * This is the model class for table "tbl_intcp".
 *
 * The followings are the available columns in table 'tbl_intcp':
 * @property integer $id_tbl_intcp
 * @property integer $id_tbl_anamnesis
 * @property string $username
 * @property integer $id_tbl_periodontal_examination
 * @property string $name_option_intcp
 * @property string $code_intcp
 * @property string $nt_intcp
 * @property string $observation_option_intcp
 * @property integer $flag_option_intcp
 * @property string $create_user_id
 * @property string $create_time
 * @property string $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property PeriodontalExamination $idTblPeriodontalExamination
 * @property PeriodontalExamination $username0
 * @property PeriodontalExamination $idTblAnamnesis
 */
class Intcp extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_intcp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tbl_anamnesis, username, id_tbl_periodontal_examination', 'required'),
			array('id_tbl_anamnesis, id_tbl_periodontal_examination, flag_option_intcp', 'numerical', 'integerOnly'=>true),
			array('username, code_intcp, nt_intcp, create_user_id, update_user_id', 'length', 'max'=>64),
			array('name_option_intcp', 'length', 'max'=>128),
			array('observation_option_intcp, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_intcp, id_tbl_anamnesis, username, id_tbl_periodontal_examination, name_option_intcp, code_intcp, nt_intcp, observation_option_intcp, flag_option_intcp, create_user_id, create_time, update_user_id, update_time', 'safe', 'on'=>'search'),
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
			'idTblPeriodontalExamination' => array(self::BELONGS_TO, 'PeriodontalExamination', 'id_tbl_periodontal_examination'),
			'username0' => array(self::BELONGS_TO, 'PeriodontalExamination', 'username'),
			'idTblAnamnesis' => array(self::BELONGS_TO, 'PeriodontalExamination', 'id_tbl_anamnesis'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_intcp' => 'Id Tbl Intcp',
			'id_tbl_anamnesis' => 'Id Tbl Anamnesis',
			'username' => 'Username',
			'id_tbl_periodontal_examination' => 'Id Tbl Periodontal Examination',
			'name_option_intcp' => 'Name Option Intcp',
			'code_intcp' => 'Code Intcp',
			'nt_intcp' => 'Nt Intcp',
			'observation_option_intcp' => 'Observation Option Intcp',
			'flag_option_intcp' => 'Flag Option Intcp',
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

		$criteria->compare('id_tbl_intcp',$this->id_tbl_intcp);
		$criteria->compare('id_tbl_anamnesis',$this->id_tbl_anamnesis);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('id_tbl_periodontal_examination',$this->id_tbl_periodontal_examination);
		$criteria->compare('name_option_intcp',$this->name_option_intcp,true);
		$criteria->compare('code_intcp',$this->code_intcp,true);
		$criteria->compare('nt_intcp',$this->nt_intcp,true);
		$criteria->compare('observation_option_intcp',$this->observation_option_intcp,true);
		$criteria->compare('flag_option_intcp',$this->flag_option_intcp);
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
	 * @return Intcp the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
