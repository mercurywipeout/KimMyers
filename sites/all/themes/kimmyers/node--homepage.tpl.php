<section class="about clearfix">
	<article class="content">
    	<?php print render($content['body']); ?>
    	<?php print render($content['field_read_more_link']); ?>
    </article>
</section>

<section class="photo-gallery clearfix">
	<div class="content clearfix">
		<ul class="left">
			<?php for($i=1; $i < 4; $i++): ?>  
		  	<?php if (isset($node->{'field_photo_gallery_image_'.$i}['und'][0])): ?>
				<?
				$image = "";
				$filename = $node->{'field_photo_gallery_image_'.$i}['und'][0]['uri'];
			    $image = file_create_url($filename);
				?>
			<?php endif; ?>
		    <?php if($image):?>
			<li style="background-image: url('<?php print $image; ?>');">
				<div class="overlay">
					<?php print render($content['field_photo_gallery_caption_'.$i]); ?>
				</div>
			</li>
	        <?php endif;?>
			<?php endfor; ?>
		</ul>
		<ul class="right">
			<?php for($i=4; $i < 6; $i++): ?>  
		  	<?php if (isset($node->{'field_photo_gallery_image_'.$i}['und'][0])): ?>
		  		<?
		  		$image = "";
		  		$filename = $node->{'field_photo_gallery_image_'.$i}['und'][0]['uri'];
		  	    $image = file_create_url($filename);
		  		?>
		  	<?php endif; ?>
		    <?php if($image):?>
			<li style="background-image: url('<?php print $image; ?>');">
				<div class="overlay">
					<?php print render($content['field_photo_gallery_caption_'.$i]); ?>
				</div>
			</li>
	        <?php endif;?>
		<?php endfor; ?>
		</ul>
	</div>
</section>