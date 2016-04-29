<?php
class News{
	public function fetch_all(){
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM news");
		$query->execute();

		return $query->fetchAll();
	}

	public function fetch_data($newsid){
		global $pdo;

		$query = $pdo->prepare("SELECT * FROM news WHERE newsid = ?");
		$query->bindValue(1, $newsid);
		$query->execute();

		return $query->fetch();
	}
}

?>