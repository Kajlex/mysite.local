<?php
	$mysqli = false;
	function connectDB()
	{
		global $mysqli;
		$mysqli = new mysqli("localhost", "root", "12333112", "mysite-local");
		$mysqli->query("SET NAMES 'utf-8'");
	}

	function getAllArticles()
	{
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `articles`");
		closeDB();
		return resultSetToArray($result_set);
	}

	function getArticle($id)
	{
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `articles` WHERE `id`={$id}");
		closeDB();
		return $result_set->fetch_assoc();
	}

	function getAllGuestBookComments()
	{
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `guestbook`");
		closeDB();
		return resultSetToArray($result_set);
	}

	function resultSetToArray($result_set)
	{
		$array = array();
		while (($row = $result_set->fetch_assoc()) != false) 
		{
			$array[] = $row; 
		}
		return $array;
	}

	function addGuestBookComment($name, $comment)
	{
		global $mysqli;
		connectDB();
		$success = $mysqli->query("INSERT INTO `guestbook` (`name`, `comment`) VALUES ('$name', '$comment')");
		closeDB();
		return $success;
	}

	function closeDB()
	{
		global $mysqli;
		$mysqli->close();
	}
?>