<div class="footer">
	<div class="clear"></div>
	<div class="copyright">All copyrights reserved by © <span>Alexander Losinsky</span></div>
	<div class="impressum" onclick="openImpressum()"><span>impressum &darr;</span></div>

	<div class="impressum_text" id="impressum_text">
		<?php
		$file = 'files/texts/impressum.txt';
		$impressum = ReadText("$file");
		echo $impressum[0];
		?>
	</div>
</div>