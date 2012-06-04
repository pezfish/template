<section id="press">
	<h1>Press</h1>
	<?
		if (!empty($articles)) {
			$delim = "";
			foreach($articles as $article) {
				extract($article);
				
				// Determine what kind of link to output.
				$curlinkout = $curlink;
				$curtarget = $curlinktarget;
				$curlinktext = (!empty($curlinktitle) ? $curlinktitle : $defaultlinktitle);
				if (!empty($curfullarticle)) {
					$curlinkout = "press-detail.php?id=$curid";
					$curtarget = "";
					$curlinktext = "Read More";
				} elseif (!empty($curpdf)) {
					$curlinkout = "/" . $pdfdir . "/$curpdf";
					$curlinktext = (!empty($curpdftitle) ? $curpdftitle : $defaultpdftitle);
					$curtarget = "_blank";
				}
				
	?>
	<article>
		<?php if (!empty($curimage)) { ?><img src="http://placehold.it/150x225/" alt="" class="right" /><?php } ?>
		<h2><?= htmlout($curtitle) ?> <span class="time"><?= date("m/d/y", $curdatestamp) ?></span></h2>
		<?= (!empty($curintro) ? "<p>" . htmlout($curintro, true) . "</p>" : "") ?>
		<div class="extra">
			<p><a href="<?= htmlout($curlinkout) ?>" target="<?= $curtarget ?>" class="more"><?= htmlout($curlinktext) ?></a></p>
		</div>
	</article>
	<?
			}
		} else {
	?>
	<article>
		<p>No press articles currently.</p>
	</article>
	<?php
		}
	?>
</section>