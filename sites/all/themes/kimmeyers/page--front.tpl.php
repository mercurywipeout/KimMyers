<?php include ('header.tpl.inc'); ?>
<div class="main-container">
    <div class="main clearfix">

        <section class="hero">
        	<div class="content">
                <?php if (isset($node->field_hero_text['und'][0]['value'])): ?>
                    <h2><?php print $node->field_hero_text['und'][0]['value']; ?></h2>
                <?php endif ?>
                <?php print render($page['header']); ?>
            </div>
        </section>
        <section class="contact">
        	<div class="content">
                <?php print render($page['header']); ?>
            </div>
        </section>
        <section class="donate">
        	<div class="content">
                <h2>Donate Now!</h2>
                <ol>
                	<a href="https://secure.actblue.com/contribute/page/lisa-blunt-rochester-for-congress-1?amount=05 "><li><span>$</span>5</li></a>
                	<a href="https://secure.actblue.com/contribute/page/lisa-blunt-rochester-for-congress-1?amount=10"><li><span>$</span>10</li></a>
                	<a href="https://secure.actblue.com/contribute/page/lisa-blunt-rochester-for-congress-1?amount=25"><li><span>$</span>25</li></a>
                	<a href="https://secure.actblue.com/contribute/page/lisa-blunt-rochester-for-congress-1?amount=50"><li><span>$</span>50</li></a>
                </ol>
            </div>
        </section>
        <section class="about clearfix">
        	<article class="content">
        		<?php print render($page['content']); ?>
            </article>
        </section>
        <section class="feeds">
        	<div class="content">
            	<div class="news">
                	<?php print render($page['sidebar_first']); ?>
            	</div>
            	<aside>
                	<div class="twitter">
                		<h2>Twitter</h2>
                		<a href="http://twitter.com/LisaBRochester" class="handle">@LisaBRochester</a>
                		<div class="tweet">
	                		<p>The News Journal just posted this article announcing my campaign for US Congress! <a href="http://delonline.us/1N3jEVG">http://delonline.us/1N3jEVG</a></p>
	                		<span class="date">6 hours ago</span>
                		</div>
                	</div>
                	<div class="support">
                		<h2>Show Your Support</h2>
                		<p>Add your name to Lisa’s list of Facebook supporters!</p>
                		<ul>
                			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
                			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
                			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
                			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
                			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
                			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
                			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
                			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
                			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
                			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
                			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
                			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
                		</ul>
                		<a href="#" class="btn">Add Your Name &rsaquo;</a>
                	</div>
                </aside>
            </div>
        </section>
    </div>
</div>
<?php include ('footer.tpl.inc'); ?>