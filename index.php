<!doctype html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Jonas & Christoffer</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>




<!-- Main Container -->
<div class="container"> 
  <!-- Navigation -->
  
<?php get_header();
?>
 
 
 <section style="width:100%; height:500px; background-color:white; text-align: center; margin-top: 20px;">
 <h1 style="font-size: 50px;">Kan du lide at fiske?</h1>
 
 
    
 <button class="btn" onclick="<?php echo "Hello world"; ?>">JA</button>
 
 <button class="btn" onclick="<?php echo "Hello world"; ?>">NEJ</button>

 </section>

  
  <!-- loop start -->
				<?php get_template_part( "loop" ); ?>
			<!-- loop end -->


  <!-- Footer Section -->
<?php get_footer();
?>
 
 


