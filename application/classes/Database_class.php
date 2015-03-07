<?php

	abstract class Database
	{
		private $_connection;
		private static $_instance;
 
		/*
		Get an instance of the Database
		@return Instance
		*/
		public static function getInstance() 
		{
			/* If no instance then make one */
			if(!self::$_instance)
			{ 
				self::$_instance = new self();
			}
			return self::$_instance;
		}
 
		// Constructor
		private function __construct() 
		{
			try 
			{
				$this->_connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				$this->_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			} 
			catch(Exception $e)
			{
				die($e->getMessage());
			}
			catch(Exception $e)
			{
				throw new Exception('Nu s-a putut realiza conexiunea la baza de date!');
			}			
		}
 
		private function __clone() 
		{ 
			/* Magic method clone is empty to prevent duplication of connection */
		}
 
		/* Get PDO connection */
		public function getConnection()
		{
			return $this->_connection;
		}
	}
	
?>