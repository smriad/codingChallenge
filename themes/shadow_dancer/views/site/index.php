<?php  
  $baseUrl = Yii::app()->theme->baseUrl; 
  $cs = Yii::app()->getClientScript();
  //$cs->registerScriptFile('http://www.google.com/jsapi');
  $cs->registerCoreScript('jquery');
  //$cs->registerScriptFile($baseUrl.'/js/jquery.gvChart-1.0.1.min.js');
  //$cs->registerScriptFile($baseUrl.'/js/pbs.init.js');
  $cs->registerCssFile($baseUrl.'/css/jquery.css');

?>

<?php $this->pageTitle=Yii::app()->name; ?>
<div class=clearfix></div>
<h4>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i> Dashboard</h4>

<div style=float:left>
	<h5 style=padding-left:30px;>Quick Links</h5>
<!--<div class="flash-error">This is an example of an error message to show you that things have gone wrong.</div>
<div class="flash-notice">This is an example of a notice message.</div> -->
<!--<div class="flash-notice">Fleet Operations Links</div>-->


<div class="span-23 showgrid">
 <?php if (Yii::app()->user->isAdmin() == ""){ ?> 
<div class="dashboardIcons span-16">
    <div class="dashIcon span-3">
        <a href="index.php?r=defects/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-write.png" alt="defects" /></a>
        <div class="dashIconText"><a href="index.php?r=defects/index">Defects</a></div>
    </div> 
   <!-- 
    <div class="dashIcon span-3">
        <a href="index.php?r=movements/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-list2.png" alt="log Entry" /></a>
        <div class="dashIconText"><a href="index.php?r=movements/index">Log Book</a></div>
    </div> -->

    <div class="dashIcon span-3">
        <a href="index.php?r=vehicles/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-car.png" alt="vehicle" /></a>
        <div class="dashIconText "><a href="index.php?r=vehicles/index">Vehicles</a></div>
    </div>
    <!--
    <div class="dashIcon span-3">
        <a href="index.php?r=fuels/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-fuel.png" alt="fuels" /></a>
        <div class="dashIconText"><a href="index.php?r=fuels/index">Fuels</a></div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-chart.png" alt="Page" /></a>
        <div class="dashIconText"><a href="index.php?r=site/page&view=reports">Reports</a></div>
    </div>
    -->
    <div class="dashIcon span-3">
        <a href="index.php?r=drivers/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-people4.png" alt="Drivers" /></a>
        <div class="dashIconText"><a href="index.php?r=drivers/index">Drivers</a></div>
    </div>
    <!--
    <div class="dashIcon span-3">
        <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-address-book.png" alt="Contacts" /></a>
        <div class="dashIconText"><a href="#">Contacts</a></div>
    </div> -->
   <!--  
    <div class="dashIcon span-3">
        <a href="index.php?r=billrates/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-tag-cash.png" alt="Bill Rates" /></a>
        <div class="dashIconText"><a href="index.php?r=billrates/index">Bill Rates</a></div>
    </div>
   
    <div class="dashIcon span-3">
        <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-recycle-bin.png" alt="Trash" /></a>
        <div class="dashIconText"><a href="#">Trash</a></div>
    </div> 
    
    <div class="dashIcon span-3">
        <a href="index.php?r=renewals/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-recycle.png" alt="Renew" /></a>
        <div class="dashIconText"><a href="index.php?r=renewals/index">Renewals</a></div>
    </div>  -->
   
    
</div>
<?php  }
 if (Yii::app()->user->isAdmin() == '1'){  
?>
<div class="dashboardIcons span-16">
    <div class="dashIcon span-3">
        <a href="index.php?r=requisitions/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-write.png" alt="requisitions" /></a>
        <div class="dashIconText"><a href="index.php?r=requisitions/index">Requisitions</a></div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="index.php?r=movements/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-list2.png" alt="log Entry" /></a>
        <div class="dashIconText"><a href="index.php?r=movements/index">Log Book</a></div>
    </div>

    <div class="dashIcon span-3">
        <a href="index.php?r=vehicles/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-car.png" alt="vehicle" /></a>
        <div class="dashIconText "><a href="index.php?r=vehicles/index">Vehicles</a></div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="index.php?r=fuels/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-fuel.png" alt="fuels" /></a>
        <div class="dashIconText"><a href="index.php?r=fuels/index">Fuels</a></div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-chart.png" alt="Page" /></a>
        <div class="dashIconText"><a href="index.php?r=site/page&view=reports">Reports</a></div>
    </div>
    
    <div class="dashIcon span-3">
        <a href="index.php?r=drivers/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-people4.png" alt="Drivers" /></a>
        <div class="dashIconText"><a href="index.php?r=drivers/index">Drivers</a></div>
    </div>
    <!--
    <div class="dashIcon span-3">
        <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-address-book.png" alt="Contacts" /></a>
        <div class="dashIconText"><a href="#">Contacts</a></div>
    </div> -->
    
    <div class="dashIcon span-3">
        <a href="index.php?r=billrates/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-tag-cash.png" alt="Bill Rates" /></a>
        <div class="dashIconText"><a href="index.php?r=billrates/index">Bill Rates</a></div>
    </div>
   <!-- 
    <div class="dashIcon span-3">
        <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-recycle-bin.png" alt="Trash" /></a>
        <div class="dashIconText"><a href="#">Trash</a></div>
    </div>  -->
    
    <div class="dashIcon span-3">
        <a href="index.php?r=renewals/index"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-recycle.png" alt="Renew" /></a>
        <div class="dashIconText"><a href="index.php?r=renewals/index">Renewals</a></div>
    </div>
   
    
</div><!-- END OF .dashIcons -->

<?php
	$sql = "SELECT count(*)  total  FROM tbl_requisitions";		
		
	$command = Yii::app()->db->createCommand($sql);				
	$result = $command->queryAll();


  $sql = "SELECT count(*) total FROM tbl_requisitions where DATE(created_time) = CURDATE()";		
		
	$command = Yii::app()->db->createCommand($sql);				
	$result1 = $command->queryAll();
	
  
  
?>
<div class=clearfix></div>
<div style=padding-left:20px;padding-top:20px;font-weight:bold;font-size:16px;>
	Total  requisitions: <?php echo  $result[0]['total']; ?>
	<br>
	Today's requisitions: <?php echo  $result1[0]['total']; ?>


<!--
<div class="span-7 last">

            Domains Used: 45/100
			<?php
			$this->widget('zii.widgets.jui.CJuiProgressBar', array(
				'value'=>45,
				'htmlOptions'=>array(
					'style'=>'height:10px;',
					'class'=>'shadowprogressbar'
				),
			));
			?>
            <br />
            Space Used: 95%
            <?php
			$this->widget('zii.widgets.jui.CJuiProgressBar', array(
				'value'=>95,
				'htmlOptions'=>array(
					'style'=>'height:10px;',
					'class'=>'shadowprogressbar'
				),
			));
			?>
            <br />
            Bandwidth Used: 10%
            <?php
			$this->widget('zii.widgets.jui.CJuiProgressBar', array(
				'value'=>10,
				'htmlOptions'=>array(
					'style'=>'height:10px;',
					'class'=>'shadowprogressbar'
				),
			));
			?>
            <br />
            Conversion Rate: 25%            
            <?php
			$this->widget('zii.widgets.jui.CJuiProgressBar', array(
				'value'=>25,
				'htmlOptions'=>array(
					'style'=>'height:10px;',
					'class'=>'shadowprogressbar'
				),
			));
			?>
            <br />
            Success Rate: 55%            
            <?php
			$this->widget('zii.widgets.jui.CJuiProgressBar', array(
				'value'=>55,
				'htmlOptions'=>array(
					'style'=>'height:10px;',
					'class'=>'shadowprogressbar'
				),
			));
			?>
</div>

                
<div class="span-10">
<?php
$this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>'Pie Chart',
));
?>
<div class="chart2">
<div>
        <div class="text">
            <table class="myChart">
                <thead>
                    <tr>
                        <th></th>
                        <th>Jan</th>
                        <th>Feb</th>
                        <th>Mar</th>
                        <th>Apr</th>
                        <th>May</th>
                        <th>Jun</th>
                        <th>Jul</th>
                    </tr>
                </thead>
    
                <tbody>
                    <tr>
                      <th>Sales</th>
                      <td>3923</td>
                      <td>2923</td>
                      <td>2931</td>
                      <td>3942</td>
                      <td>4921</td>
                      <td>6934</td>
                      <td>5934</td>
                    </tr>
                    <tr>
                      <th>Quotes</th>
                      <td>3623</td>
                      <td>2623</td>
                      <td>2831</td>
                      <td>3842</td>
                      <td>4821</td>
                      <td>6534</td>
                      <td>5134</td>
                    </tr>
                    <tr>
                      <th>Visitors </th>
                        <td>3523</td>
                        <td>2223</td>
                        <td>2531</td>
                        <td>3342</td>
                        <td>4521</td>
                        <td>6234</td>
                        <td>5434</td>
                    </tr>
                </tbody>
            </table>
            
            
      </div>
  </div>
</div>
<?php $this->endWidget();?>
</div>
<div class="span-13 last">
<?php
$this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>'Line Chart',
));
?>
<?php $this->endWidget();?>
</div>
-->
<!--
<div class="flash-notice span-22 last">
<p>This is a "static" page. You may change the content of this page
by updating the file <tt><?php echo __FILE__; ?></tt>.</p>
</div>
-->
</div>

</div>
<div style=float:right;padding-right:25px;>	
	<h5 style=padding-left:0px;>Requisition Activity</h5>
<?php	

	
	  	
	 	$sql = "SELECT * FROM tbl_requisitions order by id desc limit 0,10";		
	 	
		
		$command = Yii::app()->db->createCommand($sql);				
		$result = $command->queryAll();
		
		?>
		<div class=grid-view style=padding-top:0px;padding-right:20px;> 
		<table class=items width=50% style=background-color:#B8CCE4;>
				<tr><th style=padding-left:15px;>ID</th>
				<th >BPMT Ref No</th>
				<th>Driver Pin</th>
				<th>User Pin</th>
				<th>User Name</th>
				<th>Vehicle Reg No</th>
				<th>Status</th>
				</tr>
			<?php
		foreach($result as $item=>$val)
		{
		?>
		<tr class=even><td style="padding-left:15px;border-bottom:1px solid #dedede;">
			<a href="index.php?r=requisitions/view&id=<?php echo $val['id']; ?>"><?php echo $val['id']; ?></a></td>
				<td style="border-bottom:1px solid #dedede;"><?php echo $val['bpmt_ref_no']; ?></td>
				<td style="border-bottom:1px solid #dedede;"><?php echo $val['driver_pin']; ?></td>
				<td style="border-bottom:1px solid #dedede;"><?php echo $val['user_pin']; ?></td>				
				<td style="border-bottom:1px solid #dedede;"><?php echo $val['user_name']; ?></td>								
				<td style="border-bottom:1px solid #dedede;"><?php echo $val['vehicle_reg_no']; ?></td>
				<td style="border-bottom:1px solid #dedede;"><?php 
						if($val['active']== 0)
					{
						echo "Pending";
					}
					
					else if($val['active']== 2)
					{
							echo "Approved";
					}
					
					else
					{
						echo "Not Approved";
					}
					/*
					if($val['active']== 1)
					{
					 	$this->widget('bootstrap.widgets.TbButton',array(
			        'label' => 'Approve',
			        'type' => 'primary',
			        //'buttonType'=>'submit',         
			        'size' => 'small',
			        'htmlOptions' => array(        
			        'ajax' => array(
			            'type' => 'POST',
			            'url' => $this->createUrl('requisitions/activeReq'
			                                       ),
			            'success' => 'function(data) { alert(data) }',
			      //      'data' => 'js:orderItems',
			            'processData' => false,
			    ),
			    ),
			        ));
					}
					else
					{
							$this->widget('bootstrap.widgets.TbButton',array(
			        'label' => 'Approve',
			        'type' => 'primary',
			        //'buttonType'=>'submit',         
			        'size' => 'small',
			        'htmlOptions' => array(        
			        'ajax' => array(
			            'type' => 'POST',
			            'url' => $this->createUrl('requisitions/activeReq'
			                                       ),
			            'success' => 'function(data) { alert(data) }',
			      //      'data' => 'js:orderItems',
			            'processData' => false,
			    ),
			    ),
			        ));
			    
			 
					}
					*/
					?>
				<div align="left">
    
    </div>
					</td>
	  </tr>
			
		<?php
			
		}
		?>
		
		</table>
	</div>
	
		<?php
}
		//$this->render('admin',array(
		//	'model'=>$model,
		//));
		
		    
/*    $this->widget('bootstrap.widgets.TbBox', array(
    'title' => 'Recent Requisitions',
    'headerIcon' => 'icon-home',
    'content' =>  $this->renderPartial('/requisitions/list', array('model'=>$model))));
    */

    ?>
    
    	
</div>