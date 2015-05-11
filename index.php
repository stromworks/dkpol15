<?php include('header.php'); ?>
<?php require_once('pol.php'); ?>

<section>
 	<div class="inner">
 		<div class="owl-carousel-top owl-carousel">
			<?php
				shuffle($pol_arr);
				foreach($pol_arr as $pol) :
					$name = strtolower($pol);
					$polImg = str_replace($replace, $with, $name);
			?>
				<div class="item">
					<img src="assets/img/pol/<?php echo $polImg.'_01.jpg'; ?>" />
				</div>
			<?php
				endforeach;
			?>
		</div>
		<div class="owl-carousel-middle owl-carousel">
			<?php
				shuffle($pol_arr);
				foreach($pol_arr as $pol) :
					$name = strtolower($pol);
					$polImg = str_replace($replace, $with, $name);
			?>
				<div class="item">
					<img src="assets/img/pol/<?php echo $polImg.'_02.jpg'; ?>" />
				</div>
			<?php
				endforeach;
			?>
		</div>
		<div class="owl-carousel-bottom owl-carousel">
			<?php
				shuffle($pol_arr);
				foreach($pol_arr as $pol) :
					$name = strtolower($pol);
					$polImg = str_replace($replace, $with, $name);
			?>
				<div class="item">
					<img src="assets/img/pol/<?php echo $polImg.'_03.jpg'; ?>" />
				</div>
			<?php
				endforeach;
			?>
		</div>
		<h2><?php echo $pol_first[rand(0,count($pol_first)-1)] . ' ' . $pol_last[rand(0,count($pol_first)-1)] . ' ' . $pol_last[rand(0,count($pol_first)-1)]; ?></h2>
 		<h1><span><?php echo $pol_citat[rand(0,count($pol_citat)-1)]; ?></span></h1>
 	</div>
</section>

<aside>
	<div class="inner">
		<h1>#dkpol</h1>
	</div>
</aside>

<?php include('footer.php'); ?>
