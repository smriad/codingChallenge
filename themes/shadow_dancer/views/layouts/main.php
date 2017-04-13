<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/buttons.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/icons.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/tables.css" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/mbmenu.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/mbmenu_iestyles.css" />
	

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
	<?php 
	if($this->layout!='column_pop'):
	?>
	<div id="topnav">
		<!--div class="topnav_text"><a href='#'>Home</a> | <a href=''>My Account</a> | <a href='#'>Settings</a> | <a href='/user/logout'>Logout</a> </div-->
		
        <?php
            $this->widget('zii.widgets.CMenu',array(
                'items'=>array(
                    array('label'=>'Home', 'url'=>array('/purchases/index'),'visible'=>!Yii::app()->user->isGuest,),
                    array('label'=>'My Account', 'url'=>array('/user/profile'),'visible'=>!Yii::app()->user->isGuest,),
                    array('label'=>'Logout('.Yii::app()->user->name.')', 'url'=>array('/user/logout'),'visible'=>!Yii::app()->user->isGuest,),
                ),
            ));
        ?>
        
	</div>
	<div id="header">
		<div>SmRiad</div>
		<!--<div style="float:right;color:#eee;font-size:26px;padding-right:20px;padding-top:15px;color:#fbb034;">codingChalenge - <span style=color:#13b5ea;>integrated</span> Fleet</div>-->
		<div style="float:right;color:#eee;font-size:26px;padding-right:20px;padding-top:15px;color:#13b5ea;letter-spacing:1px;font-weight:normal;">coding <span style=color:#fbb034;>Challenge </span></div>
		<div class=clearfix></div>
	</div><!-- header -->
    <!--
<?php /*$this->widget('application.extensions.mbmenu.MbMenu',array(
            'items'=>array(
                array('label'=>'Dashboard', 'url'=>array('/site/index'),'itemOptions'=>array('class'=>'test')),
                array('label'=>'Theme Pages',
                  'items'=>array(
                    array('label'=>'Graphs & Charts', 'url'=>array('/site/page', 'view'=>'graphs'),'itemOptions'=>array('class'=>'icon_chart')),
					array('label'=>'Form Elements', 'url'=>array('/site/page', 'view'=>'forms')),
					array('label'=>'Interface Elements', 'url'=>array('/site/page', 'view'=>'interface')),
					array('label'=>'Error Pages', 'url'=>array('/site/page', 'view'=>'Demo 404 page')),
					array('label'=>'Calendar', 'url'=>array('/site/page', 'view'=>'calendar')),
					array('label'=>'Buttons & Icons', 'url'=>array('/site/page', 'view'=>'buttons_and_icons')),
                  ),
                ),
                array('label'=>'Gii Generated Module',
                  'items'=>array(
                    array('label'=>'Items', 'url'=>array('/theme/index')),
                    array('label'=>'Create Item', 'url'=>array('/theme/create')),
					array('label'=>'Manage Items', 'url'=>array('/theme/admin')),
                  ),
                ),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
            ),
    )); */?> --->
	<div id="mainmenu">


		<?php
        if (Yii::app()->user->isAdmin() == '1'){
        $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Purchases', 'url'=>array('/purchases/index'),'visible'=>!Yii::app()->user->isGuest,),
    		array('label'=>'Offerings', 'url'=>array('/offerings/index'),'visible'=>!Yii::app()->user->isGuest),

		)));

        } ?>


	</div> <!--mainmenu -->

	<?php 
	endif;
	if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	<div class=clearfix></div>

	<?php echo $content; ?>

	<div id="footer">
		<div style=float:left;>
		Copyright &copy; <?php echo date('Y'); ?> smriad. All Rights Reserved.</div>
        <br />
		

		</div>
		<div class=clearfix></div>
		
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>