<?php
/**
 * @copyright	 Copyright (C) 2013 mktgexperts.com. All rights reserved.
 * @license		 GNU General Public License version 2 or later; see http://www.gnu.org/licenses/gpl-2.0.html
 */

defined('_JEXEC') or die;
$hash = JUserHelper::genRandomPassword(6);
?>

<video id="html5av-<?php echo $hash;?>"
	<?php if ($params->get("media_preload")) echo "preload"; ?>
	<?php if ($params->get("show_player_controls")) echo "controls"; ?>
	poster="<?php echo $poster; ?>">
	<?php foreach($versionsList as $file): ?>
		<source src="<?php echo $file[0];?>" type="<?php echo $file[1];?>" />
	<?php endforeach; ?>
</video>
<script type="text/javascript">
	var v_<?php echo $hash;?> = document.getElementById("html5av-<?php echo $hash;?>");
	v_<?php echo $hash;?>.onclick = function() {
		if (v_<?php echo $hash;?>.paused) {
			v_<?php echo $hash;?>.play();
		} else {
			v_<?php echo $hash;?>.pause();
		}
	};
</script>
