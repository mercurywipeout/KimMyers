<div class="header-container">
    <header class="clearfix">
        <a href="/">
            <h1>
            	<img src="/sites/all/themes/lisablunt/img/logo.png" alt="Lisa Blunt. Rochester Democrat for Congress" class="logo" />
            	<span class="visuallyhidden">Lisa Blunt. Rochester Democrat for Congress</span>
            </h1>
        </a>
        <nav class="social">
            <ul>
                <li class="twitter"><a href="<?php print $blueprintsiteinfo_twitter; ?>" target="_blank"><img src="/sites/all/themes/lisablunt/img/twitter-icon.png" alt="Twitter" /></a></li>
                <li class="facebook"><a href="<?php print $blueprintsiteinfo_facebook; ?>" target="_blank"><img src="/sites/all/themes/lisablunt/img/facebook-icon.png" alt="Facebook" /></a></li>
            </ul>
        </nav>
        <nav class="main">
            <?php print render($page['navigation']); ?>
        </nav>
    </header>
</div>