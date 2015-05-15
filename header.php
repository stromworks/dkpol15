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

	if( isset($_GET['q']) ) :
    $q = explode(',',$_GET['q']);
  else :
    $q[0] = rand(0,count($pol_citat[0])-1);
    $q[1] = rand(0,count($pol_citat[1])-1);
    $q[2] = rand(0,count($pol_citat[2])-1);
  endif;
  if( !isset($q[0]) ) {
    $q[0] = rand(0,count($pol_citat[0])-1);
  }
  if( !isset($q[1]) ) {
    $q[1] = rand(0,count($pol_citat[1])-1);
  }
  if( !isset($q[2]) ) {
    $q[2] = rand(0,count($pol_citat[2])-1);
  }
	
	$name = $pol_arr[$pol[0]]['first'] . ' ' . $pol_arr[$pol[1]]['last'] . ' ' . $pol_arr[$pol[2]]['last'];
	if( isset($_GET['pol']) && isset($_GET['q']) ) { 
		$url = 'http://dkpol15.dk/?pol='.$_GET['pol'].'&q='.$_GET['q']; 
	} else {
		$url = 'http://dkpol15.dk/';
	}
	$message = 'Jeg vil ' . $pol_citat[0][$q[0]] . ' med ' . $pol_citat[1][$q[1]] . ' der sikrer ' . $pol_citat[2][$q[2]];
	$facebook_app_id = '1581814212082387';
	$img = '';
?>
<!DOCTYPE html>
<html lang="da">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta property="og:title" content="<?php echo $name; ?>" />
    <meta property="og:site_name" content="dkpol15"/>
    <meta property="og:url" content="<?php echo $url; ?>" />
    <meta property="og:description" content="<?php echo $message; ?>" />
    <meta property="fb:app_id" content="<?php echo $facebook_app_id; ?>" />
    <meta property="article:author" content="https://www.stromworks.com" />
		<meta property="article:publisher" content="https://www.stromworks.com" />
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>#dkpol15</title>
    <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6964272/754368/css/fonts.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/main.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>