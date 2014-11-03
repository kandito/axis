<?php

/**
 * This is the model class for table "mki_step_results".
 *
 * The followings are the available columns in table 'mki_step_results':
 * @property integer $id_step_result
 * @property string $value
 * @property string $notes
 * @property string $time
 * @property string $date
 * @property string $comment
 * @property integer $id_assesment
 * @property integer $id_step
 *
 * The followings are the available model relations:
 * @property Steps $idStep
 * @property Assesments $idAssesment
 */
class StepResult extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mki_step_results';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('value', 'required'),
			array('id_assesment, id_step', 'numerical', 'integerOnly'=>true),
			array('value', 'length', 'max'=>20),
			array('notes, time, date, comment', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_step_result, value, notes, time, date, comment, id_assesment, id_step', 'safe', 'on'=>'search'),
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
			'idStep' => array(self::BELONGS_TO, 'Steps', 'id_step'),
			'idAssesment' => array(self::BELONGS_TO, 'Assesments', 'id_assesment'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_step_result' => 'Id Step Result',
			'value' => 'Value',
			'notes' => 'Notes',
			'time' => 'Time',
			'date' => 'Date',
			'comment' => 'Comment',
			'id_assesment' => 'Id Assesment',
			'id_step' => 'Id Step',
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

		$criteria->compare('id_step_result',$this->id_step_result);
		$criteria->compare('value',$this->value,true);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('id_assesment',$this->id_assesment);
		$criteria->compare('id_step',$this->id_step);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StepResult the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
