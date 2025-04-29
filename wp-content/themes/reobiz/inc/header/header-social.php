<?php
global $reobiz_option;
$top_social = $reobiz_option['show-social']; ?>
<div class="header-share">
	<ul class="clearfix">

	<?php 
		if($top_social == '1'){              
		if(!empty($reobiz_option['facebook'])) { ?>
			<li> <a href="<?php echo esc_url($reobiz_option['facebook']);?>" target="_blank"> <i class="fab fa-facebook-f"></i> </a> </li>
			<?php 
		}

		if(!empty($reobiz_option['twitter'])) { ?>
			<li> <a href="<?php echo esc_url($reobiz_option['twitter']);?> " target="_blank"> <i class="fab ri-twitter-x-line"></i> </a> </li>
			<?php
		}

		if(!empty($reobiz_option['rss'])) { ?>
			<li> <a href="<?php  echo esc_url($reobiz_option['rss']);?> " target="_blank"> <i class="fas fa-rss"></i> </a> </li>
		<?php
		}

		if (!empty($reobiz_option['pinterest'])) { ?>
			<li> <a href="<?php  echo esc_url($reobiz_option['pinterest']);?> " target="_blank"> <i class="fab fa-pinterest-p"></i> </a> </li>
		<?php }

		if (!empty($reobiz_option['linkedin'])) { ?>
			<li> <a href="<?php  echo esc_url($reobiz_option['linkedin']);?> " target="_blank"> <i class="fab fa-linkedin-in"></i> </a> </li>
		<?php }

		if (!empty($reobiz_option['google'])) { ?>
			<li> <a href="<?php  echo esc_url($reobiz_option['google']);?> " target="_blank"> <i class="fab fa-google-plus-square"></i> </a> </li>
		<?php }

		if (!empty($reobiz_option['instagram'])) { ?>
			<li> <a href="<?php  echo esc_url($reobiz_option['instagram']);?> " target="_blank"> <i class="fab fa-instagram"></i> </a> </li>
		<?php }

		if(!empty($reobiz_option['vimeo'])) { ?>
			<li> <a href="<?php  echo esc_url($reobiz_option['vimeo']);?> " target="_blank"> <i class="fab fa-vimeo-v"></i> </a> </li>
		<?php }

		if (!empty($reobiz_option['tumblr'])) { ?>
			<li> <a href="<?php  echo esc_url($reobiz_option['tumblr']);?> " target="_blank"> <i class="fab fa-tumblr"></i> </a> </li>
		<?php }

		if (!empty($reobiz_option['youtube'])) { ?>
		<li> <a href="<?php  echo esc_url($reobiz_option['youtube']);?> " target="_blank"> <i class="fab fa-youtube"></i> </a> </li>
		<?php } 
	} ?>
	</ul>
</div>