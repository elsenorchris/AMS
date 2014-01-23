<!DOCTYPE html>
<html lang="en">
<head><!--Begin Head -->
	<?php include "header.php" ?>
</head>
<!--End Head -->

<!--Begin Body -->
<body>
	<div class"container">

<br><br>
	
	<div class="row ">

	<div class="clearfix mosaicflow marginm container">
    <?
$i=3;
while($i!=18)
    {$i=(string)$i;
    	echo '
    <div class="mosaicflow__item">
       <a href=""><img data-toggle="modal" data-target="#';
       echo $i;
       echo '" data-dismiss="modal" src="images/nicaragua/Nicaragua';
       echo $i;
       echo '.jpg"></a>
    </div>';
    $i++;} ?>
     </div>
	</div>
	 

	<div class="row">
	<div class="col-md-offset-5 col-sm-offset-5 col-xs-offset-5">
	<button style="margin:30px;" data-toggle="modal" data-target="#myModal" type="button" class="btn-lg btn-default" data-dismiss="modal">
	Caption</button>
 
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Nicaragua</h4>
      </div>
      <div class="modal-body">
       <p>My mother is orginally from a small town in Nicaragua called Presillas, where there about 1,000 inhabitants and my grandmother was one of the original settlers of the town. I decided to go back with a photojournalist friend and explore the other side of the country as well. We backpacked from the South East coast to the North West of Nicaragua and everything in between.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

<?
$i=3;
while($i!=18)
    {$i=(string)$i;
    	echo '
<div class="modal fade" id="';
echo $i;
echo '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Nicaragua</h4>
      </div>
      <div class="modal-body">
       <img class="img-responsive" src="images/nicaragua/Nicaragua';
       echo $i;
       echo '.jpg">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>';
$i++;} ?>
	
		</div></div>
	<!-- end slideshow div -->


	</div><!--closes wrapper -->
	<?php include "footer.php" ?>
</body>
</html>