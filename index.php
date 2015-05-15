<?php include('header.php'); ?>

<div class="share">
	<a href="https://www.facebook.com/dialog/share?app_id=<?php echo $facebook_app_id; ?>&display=popup&href=<?php echo $url; ?>&redirect_uri=<?php echo $url; ?>" class="facebook" onclick="javascript:window.open(this.href, \'\', \'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600\');return false;"><i class="fa fa-facebook"></i></a>
	<a href="https://twitter.com/intent/tweet?url=<?php echo $url; ?>&amp;hashtag=dkpol15&amp;text=<?php echo $name . ' - ' . $message; ?>" class="twitter" onclick="javascript:window.open(this.href, \'\', \'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600\');return false;"><i class="fa fa-twitter"></i></a>
	<a href="https://pinterest.com/pin/create/button/?url=<?php echo $url; ?>&media=<?php echo $img; ?>&description=<?php echo $name . ' - ' . $message; ?> via <?php echo $url; ?>" count-layout="horizontal" class="pinterest" onclick="javascript:window.open(this.href, \'\', \'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600\');return false;"><i class="fa fa-pinterest"></i></a>
	<a href="mailto:?subject=<?php echo $name . ' - ' . $message; ?>" class="email"><i class="fa fa-envelope"></i></a>
	<a href="https://plus.google.com/share?url=<?php echo $url; ?>" class="more" onclick="javascript:window.open(this.href, \'\', \'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600\');return false;"><i class="fa fa-plus"></i></a>
</div>

<section>
  <article>
    <div class="inner">
      <div class="group">
       <span class="batch" style="background-color:<?php echo $pol_color[$pol_arr[$pol[0]]['parti']]; ?>;border-color:<?php echo $pol_color[$pol_arr[$pol[1]]['parti']]; ?>;color:<?php echo $pol_color[$pol_arr[$pol[2]]['parti']]; ?>;">X</span>
        <div class="item">
          <img src="assets/img/pol/<?php echo str_replace($replace, $with, strtolower($pol_arr[$pol[0]]['first'] . $pol_arr[$pol[0]]['last'])) . '_01.png'; ?>" />
        </div>
        <div class="item">
          <img src="assets/img/pol/<?php echo str_replace($replace, $with, strtolower($pol_arr[$pol[1]]['first'] . $pol_arr[$pol[1]]['last'])) . '_02.png'; ?>" />
        </div>
        <div class="item">
          <img src="assets/img/pol/<?php echo str_replace($replace, $with, strtolower($pol_arr[$pol[2]]['first'] . $pol_arr[$pol[2]]['last'])) . '_03.png'; ?>" />
        </div>
      </div>
      <h1><?php echo $name; ?></h1>
      <h2><?php echo $message; ?></h2>
      <p class="action">
      	Er du ikke enig med <span><?php echo $name; ?></span>? <a href="?pol=<?php echo rand(0,count($pol_arr)-1) . ',' . rand(0,count($pol_arr)-1) . ',' . rand(0,count($pol_arr)-1) . '&q=' . rand(0,count($pol_citat[0])-1) . ',' . rand(0,count($pol_citat[1])-1) . ',' . rand(0,count($pol_citat[2])-1); ?>" class="btn" title="Find ny folketingskandidat">Find en ny kandidat</a>
      </p>
    </div>
  </article>
</section>

<?php include('footer.php'); ?>
