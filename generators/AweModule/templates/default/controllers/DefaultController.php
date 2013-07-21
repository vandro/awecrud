<?php echo "<?php\n"; ?>

class DefaultController extends Controller
{
	// Layout	
	public $layout = 'column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			//Yii::app()->getModule('general')->filtersAccescontroll,
			'postOnly + delete', // we only allow deletion via POST request
		);
	}
	
	public function actionIndex()
	{
		$this->render('index');
	}
}