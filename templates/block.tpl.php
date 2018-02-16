<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>" <?php print $attributes;?>>
  	<?php print render($title_prefix); 
  		if ($block->subject) {?>
  			<h2 class="block-title"><?php print $block->subject;?></h2>
  		<?php } ?>
  	<?php print render($title_suffix);?>
	<div class="content"<?php print $content_attributes;?>>
	  	<?php print $content;?>
	</div>
</div>