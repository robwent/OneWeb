<?php defined('_JEXEC') or die;
/* =====================================================================
Template:	OneWeb for Joomla 2.5						            
Author: 	Seth Warburton - Internet Inspired! - @nternetinspired 				            
Version: 	0.5 											             
Created: 	Dec 2011                                                    
Copyright:	Seth Warburton - (C) 2011 - All rights reserved		
License:	GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html							             
Sources:	http://html5boilerplate.com/
			http://stuffandnonsense.co.uk/projects/320andup/
			http://construct-framework.com/					
/* ===================================================================== */

// Load template logic
include_once (dirname(__FILE__).DS.'functions/logic.php');  
?>
<!doctype html>
<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
<jdoc:include type="head" />
</head>

<body class="<?php echo htmlspecialchars($bodyFontFamily); ?> clearfix">

<div id="logoRow">
    <div class="container">
         <div class="row clearfix">
         	<a href="<?php echo $this->baseurl ?>/" title="<?php echo htmlspecialchars($app->getCfg('sitename'));?>">
            	<header id="logo" class="<?php echo htmlspecialchars($logoCols); ?>col">	
                    <div id="logotext"><?php echo htmlspecialchars($app->getCfg('sitename'));?></div>     
             	</header>
             </a> 
              <?php if ($tagline > 0) : ?>
                    <div id="tagline" class="<?php echo htmlspecialchars($taglineCols); ?>col">
                        <jdoc:include type="modules" name="tagline" style="html5" />
                    </div>
              <?php endif; ?>	
                
              <?php if ($search > 0) : ?>
                  <div role="search" id="search" class="<?php echo htmlspecialchars($searchCols); ?>col last">
                      <jdoc:include type="modules" name="search" style="html5" />
                  </div>
              <?php endif; ?> 
              		
         </div>	
    </div>  
</div>

<?php if ($menu > 0) : ?>
<header id="navRow">
    <div class="container">
        <div class="row clearfix">
                  
            <div id="menuButton">
                <a id="mobileMenu" class="button mobile">Menu</a>
                    <nav id="menu" role="navigation" class="twelvecol clearfix">
                        <jdoc:include type="modules" name="menu" style="html5" />
                    </nav>
            </div>
            
        </div>
    </div>
</header>
<?php endif; ?>

<?php if ($breadcrumbs > 0) : ?>
<header id="breadcrumbRow">
    <div class="container">
        <div class="row clearfix">
                  
            <nav id="breadcrumbs" role="navigation" class="twelvecol clearfix">
                <jdoc:include type="modules" name="breadcrumbs" style="html5" />
            </nav>
            
        </div>
    </div>
</header>
<?php endif; ?>

<?php if ($bannerModules > 0) : ?>
<header id="bannerRow">
    <div class="container">
         <div class="row clearfix">
              
            <?php if ($banner1 > 0) : ?>
                <div role="banner" id="banner1" class="<?php echo htmlspecialchars($banner1Cols); ?>col">
                    <jdoc:include type="modules" name="banner1" style="html5" />
                </div>
            <?php endif; ?>	
            
            <?php if ($banner2 > 0) : ?>
                <div role="banner" id="banner2" class="<?php echo htmlspecialchars($banner2Cols); ?>col last">
                    <jdoc:include type="modules" name="banner2" style="html5" />
                </div>
            <?php endif; ?>	
            	
         </div>	
    </div>  
</header>
<?php endif; ?>

<?php if ($aboveModules > 0) : ?>
<div id="aboveRow">
      <div class="container">
          <div class="row clearfix">
              <?php if ($above1 > 0) : ?>
              <div id="above1" class="<?php echo htmlspecialchars($above1Cols); ?>col"> 
                      <jdoc:include type="modules" name="above1" style="html5" />
              </div>
              <?php endif; ?>
                                  
              <?php if ($above2 > 0) : ?>
              <div id="above2" class="<?php echo htmlspecialchars($above2Cols); ?>col">
                      <jdoc:include type="modules" name="above2" style="html5" />
              </div>
              <?php endif; ?>
                                  
              <?php if ($above3 > 0) : ?>
              <div id="above3" class="<?php echo htmlspecialchars($above3Cols); ?>col">
                      <jdoc:include type="modules" name="above3" style="html5" />
              </div>
              <?php endif; ?>
                                  
              <?php if ($above4 > 0) : ?>
              <div id="above4" class="<?php echo htmlspecialchars($above4Cols); ?>col last">
                      <jdoc:include type="modules" name="above4" style="html5" />
              </div>
              <?php endif; ?>
          </div>	
      </div>
</div>
<?php endif; ?>

<div id="mainRow">
      <div class="container">
          <div class="row clearfix">                                
                      
              <?php if ($left > 0) : ?>
              <aside id="left" class="<?php echo htmlspecialchars($leftCols); ?>col clearfix" role="complementary">
                      <jdoc:include type="modules" name="left" style="html5" />
              </aside>
              <?php endif; ?>     
              
              <div id="main" role="main" class="<?php echo htmlspecialchars($mainCols); ?>col <?php if ($right == 0) echo "last" ; ?> clearfix">
                     <jdoc:include type="message" />
              <jdoc:include type="component" />
              </div>   
              
              <?php if ($right > 0) : ?>
              <aside id="right" class="<?php echo htmlspecialchars($rightCols); ?>col last clearfix" role="complementary">
                      <jdoc:include type="modules" name="right" style="html5" />
              </aside>
              <?php endif; ?>
              
          </div>	
      </div>                			
</div>

<?php if ($belowModules > 0) : ?>
<div id="belowRow">
		<div class="container">
        	<div class="row clearfix">
				<?php if ($below1 > 0) : ?>
				<div id="below1" class="<?php echo htmlspecialchars($below1Cols); ?>col"> 
						<jdoc:include type="modules" name="below1" style="html5" />
				</div>
				<?php endif; ?>
									
				<?php if ($below2 > 0) : ?>
				<div id="below2" class="<?php echo htmlspecialchars($below2Cols); ?>col">
						<jdoc:include type="modules" name="below2" style="html5" />
				</div>
				<?php endif; ?>
									
				<?php if ($below3 > 0) : ?>
				<div id="below3" class="<?php echo htmlspecialchars($below3Cols); ?>col">
						<jdoc:include type="modules" name="below3" style="html5" />
				</div>
				<?php endif; ?>
									
				<?php if ($below4 > 0) : ?>
				<div id="below4" class="<?php echo htmlspecialchars($below4Cols); ?>col last">
						<jdoc:include type="modules" name="below4" style="html5" />
				</div>
				<?php endif; ?>
			</div>	
		</div>
</div>
<?php endif; ?>

<?php if ($bottomModules > 0) : ?>
<div id="bottomRow">
		<div class="container">
        	<div class="row clearfix">
				<?php if ($bottom1 > 0) : ?>
				<div id="bottom1" class="<?php echo htmlspecialchars($bottom1Cols); ?>col"> 
						<jdoc:include type="modules" name="bottom1" style="html5" />
				</div>
				<?php endif; ?>
									
				<?php if ($bottom2 > 0) : ?>
				<div id="bottom2" class="<?php echo htmlspecialchars($bottom2Cols); ?>col">
						<jdoc:include type="modules" name="bottom2" style="html5" />
				</div>
				<?php endif; ?>
									
				<?php if ($bottom3 > 0) : ?>
				<div id="bottom3" class="<?php echo htmlspecialchars($bottom3Cols); ?>col">
						<jdoc:include type="modules" name="bottom3" style="html5" />
				</div>
				<?php endif; ?>
									
				<?php if ($bottom4 > 0) : ?>
				<div id="bottom4" class="<?php echo htmlspecialchars($bottom4Cols); ?>col last">
						<jdoc:include type="modules" name="bottom4" style="html5" />
				</div>
				<?php endif; ?>
			</div>	
		</div>
</div>
<?php endif; ?>

<?php if ($mobileMenu > 0) : ?>
<div id="footerNav" class="mobile">
		<div class="container">
        	<div class="row clearfix">  				                
                
					<nav id="footerMenu" role="navigation" class="clearfix" >
						<jdoc:include type="modules" name="mobile-menu" style="html5" />
					</nav>
                        	               
			</div>	
		</div>
</div>
<?php endif; ?>

<?php if ($footerModules > 0) : ?>
<footer role="contentinfo">	
    	<div class="container">
        	<div class="row clearfix">
            
			<?php if ($footer1 > 0) : ?>
			<div id="footer1" class="<?php echo htmlspecialchars($footer1Cols); ?>col"> 
            	<jdoc:include type="modules" name="footer1" style="html5" />
			</div>
			<?php endif; ?>
									
			<?php if ($footer2 > 0) : ?>
			<div id="footer2" class="<?php echo htmlspecialchars($footer2Cols); ?>col">
                <jdoc:include type="modules" name="footer2" style="html5" />
			</div>
			<?php endif; ?>	
            
            <?php if ($footer3 > 0) : ?>
			<div id="footer3" class="<?php echo htmlspecialchars($footer3Cols); ?>col">
                <jdoc:include type="modules" name="footer3" style="html5" />
			</div>
			<?php endif; ?>		
            
            <?php if ($footer4 > 0) : ?>
			<div id="footer4" class="<?php echo htmlspecialchars($footer4Cols); ?>col last">
                <jdoc:include type="modules" name="footer4" style="html5" />
			</div>
			<?php endif; ?>	
            			
            </div>	
		</div>				
</footer>
<?php endif; ?>

<footer role="contentinfo">	
    	<div class="container">
        	<div class="row clearfix">      
            <div id="credit" class="last">&copy; <?php echo date("Y"); ?> <a href="http://internet-inspired.com" title="Internet Inspired - Professional Joomla! Websmithing">Internet Inspired!</a></div>
            </div>
		</div>				
</footer>

<jdoc:include type="modules" name="debug"/>

<!-- Scripts -->
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/scripts.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/plugins.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/mylibs/helper.js"></script>

<!--[if (lt IE 9) & (!IEMobile)]>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/imgsizer.js"></script>
<![endif]-->

<script>
// iOS scale bug fix
MBP.scaleFix();

// Respond.js
Modernizr.load({
	test : Modernizr.mq('all and (min-width: 0px)'),
	nope : ['<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/respond.min.js']
});
</script>

<?php if ($analytics != "UA-XXXXX-X") : ?>
<!-- http://mths.be/aab -->
<script>
var _gaq=[['_setAccount','<?php echo htmlspecialchars($analytics); ?>'],['_trackPageview']]; 
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>

<noscript>JavaScript is unavailable or disabled; so you are probably going to miss out on a few things. Everything should still work, but with a little less pzazz!</noscript>
</body>
</html>