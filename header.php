<?php
	header('Content-Type: text/html; charset=uft-8');
	require_once('pol.php'); 
?>
<?php
  if( isset($_GET['pol']) ) :
    $pol = explode(',',$_GET['pol']);
  else :
    $pol[0] = rand(0,count($pol_arr)-1);
    $pol[1] = rand(0,count($pol_arr)-1);
    $pol[2] = rand(0,count($pol_arr)-1);
		$pol[3] = rand(0,count($pol_citat[0])-1);
		$pol[4] = rand(0,count($pol_citat[1])-1);
		$pol[5] = rand(0,count($pol_citat[2])-1);
		$pol[6] = rand(0,count($pol_color2)-1);
		$pol[7] = rand(0,count($pol_color)-1);
  endif;
  if( !isset($pol[0]) ) {
    $pol[0] = rand(0,count($pol_arr)-1);
  }
  if( !isset($pol[1]) ) {
    $pol[1] = rand(0,count($pol_arr)-1);
  }
  if( !isset($pol[2]) ) {
    $pol[2] = rand(0,count($pol_arr)-1);
  }
  if( !isset($pol[3]) ) {
    $pol[3] = rand(0,count($pol_citat[0])-1);
  }
  if( !isset($pol[4]) ) {
    $pol[4] = rand(0,count($pol_citat[1])-1);
  }
  if( !isset($pol[5]) ) {
    $pol[5] = rand(0,count($pol_citat[2])-1);
  }
	if( !isset($pol[6]) ) {
    $pol[6] = rand(0,count($pol_color2)-1);
  }
  if( !isset($pol[7]) ) {
    $pol[7] = rand(0,count($pol_color2)-1);
  }
	
	$name = $pol_arr[$pol[0]]['first'] . ' ' . $pol_arr[$pol[1]]['last'] . ' ' . $pol_arr[$pol[2]]['last'];
	if( isset($pol) ) { 
		$url = 'http://' . $_SERVER['HTTP_HOST'] . '/?pol='.$_GET['pol']; 
	} else {
		$url = 'http://' . $_SERVER['HTTP_HOST'] . '/?pol=' . $pol[0] . ',' . $pol[1] . ',' . $pol[2] . ',' . $pol[3] . ',' . . $pol[4] . ',' . $pol[5] . ',' . $pol[6] . ',' . $pol[7] . ',';
	}
	$message = 'Jeg vil ' . $pol_citat[0][$pol[3]] . ' med ' . $pol_citat[1][$pol[4]] . ', der sikrer' . $pol_citat[2][$pol[5]];
	$facebook_app_id = '1581814212082387';
	$img_IDs = array(sprintf("%02d", $pol[0]),sprintf("%02d", $pol[1]),sprintf("%02d", $pol[2]));
	$img = 'http://' . $_SERVER['HTTP_HOST'] . '/assets/img/share/'. $img_IDs[0] .'_'. $img_IDs[1] .'_'. $img_IDs[2] .'.jpg';
	$color = $pol_color2[$pol[6]];
	$color_hover = $pol_color2[$pol[7]];
	if($pol[6] == 8) { $color_alt = '#141213'; } else { $color_alt = '#f5f5f5'; }
?>
<!DOCTYPE html>
<html lang="da">
  <head>
   
   	
<!--
                               POWERED BY                                         			

████          ████████            ████▄           ▄██████▄           ███'    ███				
g ╘.          ''▐▓▓-''             '▐▓▓─         '▓▓└ g▓▓▓█          ▓▓▓▓▄  █▓▓▓				
▓▓▓█▄           ▐▓▓               ██▓▓▀              █▀  ▓▓─         ▓▓▓▓▓▄▓▓▐▓▓				
;;▓▓▓           ▐▓▓               ╙╘▓▓▄                ▄█▓▓          ▓▓▓ ▓▓▓'▐▓▓				
▓▓▓▀`           ▐▓▓                 "▓▓=                ▀╛           ▓▓▌  "  ▐▓▓				

                             STROMWORKS.COM				 																																																
-->
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta property="og:title" content="<?php echo $name; ?>" />
    <meta property="og:site_name" content="dkpol15"/>
    <meta property="og:url" content="<?php echo $url; ?>" />
    <meta property="og:description" content="<?php echo $message; ?>" />
    <meta property="og:image" content="<?php echo $img; ?>" />
    <meta property="fb:app_id" content="<?php echo $facebook_app_id; ?>" />
    <meta property="og:type" content="article" />
    <meta property="article:author" content="http://www.stromworks.com" />
		<meta property="article:publisher" content="http://www.stromworks.com" />
   
   	<meta name="twitter:card" content="photo" />
		<meta name="twitter:site" content="@stromworks" />
		<meta name="twitter:title" content="<?php echo $name; ?>" />
		<meta name="twitter:image" content="<?php echo $img; ?>" />
    <meta name="twitter:url" content="<?php echo $url; ?>" />

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>dkpol15.dk</title>
    <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6964272/754368/css/fonts.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/main.css" />
    
    <style>
			div.share a {
				color: <?php echo $color; ?>;
			}
			div.share a:hover {
				color: <?php echo $color_hover; ?>;
			}
			div.action a {
				color: <?php echo $color_alt; ?>;
				background-color: <?php echo $color; ?>;
			}
			div.action a:hover {
				background-color: <?php echo $color_hover; ?>;
			}
		</style>
    
    <link rel="icon" type="image/png" href="favicon.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>