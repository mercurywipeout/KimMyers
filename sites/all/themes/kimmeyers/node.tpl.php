<?php
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
	<?php if (!$page): ?>
	  <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
	<?php endif; ?>
	<?php
	  hide($content['comments']);
	  hide($content['links']);
	  hide($content['field_feature_image']);
	  print render($content);
	?>
</div>