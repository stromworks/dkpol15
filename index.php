<?php include('header.php'); ?>

<section>
  <div class="owl-carousel">
    <?php
      foreach($pol_arr as $pol) :
    ?>
     <div class="item group" style="background-image: url('<?php echo $pol['img']; ?>')">
      <h2><?php echo $pol['navn']; ?></h2>
      <h1><span><?php echo $pol['citat']; ?></span></h1>
      <div class="social">
      	<p>
      		<!--<img src="/assets/img/twitter.svg">-->
      		<span>
      			@<?php echo $pol['twitter']; ?>
      		</span>
      	</p>
      </div>
    </div>
    <?php
      endforeach;
    ?>
  </div>
</section>

<?php include('footer.php'); ?>
