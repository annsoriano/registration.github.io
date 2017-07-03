<?php 



class queryBuilder
{
	protected $pdo;

	public function __construct($pdo){
		
		$this->pdo=$pdo;

	}

	public function select($table){
		$statement=$this->pdo->prepare("Select * from {$table} LIMIT 10;");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	public function insert($table, $data){
		try{
			$statement=$this->pdo->prepare("Insert into {$table} (".join(',',array_keys($data)).")
			values (:".join(', :',array_keys($data)).")");
			$statement->execute($data);
		}catch(PDOException $e){
			return ($e->getMessage());
		}
		return 'read';
	}

	public function update($table, $data){
		try{
			$statement=$this->pdo->prepare("Update {$table} set ".join('=?, ',array_keys($data))."=? 
			where username=? and pass=?");
			array_push($data, $data['username']);
			array_push($data, $data['pass']);
			$statement->execute(array_values($data));
			'';
		}catch(Exception $e){
			return $e->getMessage();
		}
		return ('read');
	}
	public function delete($table, $data){
		try{
			$statement=$this->pdo->prepare("Delete from {$table} where username=? and pass=?");
			$statement->execute(array_values($data));
		}catch(Exception $e){
			return $e->getMessage();
		}
		return ('read');
	}

}
