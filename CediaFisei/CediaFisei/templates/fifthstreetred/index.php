  <?php
 /****************************************************
#####################################################
##-------------------------------------------------##
##                 FIFTH STREET RED                ##
##-------------------------------------------------##
## Copyright = globbersthemes.com- 2013            ##
## Date      = OCTOBRE 2013                         #
## Author    = globbers                            ##
## Websites  = http://www.globbersthemes.com       ##
##                                                 ##
#####################################################
****************************************************/

 // No direct access.
defined('_JEXEC') or die;
 JHtml::_('behavior.framework', true); 
 $app = JFactory::getApplication();
 $templateparams     = $app->getTemplate(true)->params; 
 $csite_name	= $app->getCfg('sitename'); 

 ?>	 

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">	  
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >	  
 <head>		    
 <jdoc:include type="head" />  	 	    
 <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/fifthstreetred/css/tdefaut.css" type="text/css" media="all" />  
 <script type="text/javascript" src="templates/<?php echo $this->template ?>/js/jquery.js"></script>   	 
 <script type="text/javascript" src="templates/<?php echo $this->template ?>/js/superfish.js"></script>  
 <script type="text/javascript" src="templates/<?php echo $this->template ?>/js/hoverIntent.js"></script>
 <script type="text/javascript" src="templates/<?php echo $this->template ?>/js/nivo.slider.js"></script>	
 <script type="text/javascript" src="templates/<?php echo $this->template ?>/js/scroll.js"></script> 	   
 <link rel="icon" type="image/gif" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon.gif" />	
 <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'> 



 <?php 
 $facebook	=	htmlspecialchars($this->params->get('facebook')); 
 $twitter	=	htmlspecialchars($this->params->get('twitter'));
 $rss	=	htmlspecialchars($this->params->get('rss')); 

 $facebookurl	=	htmlspecialchars($this->params->get('facebookurl')); 
 $twitterurl	=	htmlspecialchars($this->params->get('twitterurl'));
 $rssurl	=	htmlspecialchars($this->params->get('rssurl')); 

?>	

 <script type="text/javascript">           
 var $j = jQuery.noConflict(); 	   
 $j(document).ready(function() {	   
 $j('.navigation ul').superfish({		
 delay:       800,                    
 animation:   {opacity:'show',height:'show'},  		
 speed:       'normal',                     
 autoArrows:  true,                        
 dropShadows: true                         
 });	   }); 	
 </script>      

 <script type="text/javascript">     
 var $j = jQuery.noConflict();      
 jQuery(document).ready(function ($){   
 $j("#slider").nivoSlider(           
 {effect: "sliceUpDown",            
 slices: 15,           
 boxCols: 8,        
 boxRows: 4,        
 animSpeed: 1000,   
 pauseTime: 5000,    
 captionOpacity: 0.5      
 }); });          
 </script>			

</head> 
 <body>
 <div class="pagewidth"> 
   <div id="sidebar">
	    <div id="deco"> </div>
			<div id="colonne">
			    <div id="sitename">	
                    <a href="index.php"><img src="templates/<?php echo $this->template ?>/images/logo.png" width="217" height="64" alt="logotype" /></a>				            		             
				</div>
				    <div id="search">				    				                
                        <jdoc:include type="modules" name="position-0" />  					
                    </div>
                         <div id="left">
	                        <jdoc:include type="modules" name="position-7" style="rounded" />
	                    </div>				
				            <div id="social-icons">
					            <?php if ($facebook == 1) { ?>
						            <div id="facebook">
                                        <a href="<?php echo $this->params->get('facebookurl'); ?>" target="_blank"></a>
						            </div>
				                <?php } ?>

                                <?php if ($twitter == 1) { ?>
						            <div id="twitter">
                                        <a href="<?php echo $this->params->get('twitterurl'); ?>" target="_blank" ></a>
					                </div>
					            <?php } ?>
        
                                <?php if ($rss == 1) { ?>
                                    <div id="rss">
						                <a href="<?php echo $this->params->get('rssurl'); ?>" target="_blank"></a>
					                </div>
					            <?php } ?>
                            </div>
            </div>				
    </div>
	    <div id="wrapper">
		    <div id="topmenu">					    
				<div class="navigation">                        	                                       
         		    <jdoc:include type="modules" name="position-1" />                    	                               
 				</div>                         												
			</div>
                <?php $menu = JSite::getMenu(); ?>            
		        <?php $lang = JFactory::getLanguage(); ?>            
		        <?php if ($menu->getActive() == $menu->getDefault($lang->getTag())) { ?>           
		        <?php if ($this->params->get( 'slidedisable' )) : ?>   <?php include "slideshow.php"; ?><?php endif; ?>           
		        <?php } ?>
                    <div id="main">				                        
                        <jdoc:include type="component" />
				    </div>
                        <div class="ftb-c">
						    <div class="ftb">
			                    <?php echo date( 'Y' ); ?>&nbsp; <?php echo $csite_name; ?>&nbsp;&nbsp;<?php require("template.php"); ?>
					        </div>
                        </div>							
		</div>
</div>
 </body>
 </html>
 