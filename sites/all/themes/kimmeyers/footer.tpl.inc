<div class="footer-container">
    <footer class="content">
        <div class="details">
            <h3>
            	<img src="/sites/all/themes/lisablunt/img/footer-logo.png" alt="Lisa Blunt. Rochester Democrat for Congress" class="logo"/>
                <span class="visuallyhidden">Lisa Blunt. Rochester Democrat for Congress</span>
            </h3>
            <?php print render($page['footer']); ?>
        </div>
        <nav class="main">
            <?php print render($page['footer_navigation']); ?>
        </nav>
        <nav class="social">
        	<ul>
        	    <li class="twitter"><a href="<?php print $blueprintsiteinfo_twitter; ?>" target="_blank"><img src="/sites/all/themes/lisablunt/img/twitter-icon.png" alt="Twitter" /></a></li>
        	    <li class="facebook"><a href="<?php print $blueprintsiteinfo_facebook; ?>" target="_blank"><img src="/sites/all/themes/lisablunt/img/facebook-icon.png" alt="Facebook" /></a></li>
        	</ul>
        </nav>
    </footer>
</div>