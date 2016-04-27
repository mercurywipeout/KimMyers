<?php include ('header.tpl.inc'); ?>
<div class="main-container">
    <div class="main clearfix">

        <section class="hero">
        	<div class="content clearfix">
                <form method="post" action="">
                	<h2><span class="star"></span>Join The Campaign<span class="star right"></span></h2>
                    <ul>
                        <li>
                        	<input id="email" type="text" name="email" required placeholder="Email" />
                        </li>
                        <li>
                        	<input id="zip" type="text" name="zip" required placeholder="Zip" />
                        </li>
                        <input type="button" value="Stand With Kim"/>
                    </ul>
                </form>
            </div>
        </section>
        
        <section class="donate clearfix">
        	<div class="content">
                <h2>Donate Now</h2>
                <p>Click an option to get started. If you’ve saved your payment information with ActBlue Express, your donation will go through immediately.</p>
                <ol>
                	<li><a href="https://secure.actblue.com/contribute/page/kimmyers2016?express_lane=true&amount=5&refcode=website">$5</a></li>
                	<li><a href="https://secure.actblue.com/contribute/page/kimmyers2016?express_lane=true&amount=10&refcode=website">$10</a></li>
                	<li><a href="https://secure.actblue.com/contribute/page/kimmyers2016?express_lane=true&amount=25&refcode=website">$25</a></li>
                	<li><a href="https://secure.actblue.com/contribute/page/kimmyers2016?express_lane=true&amount=50&refcode=website">$50</a></li>
                </ol>
            </div>
        </section>
        
		<?php print render($page['content']); ?>
        
        <section class="twitter clearfix">
        	<div class="content">
        		<h2><a href="http://twitter.com/KimForCongress" class="handle">@KimForCongress</a></h2>
        		<div class="tweet">
            		<p>Upstate NY has given so much to me & my family. I want to give back by putting NY families & jobs first. Learn more <a href="http://www.myersforcongress.com">http://www.myersforcongress.com</a>.</p>
            		<span class="date">One Day Ago</span>
        		</div>
        		<a href="http://twitter.com/KimForCongress" class="btn">Follow Kim</a>
        		<div class="controls">
        			<a href="#" class="arrow-left"><img src="/sites/all/themes/kimmyers/img/arrow-left.png" alt="" /></a><a href="#" class="arrow-right"><img src="/sites/all/themes/kimmyers/img/arrow-right.png" alt="" /></a>
        		</div>
        	</div>
        </section>
        
        <section class="support">
        	<div class="content">
        		<h2>Show Your Support</h2>
        		<p>Add your name to our list of supporters on Facebook.</p>
        		<ul>
        			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
        			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
        			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
        			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
        			<li><a href="#"><img src="http://placehold.it/60x60" alt="" /></a></li>
        		</ul>
        		<a href="#" class="btn">Join Kim</a>
        	</div>
        </section>

    </div>
</div>
<?php include ('footer.tpl.inc'); ?>