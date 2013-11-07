<?php

/**
 * This is the model class for table "tbl_country".
 *
 * The followings are the available columns in table 'tbl_country':
 * @property integer $id_tbl_country
 * @property integer $country_code
 * @property string $name_country
 * @property string $postal_code
 * @property string $description
 * @property string $create_user_id
 * @property string $create_time
 * @property string $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property Anamnesis[] $anamnesises
 * @property City[] $cities
 */
class Country extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_country';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name_country', 'required'),
			array('country_code', 'numerical', 'integerOnly'=>true),
			array('name_country, postal_code', 'length', 'max'=>128),
			array('create_user_id, update_user_id', 'length', 'max'=>64),
			array('description, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_country, country_code, name_country, postal_code, description, create_user_id, create_time, update_user_id, update_time', 'safe', 'on'=>'search'),
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
			'anamnesises' => array(self::HAS_MANY, 'Anamnesis', 'id_tbl_country'),
			'cities' => array(self::HAS_MANY, 'City', 'id_tbl_country'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_country' => 'Id Tbl Country',
			'country_code' => 'Country Code',
			'name_country' => 'Name Country',
			'postal_code' => 'Postal Code',
			'description' => 'Description',
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

		$criteria->compare('id_tbl_country',$this->id_tbl_country);
		$criteria->compare('country_code',$this->country_code);
		$criteria->compare('name_country',$this->name_country,true);
		$criteria->compare('postal_code',$this->postal_code,true);
		$criteria->compare('description',$this->description,true);
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
	 * @return Country the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
