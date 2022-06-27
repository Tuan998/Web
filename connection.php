<?php
$conn = pg_connect("postgres://dlptpimddubbtw:1ce6245fa9d941030db5ecccb64c39d2457f621d029f2585b7da5d5dbd791c42@ec2-44-205-41-76.compute-1.amazonaws.com:5432/d64l5gp4nd5e3s");
	echo 'Connected Successfully!!!';
	if(!$conn)
	{
		die("Could not connect to database");
    }
    ?>