<?php
include_once $docRoot."includes/apifunctions.inc";

//start the session if not started
if(is_session_started() === FALSE)
{
	session_start();
} else{
	//fall-back
}
//DB connection
?>