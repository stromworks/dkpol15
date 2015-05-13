<?php include('header.php'); ?>
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
