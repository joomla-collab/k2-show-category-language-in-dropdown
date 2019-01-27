<script>
	jQuery( document ).ready(function() {
		jQuery('#filter_category').chosen('destroy');
		<?php 
			$db = JFactory::getDbo();
			$query = $db->getQuery(true);
			$query->select('id,language');
			$query->from($db->quoteName('#__k2_categories'));
			$db->setQuery($query);
			$myCatLang = $db->loadObjectList();
			foreach($myCatLang as $myCateg) {
				echo 'jQuery("#filter_category option[value=\''. $myCateg->id.'\']").append(" - '.$myCateg->language.'");';
			} ?>
		jQuery('#filter_category').chosen();
	});
</script>
