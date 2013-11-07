<?php

/**
 * This is the model class for table "tbl_options_atm_intraoral_hard_tissue".
 *
 * The followings are the available columns in table 'tbl_options_atm_intraoral_hard_tissue':
 * @property integer $id_tbl_option_atm_intraoral_hard_tissue
 * @property string $username
 * @property integer $id_tbl_anamnesis
 * @property integer $id_tbl_atm
 * @property string $name_option_atm_intraoral_hard_tissue
 * @property integer $type_option_atm_intraoral_hard_tissue
 * @property string $observation_option_hard_intraoral_hard_tissue
 * @property integer $flag_option_atm_intraoral_hard_tissue
 * @property string $create_user_id
 * @property string $create_time
 * @property string $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property Atm $idTblAtm
 * @property Atm $username0
 * @property Atm $idTblAnamnesis
 */
class OptionsAtmIntraoralHardTissue extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_options_atm_intraoral_hard_tissue';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, id_tbl_anamnesis, id_tbl_atm', 'required'),
			array('id_tbl_anamnesis, id_tbl_atm, type_option_atm_intraoral_hard_tissue, flag_option_atm_intraoral_hard_tissue', 'numerical', 'integerOnly'=>true),
			array('username, create_user_id, update_user_id', 'length', 'max'=>64),
			array('name_option_atm_intraoral_hard_tissue', 'length', 'max'=>128),
			array('observation_option_hard_intraoral_hard_tissue, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_option_atm_intraoral_hard_tissue, username, id_tbl_anamnesis, id_tbl_atm, name_option_atm_intraoral_hard_tissue, type_option_atm_intraoral_hard_tissue, observation_option_hard_intraoral_hard_tissue, flag_option_atm_intraoral_hard_tissue, create_user_id, create_time, update_user_id, update_time', 'safe', 'on'=>'search'),
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
			'idTblAtm' => array(self::BELONGS_TO, 'Atm', 'id_tbl_atm'),
			'username0' => array(self::BELONGS_TO, 'Atm', 'username'),
			'idTblAnamnesis' => array(self::BELONGS_TO, 'Atm', 'id_tbl_anamnesis'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_option_atm_intraoral_hard_tissue' => 'Id Tbl Option Atm Intraoral Hard Tissue',
			'username' => 'Username',
			'id_tbl_anamnesis' => 'Id Tbl Anamnesis',
			'id_tbl_atm' => 'Id Tbl Atm',
			'name_option_atm_intraoral_hard_tissue' => 'Name Option Atm Intraoral Hard Tissue',
			'type_option_atm_intraoral_hard_tissue' => 'Type Option Atm Intraoral Hard Tissue',
			'observation_option_hard_intraoral_hard_tissue' => 'Observation Option Hard Intraoral Hard Tissue',
			'flag_option_atm_intraoral_hard_tissue' => 'Flag Option Atm Intraoral Hard Tissue',
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

		$criteria->compare('id_tbl_option_atm_intraoral_hard_tissue',$this->id_tbl_option_atm_intraoral_hard_tissue);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('id_tbl_anamnesis',$this->id_tbl_anamnesis);
		$criteria->compare('id_tbl_atm',$this->id_tbl_atm);
		$criteria->compare('name_option_atm_intraoral_hard_tissue',$this->name_option_atm_intraoral_hard_tissue,true);
		$criteria->compare('type_option_atm_intraoral_hard_tissue',$this->type_option_atm_intraoral_hard_tissue);
		$criteria->compare('observation_option_hard_intraoral_hard_tissue',$this->observation_option_hard_intraoral_hard_tissue,true);
		$criteria->compare('flag_option_atm_intraoral_hard_tissue',$this->flag_option_atm_intraoral_hard_tissue);
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
	 * @return OptionsAtmIntraoralHardTissue the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
