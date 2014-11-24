<?php

/**
 * This is the model class for table "mki_systems".
 *
 * The followings are the available columns in table 'mki_systems':
 * @property integer $id_system
 * @property string $name
 * @property string $description
 * @property integer $number_of_user
 * @property string $person_in_charge
 *
 * The followings are the available model relations:
 * @property Assesments[] $assesments
 */
class Systems extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mki_systems';
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
			array('number_of_user', 'numerical', 'integerOnly'=>true),
			array('name, person_in_charge', 'length', 'max'=>50),
			array('description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_system, name, description, number_of_user, person_in_charge', 'safe', 'on'=>'search'),
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
			'assesments' => array(self::HAS_MANY, 'Assesments', 'id_system'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_system' => 'Id System',
			'name' => 'Name',
			'description' => 'Description',
			'number_of_user' => 'Number Of User',
			'person_in_charge' => 'Person In Charge',
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

		$criteria->compare('id_system',$this->id_system);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('number_of_user',$this->number_of_user);
		$criteria->compare('person_in_charge',$this->person_in_charge,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Systems the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
