<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="icon" href="asset/img/logo.png">
		<link rel="shortcut icon" href="asset/img/logo.png">
		<title>RaubNet | Content</title>
        <meta name="keywords" content="raubnet,raubbeast,digital,art,future,painting">
        <meta name="description" content="Unity will succeed!" />
		<meta name="msapplication-tap-highlight" content="yes" />
        

		<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
		<link rel="stylesheet" href="css/global/global.css">
		<link rel="stylesheet" href="css/content/content.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/swiper.css">
		
        <script src="js/jquery-3.3.1.min.js"></script>
        
    </head>

<body>
    <div class="pillar" style="min-height: 100%;">
<header>
    
	

    <style>
        .content-button a{
            color: rgba(255,234,150,1);
                }
        .content-common a:link{
            color: rgba(255,234,150,1);
        }
        .content-common a:hover{
            color: rgba(255,234,150,1);
        }
        .content-button a:visited{
	       color: rgba(255,234,150,1);
                }
    </style>
    
    <?php include('subdiv/media.php');?>
    	
	 
</header>
<article>
    <section id="title">
        <p class="title">My Work</p>
    </section>
    	
    <section id="selector">
		<button class="button-first" title="First" style="border:none;"><i class="fas fa-angle-double-left"></i></button>
        <button class="button-previous" title="Previous" style="border:none;"><i class="fas fa-angle-left"></i></button>
		<div id="page-container"><ul id="pages" style='position: relative;'></ul></div>
		<d class="spacing"></d>
		<button class="button-next" title="Next" style="border:none;"><i class="fas fa-angle-right"></i></button>
		<button class="button-last" title="Latest" style="border:none;"><i class="fas fa-angle-double-right"></i></button>
        
        <section id="category" style="display:inline;position: absolute;">
<div class="select" >
     <select id="category_selection">
      <option class="category" value="1">All</option>
      <option class="category" value="2">Test Cat 2</option>
      <option class="category" value="3">Test Cat 3</option>
     </select>
    
   </div> 
    </section>
        
    </section>
    
	<section id="thumb-container">
	</section>
</article>
    </div>    
    
	
	<?php include('subdiv/E3.php');?>
	
	

	
	
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
	<script src="js/content.js"></script>
    
    <?php include('subdiv/swipe.php');?>

</body>
</html>