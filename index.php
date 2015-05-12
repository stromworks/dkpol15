<?php include('header.php'); ?>
<?php require_once('pol.php'); ?>
<?php
  if( isset($_GET['pol']) ) :
    $pol = explode(',',$_GET['pol']);
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

	if( isset($_GET['q']) ) :
    $q = explode(',',$_GET['q']);
  else :
    $q[0] = rand(0,count($pol_citat[0])-1);
    $q[1] = rand(0,count($pol_citat[1])-1);
    $q[2] = rand(0,count($pol_citat[2])-1);
  endif;
  if( empty($q[0]) || $q[0] == '' ) {
    $q[0] = rand(0,count($pol_citat[0])-1);
  }
  if( empty($q[1]) || $q[1] == '' ) {
    $q[1] = rand(0,count($pol_citat[1])-1);
  }
  if( empty($q[2]) || $q[2] == '' ) {
    $q[2] = rand(0,count($pol_citat[2])-1);
  }

	if( isset($_GET['q']) ) :
    $c = explode(',',$_GET['c']);
  else :
    $c[0] = rand(0,count($pol_color)-1);
    $c[1] = rand(0,count($pol_color)-1);
  endif;
  if( empty($c[0]) || $c[0] == '' ) {
    $c[0] = rand(0,count($pol_color)-1);
  }
  if( empty($c[1]) || $c[1] == '' ) {
    $c[1] = rand(0,count($pol_color)-1);
  }
?>
<section>
  <article>
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
        <h1 style="background-color: <?php echo $pol_color[$c[0]]; ?>; border-color: <?php echo $pol_color[$c[1]]; ?>;"><?php echo $pol_arr[$pol[0]]['first'] . ' ' . $pol_arr[$pol[1]]['last'] . ' ' . $pol_arr[$pol[2]]['last']; ?></h1>
        <h2 style="background-color: <?php echo $pol_color[$c[0]]; ?>;">Jeg vil <?php echo $pol_citat[0][$q[0]] . ' med ' . $pol_citat[1][$q[1]] . ' der sikrer ' . $pol_citat[2][$q[2]]; ?></h2>
      </div>
      <p class="action">
      	Er du ikke enig med <span><?php echo $pol_arr[$pol[0]]['first'] . ' ' . $pol_arr[$pol[1]]['last'] . ' ' . $pol_arr[$pol[2]]['last']; ?></span>? <a href="?pol=<?php echo rand(0,count($pol_arr)-1) . ',' . rand(0,count($pol_arr)-1) . ',' . rand(0,count($pol_arr)-1) . '&q=' . rand(0,count($pol_citat[0])-1) . ',' . rand(0,count($pol_citat[1])-1) . ',' . rand(0,count($pol_citat[2])-1) . '&c=' . rand(0,count($pol_color)-1) . ',' . rand(0,count($pol_color)-1); ?>" class="btn" title="Find ny folketingskandidat">Find en ny kandidat</a>
      </p>
    </div>
  </article>
</section>

<?php include('footer.php'); ?>
