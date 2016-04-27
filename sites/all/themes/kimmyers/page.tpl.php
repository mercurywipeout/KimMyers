<?php include ('header.tpl.inc'); ?>
<div class="main-container">
    <div class="main clearfix">
    
		<?php if (($hero_image)) { ?>
		<section class="hero" style="background-image: url('<?php print $hero_image; ?>');">
		</section>
		<?php } ?>
		
        <section class="main-content content">
        	<article>
				<h1><?php print $title; ?></h1>
               	<?php print render($page['content']); ?>
       		</article>
       		<?php if (($hero_image)) { ?>
       		<div class="with-hero sidebar clearfix">
       		<?php } else { ?>
       		<div class="sidebar clearfix">
       		<?php } ?>
       			<form class="clearfix" method="post" action="">
       				<h2>Join Kim</h2>
       				<p>Sign up for email alerts and stay updated on the latest campaign news.</p>
       			    <ul class="clearfix">
       			        <li>
       			        	<input id="email" type="text" name="email" required placeholder="Email" />
       			        </li>
       			        <li>
       			        	<input id="zip" type="text" name="zip" required placeholder="Zip" />
       			        </li>
       			        <input type="button" value="Join Kim" />
       			    </ul>
       			</form>
       			<div class="twitter">
       				<img src="/sites/all/themes/kimmyers/img/twitter-lg-icon.png" alt="Twitter" />
       				<h2><a href="http://twitter.com/KimForCongress" class="handle">@KimForCongress</a></h2>
       				<div class="tweet">
       					<p>Upstate NY has given so much to me & my family. I want to give back by putting NY families & jobs first. Learn more <a href="http://www.myersforcongress.com">http://www.myersforcongress.com</a>.</p>
       					<span class="date">One Day Ago</span>
       				</div>
       				<a href="http://twitter.com/KimForCongress" class="btn">Follow Kim</a>
       			</div>
       			<div class="support">
       				<h2>Show Your Support</h2>
       				<p>Add your name below to the list of those supporting Kim for Congress!</p>
       				<ul>
       					<li><a href="#"><img src="http://placehold.it/55x55" alt="" /></a></li>
       					<li><a href="#"><img src="http://placehold.it/55x55" alt="" /></a></li>
       					<li><a href="#"><img src="http://placehold.it/55x55" alt="" /></a></li>
       					<li><a href="#"><img src="http://placehold.it/55x55" alt="" /></a></li>
       					<li><a href="#"><img src="http://placehold.it/55x55" alt="" /></a></li>
       					<li><a href="#"><img src="http://placehold.it/55x55" alt="" /></a></li>
       					<li><a href="#"><img src="http://placehold.it/55x55" alt="" /></a></li>
       					<li><a href="#"><img src="http://placehold.it/55x55" alt="" /></a></li>
       					<li><a href="#"><img src="http://placehold.it/55x55" alt="" /></a></li>
       					<li><a href="#"><img src="http://placehold.it/55x55" alt="" /></a></li>
       				</ul>
       				<a href="#" class="btn">Join Kim</a>
       			</div>
       		</div>
        </section>
        
        <section class="donate clearfix">
        	<div class="content">
                <h2>Donate Now</h2>
                <p>Click an option to get started. If you’ve saved your payment information with ActBlue Express, your donation will go through immediately.</p>
                <ol>
                	<li><a href="#">$5</a></li>
                	<li><a href="#">$10</a></li>
                	<li><a href="#">$25</a></li>
                	<li><a href="#">$50</a></li>
                </ol>
            </div>
        </section>
        
    </div>
</div>
<?php include ('footer.tpl.inc'); ?>