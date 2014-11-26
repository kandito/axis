<?php

class StepResultsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';
	private $_step;
	private $_userassesment;


	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
			'StepResultContext + create', //check to ensure valid project context
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'roles'=>array('admin','user'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','delete'),
				'roles'=>array('admin'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new StepResults;
		$model->idStep = $this->_step;
		$model->idUserAssesment = $this->_userassesment;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['StepResults']))
		{
			$model->attributes=$_POST['StepResults'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_step_result));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['StepResults']))
		{
			$model->attributes=$_POST['StepResults'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_step_result));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('StepResults');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new StepResults('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['StepResults']))
			$model->attributes=$_GET['StepResults'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return StepResults the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=StepResults::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param StepResults $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='step-results-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function filterStepResultContext($filterChain)
	{
		if(isset($_GET['id']) && isset($_GET['step'])) {
			$this->loadStep($_GET['step']);
			$this->loadUserassesment($_GET['id']);
		} else { 
			throw new CHttpException(403,'Must specify a assesment before performing this action.');
		}
		//complete the running of other filters and execute the requested action
		$filterChain->run();
	}

	protected function loadStep($stepId) {
		if($this->_step === null) {
			$this->_step =  Steps::model()->findByPk($stepId);
			if($this->_step === null) {
				throw new CHttpException(404,'The requested step does not exist.');
			}
		}
		return $this->_step;
	}

	protected function loadUserassesment($userAssesesmentId) {
		if($this->_userassesment === null) {
			$this->_userassesment =  UserAssesments::model()->findByPk($userAssesesmentId);
			if($this->_userassesment === null) {
				throw new CHttpException(404,'The requested assesment does not exist.');
			}
		}
		return $this->_userassesment;
	}
}
