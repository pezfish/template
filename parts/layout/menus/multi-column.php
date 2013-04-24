<?php
	require_once("../../../base/includes/global.inc.php");
	
	$catid = 1; // only for demo purposes delete when programming
	
	
	// vars for columns
	$columns = array("col0", "col1");
	// the number of columns for the layout
	$colcount = count($columns);
	// init the column strings
	foreach ($columns as $curcol) $$curcol = "";
	
	if (!empty($menus[$catid])) {
		for ($i = 0; $i < count($menus[$catid]); $i += 2) {
			for ($j = 0; $j < $colcount; $j++) {
				$curcol = $columns[$j];
				
				if (!empty($menus[$catid][$i + $j])) {
					extract($menus[$catid][$i + $j]);
					
					$$curcol .= "<article>";
					$$curcol .= "<h5>" . htmlout($curname) . "</h5>";
					$$curcol .= "<p>" . htmlout($curdescription, true) . "</p>";
					$$curcol .= (!empty($curprice) ? "<p><strong>{$curprice}</strong></p>" : "");
					$$curcol .= "</article>";
				}
			}
		}
	} else {
		// add to first column
		${$columns[0]} = "No menu items.";
	}
?>
<section class="column">
	<?= $col0 ?>
</section>
<section class="column">
	<?= $col1 ?>	
</section>