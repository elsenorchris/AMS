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
$i=1;
while($i!=7)
    {$i=(string)$i;
    	echo '
    <div class="mosaicflow__item">
       <a href=""><img data-toggle="modal" data-target="#';
       echo $i;
       echo '" data-dismiss="modal" src="images/misc/Misc';
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
        <h4 class="modal-title" id="myModalLabel">Misc</h4>
      </div>
      <div class="modal-body">
      <p>We traveled from Italy to Zurich, Switzerland where we go lost on the way and made friends with some Australians and Brits and finally made our way to the hotel we had made reservations at.</p>
		<p> I was able to go on an outdoor trip to North Carolina through the University of Florida where we trekked up Max Patch mountain (which is along the Appalaichan Trail.) The next day we took hot air balloons and toured a valley.</p>
	 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

<?
$i=1;
while($i!=7)
    {$i=(string)$i;
    	echo '
<div class="modal fade" id="';
echo $i;
echo '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Misc</h4>
      </div>
      <div class="modal-body">
       <img class="img-responsive" src="images/misc/Misc';
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
