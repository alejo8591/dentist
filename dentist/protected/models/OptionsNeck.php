<?php

/**
 * This is the model class for table "tbl_options_neck".
 *
 * The followings are the available columns in table 'tbl_options_neck':
 * @property integer $id_tbl_option_neck
 * @property integer $id_tbl_physical_examination
 * @property string $name_option_neck
 * @property integer $flag_option_neck
 * @property string $observation_option_neck
 * @property string $create_user_id
 * @property string $create_time
 * @property string $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property PhysicalExamination $idTblPhysicalExamination
 */
class OptionsNeck extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_options_neck';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tbl_physical_examination', 'required'),
			array('id_tbl_physical_examination, flag_option_neck', 'numerical', 'integerOnly'=>true),
			array('name_option_neck', 'length', 'max'=>128),
			array('create_user_id, update_user_id', 'length', 'max'=>64),
			array('observation_option_neck, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_option_neck, id_tbl_physical_examination, name_option_neck, flag_option_neck, observation_option_neck, create_user_id, create_time, update_user_id, update_time', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_option_neck' => 'Id Tbl Option Neck',
			'id_tbl_physical_examination' => 'Id Tbl Physical Examination',
			'name_option_neck' => 'Name Option Neck',
			'flag_option_neck' => 'Flag Option Neck',
			'observation_option_neck' => 'Observation Option Neck',
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

		$criteria->compare('id_tbl_option_neck',$this->id_tbl_option_neck);
		$criteria->compare('id_tbl_physical_examination',$this->id_tbl_physical_examination);
		$criteria->compare('name_option_neck',$this->name_option_neck,true);
		$criteria->compare('flag_option_neck',$this->flag_option_neck);
		$criteria->compare('observation_option_neck',$this->observation_option_neck,true);
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
	 * @return OptionsNeck the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function behaviors()
    {
        return array('ESaveRelatedBehavior' => array(
                'class' => 'application.components.ESaveRelatedBehavior')
        );
    }
}
