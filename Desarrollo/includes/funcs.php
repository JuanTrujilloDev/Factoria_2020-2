<?php

    function isNull($tipo_documento, $numero_documento, $nombre, $lastname, $fecha_nacimiento, $imagen_documento, $direccion, $telefono, $email, $password, $con_password, $departamento, $ciudad){


    }

    function isEmail($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL)){
			return true;
			} else {
			return false;
		}
	}
	
	function validaPassword($var1, $var2)
	{
		if (strcmp($var1, $var2) !== 0){
			return false;
			} else {
			return true;
		}
	}

    function emailExiste($email)
	{
		global $con;
		
		$stmt = $con->prepare("SELECT id FROM persona WHERE email = ? LIMIT 1");
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;
		$stmt->close();
		
		if ($num > 0){
			return true;
			} else {
			return false;	
		}
	}

    function documentoExiste($numero_documento)
	{
		global $con;
		
		$stmt = $con->prepare("SELECT id FROM persona WHERE numero_documento = ? LIMIT 1");
		$stmt->bind_param("s", $numero_documento);
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;
		$stmt->close();
		
		if ($num > 0){
			return true;
			} else {
			return false;	
		}
	}

    function hashPassword($password) 
	{
		$hash = password_hash($password, PASSWORD_DEFAULT);
		return $hash;
	}

    function resultBlock($errors){
		if(count($errors) > 0)
		{
			echo "<div id='error' class='alert alert-danger' role='alert'>
			<a href='#' onclick=\"showHide('error');\">[X]</a>
			<ul>";
			foreach($errors as $error)
			{
				echo "<li>".$error."</li>";
			}
			echo "</ul>";
			echo "</div>";
		}
	}