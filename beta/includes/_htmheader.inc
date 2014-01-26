<?php
//include_once "./init.inc";
?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
<meta http-equiv='content-type' content='text/html;charset=utf-8' />
<meta name='viewport' content='width=device-width, initial-scale=1.0' />
<meta name="language" content="en-IN" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<link rel='shortcut icon' type='image/x-icon' href='<?php echo $docRoot;?>images/favicon.ico'/>
<script type='text/javascript' src='<?php echo $docRoot;?>js/html5shiv-printshiv.js'></script>
<script type='text/javascript' src='<?php echo $docRoot;?>js/jquery.js'></script>
<?php
if(isset($scripts))
{
	for($i=0; $i < sizeof($scripts); $i++)
	{
		print("<script type='text/javascript' src='".$docRoot."js/".$scripts[$i].".js'></script>\n");
	}
}
?>
<!--[if lt IE 9]>
<script src='<?php echo $docRoot;?>js/html5shiv.js'></script>
<![endif]-->
<link href="http://fnt.webink.com/wfs/webink.css/?project=78087605-696D-4ADE-A37F-F949474C4421&fonts=300C7DE7-E409-0B72-2814-D9E45C4BA452:f=PragmaticaSlabWeb-ExtraLight,0A9EDF84-3C0F-6CED-850E-5B1D6F2BD03D:f=CamingoWeb-Regular,8F7F4733-97B8-90AC-E0A1-FBCD4E75834E:f=AlwynNewRoundedWeb-ThinItalic,8A067107-9506-69DC-8EEA-DBC1E34CD8BB:f=DepotNewWeb-Light,9F5EBAA5-9EB3-F956-4B13-F0324C11C5AA:f=AlwynNewRoundedWeb-Light,7F6089A9-55D8-D776-0326-F0320E771CB2:f=AlwynNewRoundedWeb-Thin,96D8228E-DB0F-BF5F-BB4E-F8B2B58ACECA:f=AishaLatin-Regular,148E4F4D-6017-BD05-2FD8-483489CA5C21:f=DepotNewWeb-LightItalic,337196A3-1754-5AE5-72E9-B73F92CE156A:f=CamingoWeb-RegularItalic,8FD91968-9669-1F3F-C3C7-9CEE3760E9D7:f=MuseoSlab-300" rel="stylesheet" type="text/css"/>

<?php
if(isset($stylesheets))
{
	for($i=0; $i < sizeof($stylesheets); $i++)
	{
		print("<link type='text/css' rel='stylesheet' href='".$docRoot."css/".$stylesheets[$i].".css' />\n");
	}
}
?>

</head>
<body>

