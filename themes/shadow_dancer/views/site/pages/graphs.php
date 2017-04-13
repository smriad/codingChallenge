<?php
$baseUrl = Yii::app()->theme->baseUrl; 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile('http://www.google.com/jsapi');
$cs->registerCoreScript('jquery');
$cs->registerScriptFile($baseUrl.'/js/jquery.gvChart-1.0.1.min.js');
$cs->registerScriptFile($baseUrl.'/js/pbs.init.js');
  
$this->pageTitle=Yii::app()->name . ' - Graphs & Charts';
$this->breadcrumbs=array(
	'Graphs & Charts',
);
?>
<h1>Graphs & Charts</h1>

<?php



              
$sql = "select sum(bill_amount) as total_bill,MONTHNAME(created_time) as month from tbl_movements group by MONTH(created_time)";

$command = Yii::app()->db->createCommand($sql);
$result = $command->queryAll();

$this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>'<span class="icon icon-chart_bar">Departmentwise Monthly Vechile Usages</span>',
));
?>
<div class="chart1">
    <div>
        <div class="text">
            <table class="myChart">
                <thead>
                	
                	  <tr>
                	  	  <th></th>
                	  	<?php 
                	foreach($result as $item=>$val)
                	{
                		echo "<th>".$val['month']."</th>";
                		
                	}
                	
                	?>
                  
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th>Sales</th>
                        <?php
                        foreach($result as $item=>$val)
                				{
                					echo "<td>".$val['total_bill']."</td>";
                		
			                	}
			                	?>
                    </tr>
                    
                </tbody>
            </table>
            
            
        </div>
    </div>
</div>
<?php $this->endWidget();?>
<div class="container showgrid">
<div class="span-12" >
<?php


              
$sql = "SELECT dept_name,user_name FROM tbl_requisitions";

$command = Yii::app()->db->createCommand($sql);
$result = $command->queryAll();

$this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>'<span class="icon icon-chart_pie" style="width:395px !important; ">Pie Chart [Departmentwise Monthly Requisition]</span>',
));
?>






<div class="chart2">
<div>
        <div class="text">
            <table class="myChart">
                <thead>
                    <tr>
                    
                    
                    
              <th></th>
                          <?php 
                    foreach($result as $item=>$val)
                    {
                        echo "<th>".$val['dept_name']."</th>";
                        
                    }
                    
                    ?>
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
<div class="span-11 last">
<?php
$this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>'<span class="icon icon-chart_bar">Line Chart</span>',
));
?>
<div class="chart3">
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
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th>Quotes</th>
                        <td>39523</td>
                        <td>26123</td>
                        <td>29031</td>
                        <td>34342</td>
                        <td>48321</td>
                        <td>42234</td>
                    </tr>
                    <tr>
                        <th>Sales</th>
                        <td>34523</td>
                        <td>22123</td>
                        <td>25031</td>
                        <td>30342</td>
                        <td>45321</td>
                        <td>46234</td>
                    </tr>
                </tbody>
            </table>
            
            
        </div>
    </div>
</div>
<?php $this->endWidget();?>
</div>
</div>
<?php
$this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>'<span class="icon icon-chart_bar">Bar Chart</span>',
));
?>
<div class="chart4">
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
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th>Sales</th>
                        <td>34523</td>
                        <td>22123</td>
                        <td>25031</td>
                        <td>30342</td>
                        <td>45321</td>
                        <td>46234</td>
                    </tr>
                    <tr>
                        <th>Quotes</th>
                        <td>39523</td>
                        <td>26123</td>
                        <td>29031</td>
                        <td>34342</td>
                        <td>48321</td>
                        <td>42234</td>
                    </tr>
                    <tr>
                        <th>Visitors<td>
                        <td>67031</td>
                        <td>10342</td>
                        <td>68321</td>
                        <td>22234</td>
                        <td>16434</td>
                    </tr>
                </tbody>
            </table>
            
            
        </div>
    </div>
</div>
<?php $this->endWidget();?>

<?php
$this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>'<span class="icon icon-chart_bar">Area Chart</span>',
));
?>
<div class="chart5">
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
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th>Sales</th>
                        <td>34523</td>
                        <td>22123</td>
                        <td>25031</td>
                        <td>30342</td>
                        <td>45321</td>
                        <td>46234</td>
                    </tr>
                    <tr>
                        <th>Quotes</th>
                        <td>39523</td>
                        <td>26123</td>
                        <td>29031</td>
                        <td>34342</td>
                        <td>48321</td>
                        <td>42234</td>
                    </tr>
                    <tr>
                        <th>Visitors<td>
                        <td>67031</td>
                        <td>10342</td>
                        <td>68321</td>
                        <td>22234</td>
                        <td>16434</td>
                    </tr>
                </tbody>
            </table>
            
            
        </div>
    </div>
</div>
<?php $this->endWidget();?>

<div class="flash-notice">
<p>This is a "static" page. You may change the content of this page
by updating the file <tt><?php echo __FILE__; ?></tt>.</p>
</div>