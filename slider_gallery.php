<?php
include "func.php";

$arr = ReadText("files/texts/gallery.txt");
?>

<div class="slideshow-container">
	<?php
			foreach ($arr as $line) {
			$arr2 = TextExplode($line);
			    if(strlen($arr2[0])>1 && checkImage($arr2[0])){
	?>
        	<div class="mySlides fade">        	  
			  <div class="img_slide>" style="position:relative;">
					<img src="<?=$arr2[0];?>" style="width:100%">
					<a class="prev" onclick="plusSlides(-1)"><img src="img/arr_l1.png" style="box-shadow: none" onmouseover="this.src='img/arr_l.png';" 
onmouseout="this.src='img/arr_l1.png';" /></a>
					<a class="next" onclick="plusSlides(1)"><img src="img/arr_r1.png" style="box-shadow: none" onmouseover="this.src='img/arr_r.png';" 
onmouseout="this.src='img/arr_r1.png';" /></a>
				</div>
        	  <div class="text">
        	  	<p class="title"><?=$arr2[1];?></p>
        	  	<p class="text"><?=$arr2[2];?></p>
        	  </div>
        	</div>
	<?php
			    }
		}
	?>		
</div>