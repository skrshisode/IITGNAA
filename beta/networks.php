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
						<li><a href="<?php echo $docRoot;?>networks">Planet Alumni</a></li>
						<li><a href="<?php echo $docRoot;?>networks/sign-in">Sign In</a></li>
						<li><a href="<?php echo $docRoot;?>networks/make-alumni-account">Make Alumni Account</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<article class='col span_9_of_12 highlights-bar-two'>
			<?php 
if(!isset($_GET['page'])){
print<<<_END
<div class='about-us'>
			<h1 class='h1'><i class='fa  fa-globe'></i> Planet Alumni</h1>
			<p class='para para-indent'>
				<span class='para-start'>P</span>lanet alumni is unique feature which allows you to visualize your classmates on google map. It helps alumni stay connected. If you want to be part of it please join alumni association. To visualize yourself please sign in.
			</p>
</div>
_END;
}
else{
	switch($_GET['page']){
		case 'sign-in':print<<<_END
<div class='about-us'>
			<h1 class='h1'><i class='fa  fa-sign-in'></i> Sign In</h1>
			
</div>
_END;
	break;
		case 'make-alumni-account':print<<<_END
<div class='about-us'>
			<h1 class='h1'><i class='fa  fa-user'></i> Make Alumni Account</h1>
			
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
