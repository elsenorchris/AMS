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
while($i!=27)
    {$i=(string)$i;
      echo '
    <div class="mosaicflow__item">
       <a href=""><img data-toggle="modal" data-target="#';
       echo $i;
       echo '" data-dismiss="modal" src="images/news/news';
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
        <h4 class="modal-title" id="myModalLabel">News</h4>
      </div>
      <div class="modal-body">
       <p>While interning at the Miami Herald, I covered a wide range of stories. One of the biggest stories I covered was the Trayvon Martin/ George Zimmerman trial where an unarmed 17-year-old Martin was shot and killed by neighborhood watch volunteer Zimmerman in an incident that sparked national debate and outrage.</p> 
    <p>The Miami Heat won their second consecutive championship during the summer, and I covered the win in the streets of Miami. I also developed my own stories like following a trapeze school and learning about the art of flying. </p>
   </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

<?
$i=1;
while($i!=27)
    {$i=(string)$i;
      echo '
<div class="modal fade" id="';
echo $i;
echo '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">News</h4>
      </div>
      <div class="modal-body">
       <img class="img-responsive" src="images/news/news';
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

	