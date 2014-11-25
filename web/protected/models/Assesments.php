<?php

/**
 * This is the model class for table "mki_assesments".
 *
 * The followings are the available columns in table 'mki_assesments':
 * @property integer $id_assesment
 * @property string $name
 * @property string $description
 * @property string $date
 * @property string $time
 * @property string $objectives
 * @property string $location
 * @property string $requirements
 * @property integer $id_system
 * @property integer $id_standard
 *
 * The followings are the available model relations:
 * @property Standards $idStandard
 * @property Systems $idSystem
 * @property UserAssesments[] $userAssesments
 */
class Assesments extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mki_assesments';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('id_system, id_standard', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('description, date, time, objectives, location, requirements', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_assesment, name, description, date, time, objectives, location, requirements, id_system, id_standard', 'safe', 'on'=>'search'),
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
			'idStandard' => array(self::BELONGS_TO, 'Standards', 'id_standard'),
			'idSystem' => array(self::BELONGS_TO, 'Systems', 'id_system'),
			'userAssesments' => array(self::HAS_MANY, 'UserAssesments', 'id_assesment'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_assesment' => 'ID Assesment',
			'name' => 'Nama',
			'description' => 'Deskripsi',
			'date' => 'Tanggal',
			'time' => 'Waktu',
			'objectives' => 'Tujuan',
			'location' => 'Lokasi',
			'requirements' => 'Kebutuhan',
			'id_system' => 'Sistem',
			'id_standard' => 'Standard',
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

		$criteria->compare('id_assesment',$this->id_assesment);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('objectives',$this->objectives,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('requirements',$this->requirements,true);
		$criteria->compare('id_system',$this->id_system);
		$criteria->compare('id_standard',$this->id_standard);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Assesments the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
