<?php

/**
 * This is the model class for table "tbl_dental_pieces".
 *
 * The followings are the available columns in table 'tbl_dental_pieces':
 * @property integer $id_tbl_dental_piece
 * @property integer $id_tbl_dental_examination
 * @property integer $number_dental_piece
 * @property string $observation_dental_piece
 * @property string $create_user_id
 * @property string $create_time
 * @property string $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property DentalExamination $idTblDentalExamination
 * @property ExaminationDentalPieces[] $examinationDentalPieces
 * @property TreatmentDecisionDentalPieces[] $treatmentDecisionDentalPieces
 */
class DentalPieces extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_dental_pieces';
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
			array('id_tbl_dental_examination, number_dental_piece', 'numerical', 'integerOnly'=>true),
			array('create_user_id, update_user_id', 'length', 'max'=>64),
			array('observation_dental_piece, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tbl_dental_piece, id_tbl_dental_examination, number_dental_piece, observation_dental_piece, create_user_id, create_time, update_user_id, update_time', 'safe', 'on'=>'search'),
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
			'examinationDentalPieces' => array(self::HAS_MANY, 'ExaminationDentalPieces', 'id_tbl_dental_piece'),
			'treatmentDecisionDentalPieces' => array(self::HAS_MANY, 'TreatmentDecisionDentalPieces', 'id_tbl_dental_piece'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tbl_dental_piece' => 'Id Tbl Dental Piece',
			'id_tbl_dental_examination' => 'Id Tbl Dental Examination',
			'number_dental_piece' => 'Number Dental Piece',
			'observation_dental_piece' => 'Observation Dental Piece',
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

		$criteria->compare('id_tbl_dental_piece',$this->id_tbl_dental_piece);
		$criteria->compare('id_tbl_dental_examination',$this->id_tbl_dental_examination);
		$criteria->compare('number_dental_piece',$this->number_dental_piece);
		$criteria->compare('observation_dental_piece',$this->observation_dental_piece,true);
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
	 * @return DentalPieces the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
