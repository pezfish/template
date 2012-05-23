<section id="announcements">
	<?php
		if (!empty($announcements)) {
			foreach ($announcements as $curannouncement) {
				extract($curannouncement);
	?>
	<article>
		<?php if (!empty($curthumb)) { ?><img src="http://placehold.it/150x225/" alt="" class="right" /><?php } ?>
		<h2><?= htmlout($curtitle) ?> <span class="time"><?= date("m/d/y", $curdatestamp) ?></span></h2>
		<p><?= htmlout($curdescription, true) ?></p>
		<div class="announcement_extra">
			<a href="#<?= $curid ?>" class="more">READ MORE &raquo;</a>
			<div class="fb-like" data-href="#<?= $curid ?>" data-send="false" data-layout="button_count" data-width="55" data-show-faces="false" data-action="like"></div>
		</div>
	</article>
	<?php
			}
		} else {
			echo "None.";
		}
	?>
</section>