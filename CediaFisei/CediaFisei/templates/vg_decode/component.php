<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.vg_starter
 *
 * @copyright   Copyright (C) 2013 Valentín García - http://www.valentingarcia.com.mx - All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app   = JFactory::getApplication();
$doc   = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');

// Add Stylesheets
$doc->addStyleSheet('templates/'.$this->template.'/css/template.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/joomla.css');

// Load optional rtl Bootstrap css and Bootstrap bugfixes
JHtmlBootstrap::loadCss($includeMaincss = false, $this->direction);

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<jdoc:include type="head" />
	<?php
	// Use of Google Font
	if ($this->params->get('googleFont'))
	{
	?>
		<link href='<?php echo $this->params->get('googleFontLink');?>' rel='stylesheet' type='text/css' />
		<style type="text/css">
			<?php echo $this->params->get('googleFontSelector'); ?>{
				font-family: <?php echo $this->params->get('googleFontName');?>;
			}
		</style>
	<?php
	}
	?>
	<?php
	// Template color
	if ($this->params->get('templateColor'))
	{
	?>
	<style type="text/css">
		a
		{
			color: <?php echo $this->params->get('templateColor');?>;
		}
		.navigation,
		textarea:focus, input[type="text"]:focus, 
		input[type="password"]:focus, 
		input[type="datetime"]:focus, 
		input[type="datetime-local"]:focus, 
		input[type="date"]:focus, 
		input[type="month"]:focus, 
		input[type="time"]:focus, 
		input[type="week"]:focus, 
		input[type="number"]:focus, 
		input[type="email"]:focus, 
		input[type="url"]:focus, 
		input[type="search"]:focus, 
		input[type="tel"]:focus, 
		input[type="color"]:focus, 
		.uneditable-input:focus
		{
			border-color:<?php echo $this->params->get('templateColor');?>;
		}
	</style>
	<?php
	}
	?>
<!--[if lt IE 9]>
	<script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
<![endif]-->
</head>
<body class="contentpane modal">
	<jdoc:include type="message" />
	<jdoc:include type="component" />
</body>
</html>
