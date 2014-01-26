<?php
$docRoot="./";
if(isset($_GET['depth'])){$docRoot=$_GET['depth'];}
$title="Welcome to IITGN Alumni";
$stylesheets=array('font-awesome.min','col','12cols','style');
include_once "./includes/_htmheader.inc";
include_once "./includes/header.inc";
?>
<article class='webpage span_12_of_12 section'>
	<div class='page-wrapper'>
		<div class='col span_3_of_12 side-bar-two'>
			<div class='side-menu'>
				<nav>
					<ul class='menu-list'>
						<li><a href="<?php echo $docRoot;?>about-us">About us</a></li>
						<li><a href="<?php echo $docRoot;?>about-us/mission-and-goals">Mission and Goals</a></li>
						<li><a href="<?php echo $docRoot;?>about-us/benefits">Benefits</a></li>
						<li><a href="<?php echo $docRoot;?>about-us/executive-committee">Executive Committee</a></li>
						<li><a href="<?php echo $docRoot;?>about-us/coordinators">Coordinators</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<article class='col span_9_of_12 highlights-bar-two'>
			<?php 
if(!isset($_GET['page'])){
print<<<_END
<div class='about-us'>
			<h1 class='h1'><i class='fa  fa-users'></i> About IITGN Alumni</h1>
			<img src="../images/iitgn.jpg" alt="IITGN" class='col span_4_of_12' style='padding:5px;float:right;box-shadow:0px 1px 5px #88b'>
			<p class='para para-indent'>
				<span class='para-start'>T</span>he IIT-GN Alumni Association came into existence in the year 2012 with the pioneer batch passing out. The executive committee of the Alumni Association has students from the Pioneer batch, which laid the basic foundation on which the Association shall grow, in years to come.
			</p>
			<p class='para para-indent'>
				The Association was established with an objective to establish a communication channel between the Alumni and Faculty, Staff, and students and to update the members about the latest happenings in the alumni circle and the college.
			</p>
			<p class='para para-indent'>
				The IITGNAA is a platform which shall help you interact with the Alumni and students and establish a mutually beneficial relationship between you and the institute. The members of the association enjoy unparalleled benefits that the association offers.
			</p>
</div>
_END;
}
else{
	switch($_GET['page']){
		case 'mission-and-goals':print<<<_END
<div class='about-us'>
			<h1 class='h1'><i class='fa  fa-road'></i> Our Mission and Goals</h1>
			<p class='para para-indent'>
				<span class='para-start'>O</span>ne of the visions laid down by IIT Gandhinagar is "to create a vibrant atmosphere that breeds front runner innovators, scientists, engineers, entrepreneurs, academicians and thinkers of tomorrow". The Association aims to involve the greatest possible number of alumni with IIT-Gandhinagar on an annual basis by creating a range of programs and services so that necessary support can be provided to the institute in achieving the college’s vision while advancing the reputation of the college by building loyalty, friendship and commitment among its members.
			</p>
			<p class='para para-indent'>
				The purpose of the IIT Gandhinagar Alumni Association is to facilitate a communication link between the Alumni of IIT-Gandhinagar and its administration, staff, faculty, students and friends.
			</p>
						<h5 class='h5'>The Association shall dedicatedly support the college by achieving the following goals:</h5>
<ul class='goals-list'>
<li>Maintain, update and manage the Alumni Records database.</li>
<li>Highlight the achievements of its alumni, and provide alumni with rewarding opportunities to serve IIT Gandhinagar, its faculty, and its students.</li>
<li>Inform alumni and friends about the college and the Association through a comprehensive communications program.</li>
<li>Support academic growth and facilities at IIT Gandhinagar and contribute to the financial stability of the college.</li>
<li>Foster lifetime involvement and commitment to the college.</li>
</ul>

</div>
_END;
	break;
		case 'benefits':print<<<_END
<div class='about-us'>
			<h1 class='h1'><i class='fa  fa-pagelines'></i> Benefits of being the member</h1>
			<p class='para para-indent'>
				<span class='para-start'>C</span>onsistent with the core values of community, education and service, the programs and services of the Alumni Association would provide its members with innumerable meaningful opportunities and benefits. Whether you are alum, friend or a student, your enthusiasm and interest in the membership shall enable the association to serve the alumni and the alma mater by offering the following benefits:
			</p>
			<ul class='goals-list'>
<li>The members of the Alumni Association, including the alumni and friends of IIT-Gandhinagar will get a chance to participate in seminars, workshops, and technical events and showcase one’s skills and/or accomplishments & meet eminent specialists.</li>
<li>The members of the Alumni Association will be regularly updated about the annual events and get-togethers.</li>
<li>They will be kept acquainted with possible Job opportunities and mutually beneficial associations with the college.</li>
<li>The Alumni Association will provide its members an access to Library, Sports Fields and Laboratory devices and equipments.</li></ul>
</div>
_END;
	break;
		case 'executive-committee':print<<<_END
<div class='about-us'>
			<h1 class='h1'><i class='fa fa-users'></i> Executive Commitee</h1>
	<ul class='exec-list'>
	<li>
		<img src="../images/committee-mem1.jpg" alt="patron" class='fig'>
		<div class='caption'>
			<h5 class='h5'>Patron</h5>
			Prof. Sudhir K Jain, Director, IIT Gandhinagar
		</div>
	</li>
	<li>
		<img src="../images/committee-mem2.jpg" alt="president" class='fig'>
		<div class='caption'>
			<h5 class='h5'>President</h5>
			Vineeth Dasaraju, BT-CH-12
		</div>
	</li>
	<li>
		<img src="../images/committee-mem3.jpg" alt="vice president" class='fig'>
		<div class='caption'>
			<h5 class='h5'>Vice President</h5>
			Tanmay Balwa, BT-CH-12
		</div>
	</li>
	<li>
		<img src="../images/committee-mem4.jpg" alt="secretary" class='fig'>
		<div class='caption'>
			<h5 class='h5'>Secretary</h5>
			Pratyul Kapoor, BT-CH-12
		</div>
	</li>
	<li>
		<img src="../images/committee-mem5.jpg" alt="joint secretary" class='fig'>
		<div class='caption'>
			<h5 class='h5'>Joint Secretary</h5>
			Rajat Jain, BT-ME-13
		</div>
	</li>
	<li>
		<img src="../images/committee-mem6.jpg" alt="joint secretary" class='fig'>
		<div class='caption'>
			<h5 class='h5'>Joint Secretary</h5>
			Ravi Agarwal, BT-ME-13
		</div>
	</li>
	<li>
		<img src="../images/committee-mem7.jpg" alt="treasurer" class='fig'>
		<div class='caption'>
			<h5 class='h5'>Treasurer</h5>
			Keshav G, BT-ME-12
		</div>
	</li>
</ul>		
</div>
_END;
	break;
		case 'coordinators':print<<<_END
<div class='about-us'>
			<h1 class='h1'><i class='fa  fa-users'></i> Coordinators</h1>
			<ul class='exec-list'>
	<li>
		<img src="../images/committee-cod1.jpg" alt="cod1" class='fig'>
		<div class='caption'>
			Sushilkumar Shisode, Junior Undergraduate
		</div>
	</li>
	<li>
		<img src="../images/committee-cod2.jpg" alt="cod2" class='fig'>
		<div class='caption'>
			Muzammil Rawoot, Sophomore
		</div>
	</li>
	<li>
		<img src="../images/committee-cod3.jpg" alt="cod3" class='fig'>
		<div class='caption'>
			Prashant Kumar, Sophomore
		</div>
	</li>
</ul>
</div>
_END;
	break;
	}
}
			?>
		</article>
	
	</div>
</article>

<?php
include_once "./includes/footer.inc";
include_once "./includes/_htmfooter.inc";
?>
