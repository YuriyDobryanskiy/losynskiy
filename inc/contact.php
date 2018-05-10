<td class="contact">
	<p class="title">Feel free to <span>contact</span> me</p>
	<?php
	$file = 'files/texts/contact.txt';
	$contact = ReadText("$file");
	?>
	<p class="email_phone"><?=$contact[0];?></p>
		<div class="social">
			<ul>
				<li><a href="<?=trim($contact[1]);?>" target="_blank"><img src="img/social/fb.png"/></a></li>
				<li><a href="<?=trim($contact[2]);?>" target="_blank"><img src="img/social/vk.png"/></a></li>
				<li><a href="<?=trim($contact[3]);?>" target="_blank"><img src="img/social/tw.png"/></a></li>
				<li><a href="<?=trim($contact[4]);?>" target="_blank"><img src="img/social/g+.png"/></a></li>
			</ul>
			
			<!-- uSocial >
			<script async src="https://usocial.pro/usocial/usocial.js?v=6.1.4" data-script="usocial" charset="utf-8"></script>
			<div class="uSocial-Share" data-pid="19460b26064a21ee953d50561d1c9fd7" data-type="share" data-options="round-rect,style1,default,absolute,horizontal,size32,eachCounter0,counter0" data-social="fb,vk,twi,gPlus" data-mobile="vi,wa"></div>
			
			<style>
			.uscl-item:first-child{display:none;}
			</style-->
		</div>
		<div class="clear"></div>
</td>