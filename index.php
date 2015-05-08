<?php include('header.php'); ?>

<section>
  <div class="owl-carousel">
    <?php foreach($pol_arr as $pol) : ?>
     <div class="item" style="background-image: url('<?php echo $pol_arr['img')]; ?>'">
      <h1><?php echo $pol_arr['citat')]; ?></h1>
      <div class="social">
      	<p>
      		<img src="/assets/img/twitter.png">
      		<span>
      			<?php echo $pol_arr['twitter']); ?>
      		</span>	
      	</p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<?php include('footer.php'); ?>
