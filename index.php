<?php include('header.php'); ?>
<?php require_once('pol.php'); ?>
<?php
  if( isset($_GET['pol']) ) :
    $pol = explode('-',$_GET['pol']);
    var_dump($pol);
  else :
    $pol[0] = rand(0,count($pol_arr)-1);
    $pol[1] = rand(0,count($pol_arr)-1);
    $pol[2] = rand(0,count($pol_arr)-1);
  endif;
  if( empty($pol[0]) || $pol[0] == '' ) {
    $pol[0] = rand(0,count($pol_arr)-1);
  }
  if( empty($pol[1]) || $pol[1] == '' ) {
    $pol[1] = rand(0,count($pol_arr)-1);
  }
  if( empty($pol[2]) || $pol[2] == '' ) {
    $pol[2] = rand(0,count($pol_arr)-1);
  }
?>
<section>
  <aside>
    <div class="inner">
      <div class="group">
        <div class="item">
          <img src="assets/img/pol/<?php echo str_replace($replace, $with, strtolower($pol_arr[$pol[0]]['first'] . $pol_arr[$pol[0]]['last'])) . '_01.jpg'; ?>" />
        </div>
        <div class="item">
          <img src="assets/img/pol/<?php echo str_replace($replace, $with, strtolower($pol_arr[$pol[1]]['first'] . $pol_arr[$pol[1]]['last'])) . '_02.jpg'; ?>" />
        </div>
        <div class="item">
          <img src="assets/img/pol/<?php echo str_replace($replace, $with, strtolower($pol_arr[$pol[2]]['first'] . $pol_arr[$pol[2]]['last'])) . '_03.jpg'; ?>" />
        </div>
      </div>
    </div>
  </aside>
  <article>
    <div class="inner">
      <h1><?php echo $pol_arr[$pol[0]]['first'] . ' ' . $pol_arr[$pol[1]]['last'] . ' ' . $pol_arr[$pol[2]]['last']; ?></h1>
    </div>
  </article>
</section>

<?php include('footer.php'); ?>
