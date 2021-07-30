<!DOCTYPE html>
<html>
	<head>
    	<title><?php bloginfo("name"); ?></title>
    	
        <!-- Metadati -->
        <meta name="author" content="Salvatore Laisa e Mattia Moscheni">
    	<meta name="description" content="Tunzap! (beta) e' una semplice webapp gratuita che ti consente in modo rapido di creare il template di base per realizzare una nuova pagina web (o un intero sito). In pochi click avrai a disposizione le tue librerie Css e Javascript preferite, la struttura di cartelle con cui sei piu' comodo e una pagina Html gia' impostata e potrai partire subito a costruire il tuo sito!">
    	<meta name="keywords" content="tunzap, sito, web, template, html, css, javascript, js, prototipi, prototipo, webapp, application, struttura, framework, beta">
        
        <!-- Importazioni Css -->
    	<link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.3.0/bootstrap.min.css">
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:400italic&v2' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php bloginfo("stylesheet_url") ?>" type="text/css" media="screen">
        
        <!-- Favicon -->
    	<link rel="icon" href="<?php bloginfo("template_url") ?>/fav.png" type="image/png" >
		
		<!-- Pulsante +1 -->
		<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
			{lang: 'it'}
		</script>
		
		<!-- WordPress head -->
		<?php wp_head(); ?>
    </head>
	<body>
    
    <div class="bianco">
    	<div id="testata" class="container">
    		<div class="row">
            	<div id="logo" class="span7">
            		<img src="<?php bloginfo("template_url") ?>/img/logo.png" alt="<?php bloginfo("name") ?>/" width="400" height="100">
            		<h2><?php bloginfo("description"); ?></h2>
            	</div>
                <ul id="nav" class="span9">
                	<li class="span2"><a href="http://www.tunzap.com/">home<img src="<?php bloginfo("template_url") ?>/img/home.png" alt="Home" width="62" height="61"></a></li>
                	<li class="span2"><a href="http://blog.tunzap.com/about">about<img src="<?php bloginfo("template_url") ?>/img/help.png" alt="About" width="62" height="61"></a></li>
                	<li class="span2"><a href="http://blog.tunzap.com">blog<img src="<?php bloginfo("template_url") ?>/img/blog.png" alt="Blog" width="62" height="61"></a></li>
                    <li class="span2"><a href="http://blog.tunzap.com/feedback">idee?<img src="<?php bloginfo("template_url") ?>/img/blog.png" alt="Blog" width="62" height="61"></a></li>
                </ul>
            </div>
    	</div>
    </div>