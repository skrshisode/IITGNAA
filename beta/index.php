<?php
$docRoot="./";
$title="Welcome to IITGN Alumni";
$stylesheets=array('font-awesome.min','col','12cols','style','home');
include_once $docRoot."includes/_htmheader.inc";
include_once $docRoot."includes/header.inc";
?>

<article class='webpage span_12_of_12 section'>
	<div class='page-wrapper'>
		<div class='col span_8_of_12 highlights-bar'>
			<div class='image-slider'>
				<ul class='slider-list'>
				<li class='sliding-item'>
					<img src="./images/slider/conv1.jpg" alt="conv">
					<span class='ticker-note'>
						<p>First convocation - Pioneer Batch | IIT Gandhinagar</p>
					</span>
				</li>
				<li class='sliding-item'>
					<img src="./images/slider/conv2.jpg" alt="conv">
					<span class='ticker-note'>
						<p>IIT Gandhinagar</p>
					</span>
				</li>
				<li class='sliding-item'>
					<img src="./images/slider/bangalore-meetup.jpg" alt="conv">
					<span class='ticker-note'>
						<p>Bangalore Meetup</p>
					</span>
				</li>
				</ul>
			</div>
			<div class='class-notes'>
				<h1 class='h1'><i class='fa fa-comments-o'></i> What alumni say...</h1>
				<div class='note col span_10_of_12'>
					<i class='fa fa-quote-left'></i>
					<p class='para'>
					I am doing Masters of Product Development at Carnegie Mellon University. The course is very inter disciplinary and I am taking classes in business, design, entrepreneurship and engineering. Its just been a month here in Pittsburgh and the life has been very exciting - meeting new people everyday, free food cook outs and managing time with assignments, cooking, apartment setting. There is just so much different kinds of experience that you get everyday.
					</p>
					<i class='fa fa-quote-right'></i>
					<h5 class='h5 note-person'>- Pratham Shah (Btech 09 batch, Mechanical Engineering)</h5>
				</div>
				<div class='note col span_10_of_12'>
					<i class='fa fa-quote-left'></i>
					<p class='para'>
					After completing my BTech in Mechanical Engineering, I am pursuing a PhD from Caltech, Pasadena California. Broadly I am interested in computational solid mechanics and will work on quasi-continuum methods for my research. Grad school life is awesome and I have spent the past year getting acquainted with the new culture here, the course load, the work, and of course, the fun. I picked up tennis after coming here and play it regularly in addition to badminton. In general, I have a pretty good mix of a personal and social life. Thus, life is all set for lots of excitement till I graduate (if I graduate!)
					</p>
					<i class='fa fa-quote-right'></i>
					<h5 class='h5 note-person'>- Ishan Tembhekar (Btech 08 batch, Mechanical Engineering)</h5>
				</div>
				<div class='note col span_10_of_12'>
					<i class='fa fa-quote-left'></i>
					<p class='para'>
					After Yash graduated from IIT Gandhinagar last year, he joined the Strategy Group of
					Microsoft IT India. While at Microsoft, he contributed to the design and launch of the 
					Talent Management Project, as a part of the Regional Talent Hub Program, which would 
					enhance the overall productivity &efficiency of employees tremendously. Besides this, he 
					wouldcompile the monthly & quarterly Scorecard for the organization, and also coordinate & 
					develop the Rewards & Recognition Program.
					After a stint at Microsoft, Yash has now joined his family business in Textiles. Based out 
					of Ichalkaranji (a town in the state of Maharashtra), he is now learning how the company 
					functions. Going ahead, he is going to be involved in an expansion project, construction of 
					which will begin in a month’s time.
					</p>
					<i class='fa fa-quote-right'></i>
					<h5 class='h5 note-person'>- Yash Marda (Btech 08 batch)</h5>
				</div>
				<div class='note col span_10_of_12'>
					<i class='fa fa-quote-left'></i>
					<p class='para'>
					Life here is great! I get to learn a lot of new things- instruments that we read of in the books, I'm 
					getting to use them. I'm getting involved in different projects, most of which are interdisciplinary in nature, which is one of the best things at Duke! I've made friends from different places.. And I'm 
					getting to know their cultures..their way of living. In a nutshell, I'm enjoying how this place has so 
					many experiences to offer!
					</p>
					<i class='fa fa-quote-right'></i>
					<h5 class='h5 note-person'>- Aditi Dighe (Btech 09 batch, Electrical Engineering)</h5>
				</div>
			</div>
		</div>
		<div class='col span_4_of_12 side-bar'>
			<div class='alumni-login div-box'>
				<h3 class='h3'> &nbsp;<i class='fa fa-sign-in'></i>&nbsp; Alumni Login</h3>
				<form action="">
					
				</form>
			</div>
			<div class='recent-donors div-box'>
				<h3 class='h3'> &nbsp;<i class='fa fa-money'></i>&nbsp; Recent donors</h3>
			</div>
			<div class='social-feeds div-box'>
				<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FiitgnAA&amp;
width=275&amp;colorscheme=light&amp;show_faces=false&amp;stream=true&amp;header=true&amp;height=450" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:100%;" allowtransparency="true"></iframe>
			</div>
		</div>
	</div>
</article>

<script type="text/javascript">
	
	$(function(){
		var item=$('.sliding-item');
		$('.slider-list').css('width',item.length*item.width())
		var move=1;
		setInterval(function slider(){
			item.children('.ticker-note').css({'opacity':'0','left':'-80%'})
			item.animate({left:-move%(item.length)*item.width()},1000)
			item.children('.ticker-note').animate({opacity:'1',left:'0%'},2500)
			move++
		},6000);
	})
	
</script>


<?php
include_once $docRoot."includes/footer.inc";
include_once $docRoot."includes/_htmfooter.inc";
?>
