<?php 
	
	class Database
	{

		private static $databaseHost = "localhost";
		private static $databaseName = "selling";
		private static $databaseCharset = "utf8";
		private static $databaseUser = "root";
		private static $databasePassword = "";
		private static $connexionDatabase = null;

		public static function connect()
		//static pour dire appartient à la class et non aux instances de la class
		//quand on est dans la class, pour accéder à une propriété static, on use le mot self
		{

			try
			{
				self::$connexionDatabase = new PDO("mysql:host=".self::$databaseHost.";dbname=".self::$databaseName.";charset=".self::$databaseCharset, self::$databaseUser, self::$databasePassword);
			}
			catch(Exception $e)
			{
				die('Erreur :'.$e->getMessage());
			}
			return self::$connexionDatabase;

		}

		public static function disconnect()
		{

			self::$connexionDatabase = null;

		}

	}

	Database::connect();
?> 