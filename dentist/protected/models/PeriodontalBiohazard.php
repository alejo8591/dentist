<?php

/**
 * This is the model class for table "tbl_periodontal_biohazard".
 *
 * The followings are the available columns in table 'tbl_periodontal_biohazard':
 * @property integer $id_tbl_periodontal_biohazard
 * @property integer $id_tbl_dental_examination
 * @property string $name_periodontal_biohazard
 * @property integer $flag_periodontal_biohazard
 * @property string $observation_periodontal_biohazard
 * @property string $create_user_id
 * @property string $create_time
 * @property string $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property DentalExamination $idTblDentalExamination
 */
class PeriodontalBiohazard extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_periodontal_biohazard';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tbl_periodontal_biohazard, id_tbl_dental_examination', 'required'),
			array('id_tbl_periodontal_biohazard, id_tbl_dental_examination, flag_periodontal_biohazard', 'numerical', 'integerOnly'=>true),
			array('name_periodontal_biohazard, create_user_id, update_user_id', 'length', 'max'=>64),
			array('observation_periodontal_biohazard, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_periodontal_biohazard, id_tbl_dental_examination, name_periodontal_biohazard, flag_periodontal_biohazard, observation_periodontal_biohazard, create_user_id, create_time, update_user_id, update_time', 'safe', 'on'=>'search'),
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
			'id_tbl_periodontal_biohazard' => 'Id Tbl Periodontal Biohazard',
			'id_tbl_dental_examination' => 'Id Tbl Dental Examination',
			'name_periodontal_biohazard' => 'Name Periodontal Biohazard',
			'flag_periodontal_biohazard' => 'Flag Periodontal Biohazard',
			'observation_periodontal_biohazard' => 'Observation Periodontal Biohazard',
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

		$criteria->compare('id_tbl_periodontal_biohazard',$this->id_tbl_periodontal_biohazard);
		$criteria->compare('id_tbl_dental_examination',$this->id_tbl_dental_examination);
		$criteria->compare('name_periodontal_biohazard',$this->name_periodontal_biohazard,true);
		$criteria->compare('flag_periodontal_biohazard',$this->flag_periodontal_biohazard);
		$criteria->compare('observation_periodontal_biohazard',$this->observation_periodontal_biohazard,true);
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
	 * @return PeriodontalBiohazard the static model class
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
