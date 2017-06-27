<?php 



class queryBuilder
{
	protected $pdo;

	public function __construct($pdo)
	{
		
		$this->pdo=$pdo;
	}



	public function select($table)
	{
		$statement=$this->pdo->prepare("Select * from {$table}");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}
}



 ?>