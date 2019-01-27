<script>
	jQuery( document ).ready(function() {
		jQuery('#catid').chosen('destroy');
		<?php 
			$db = JFactory::getDbo();
			$query = $db->getQuery(true);
			$query->select('id,language');
			$query->from($db->quoteName('#__k2_categories'));
			$db->setQuery($query);
			$myCatLang = $db->loadObjectList();
			foreach($myCatLang as $myCateg) {
				echo 'jQuery("#catid option[value=\''. $myCateg->id.'\']").append(" - '.$myCateg->language.'");';
			} ?>
		jQuery('#catid').chosen();
	});
</script>
