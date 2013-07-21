<?php echo "<?php\n"; ?>

class <?php echo $this->moduleClass; ?> extends CWebModule
{

	/**
	 * @var string
	 * Contiene el tema por defecto del módulo
	 */
	public $theme = '<?php echo $this->template; ?>';

	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		Yii::app()->theme = $this->theme;

		// import the module-level models and components
		$this->setImport(array(
			'<?php echo $this->moduleID; ?>.models.*',
			'<?php echo $this->moduleID; ?>.components.*',
		));

		// Si quieres usar bootstrap en este módulo descomenta este código
		/*
		$this->configure(array(
            'preload'=>array('bootstrap'),
            'components'=>array(
                'bootstrap'=>array(
                    'class'=>'ext.bootstrap.components.Bootstrap'
                )
            )
    	));
    	$this->preloadComponents();
    	*/
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}

	/*
	*	Devuelve el nombre 
	*/
	public function getName()
	{
		return <?php echo $this->moduleClass; ?>::t('module', '<?php echo ucfirst($this->moduleID); ?>');
	}

	/*
	*	Devuelve la descripción 
	*/
	public function getDescription()
	{
		return <?php echo $this->moduleClass; ?>::t('module', 'Módulo de <?php echo $this->moduleID; ?>');
	}

	/*
	*	Devuelve la categoría (generalmente para usar en los menús)
	*/
	public function getCategory()
	{
		return <?php echo $this->moduleClass; ?>::t('module', 'Category');
	}

	/*
	*	Devuelve la versión 
	*/
	public function getVersion()
	{
		return <?php echo $this->moduleClass; ?>::t('module', '0.1 (dev)');
	}

	/*
	*	Devuelve la autor 
	*/
	public function getAuthor()
	{
		return <?php echo $this->moduleClass; ?>::t('module', '<?php echo $this->author; ?>');
	}

	/*
	*	Devuelve el mail del autor
	*/
	public function getAuthorEmail()
	{
		return <?php echo $this->moduleClass; ?>::t('module', '<?php echo $this->authorEmail; ?>');
	}

	/*
	*	Devuelve la Url del autor
	*/
	public function getAuthorUrl()
	{
		return <?php echo $this->moduleClass; ?>::t('module', '<?php echo $this->authorUrl; ?>');
	}

	/*
	*	Devuelve el icono del módulo
	*/
	public function getIcon()
	{
		return "file";
	}

    /*
	*	Devuelve parámetros editables
	*/
    public function getEditableParams()
    {
        return array(
            
        );
    }

    /*
	*	Devuelve nombre de los parámetros editables
	*/
	public function getParamsLabels()
    {
        return array(
            
        );
    }

    /*
	*	Devuelve la ruta de administración del módulo
	*/
	public function getAdminPageLink()
    {
        return '/<?php echo $this->moduleID; ?>/default/index/';
    }

    /*
	*	Devuelve las rutas a otras acciones del módulo
	*/
	public function getNavigation()
    {
    	return array(
    		array('label'=><?php echo $this->moduleClass; ?>::t('module', 'Home'), 'url'=>array('/<?php echo $this->moduleID; ?>/default/index')),    		
    	);
    }

    /*
	*	Devuelve los items que componen el menú de los modelos
	*/
	public function getMenu()
    {
	    return array(			
		);
	}

	/**
	 * @param $str
	 * @param $params
	 * @param $dic
	 * @return string
	 */
	public static function t($dic='module',$str='',$params=array()) {
		if (Yii::t("<?php echo $this->moduleClass; ?>", $str)==$str)
		    return Yii::t("<?php echo $this->moduleClass; ?>.".$dic, $str, $params);
        else
            return Yii::t("<?php echo $this->moduleClass; ?>", $str, $params);
	}
}

