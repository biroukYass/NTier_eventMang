<?php

	$ldap_dn = "cn=".$_POST["username"].",dc=yhn,dc=local";
	$ldap_password = $_POST["password"];
	
	$ldap_con = ldap_connect("127.0.0.1");
	ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);

	if(@ldap_bind($ldap_con,$ldap_dn,$ldap_password)){
		echo "<div class='alert alert-success text-center' role='alert'>Admin LDAP Authenticated</div>";
		require "administration.php";}
	else{
		echo "<div class='col alert alert-danger text-center' role='alert'>Invalid Credential</div>";
		require "admin.php";
	}
?>