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

  <div class="clearfix mosaicflow container">
    <?
for($i=26;$i<30;$i++){
  $i=(string)$i;
      echo '
    <div class="mosaicflow__item">
       <a href=""><img data-toggle="modal" data-target="#';
       echo $i;
       echo '" data-dismiss="modal" src="images/Portraits/portraits';
       echo $i;
       echo '.jpg"></a>
    </div>';}?>
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
        <h4 class="modal-title" id="myModalLabel">Where the Wild Things are</h4>
      </div>
      <div class="modal-body">
    
<p>This series is an exploration into a childhood favorite: Where the Wild Things Are. I took a high fashion approach to the classic story. I made sure to keep the integrity of the story by the way the model maintains playful, young, childlike mannerisms as well as lead the monsters like a king. </p>
   </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

<?
for($i=26;$i<30;$i++){
$i=(string)$i;
      echo '
<div class="modal fade" id="';
echo $i;
echo '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Where the Wild Things Are</h4>
      </div>
      <div class="modal-body">
       <img class="img-responsive" src="images/Portraits/portraits';
       echo $i;
       echo '.jpg">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>';} ?>
  
    </div></div>
  <!-- end slideshow div -->


  </div><!--closes wrapper -->
  <?php include "footer.php" ?>
</body>
</html>