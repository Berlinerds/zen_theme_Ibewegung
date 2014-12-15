<?php 
	$block = module_invoke('search', 'block', 'view', 0);
	$bloque_busqueda = $block['content'];
	$primary_links = menu_primary_links();
	$menu_principal = theme('links', $primary_links, array('class' => 'links primary-links')); 
?>

<div>
	<div id="header-logo">
		<a href="/">
			<img alt="Logo Ibewegung" src="/sites/default/files/images/logo-header.jpg" />
	    </a>
	</div>
	
	<div id="header-search-fb">
		<?php print $bloque_busqueda; ?>
	    
	    <a class="linkedin-icon" href="http://de.linkedin.com/in/eduardmartincolomer/" target="_blank">
	    	<img src="/sites/default/files/linkedin.png" title="Linkedin" />
	    </a>
	    
	    <div class="fb-like" data-href="https://www.facebook.com/iBewegung" data-layout="button_count" 
	         data-action="like" data-show-faces="false" data-share="false"></div>
	         
	    <?php print $menu_principal; ?>
	</div>

</div>