<?php
require_once 'conexao.php';

class bd_primeiro_acesso
{
	public function primeiroacesso($senha,$matricula){
		try{
			$pdo = conexao::getinstance();
			$sql = "UPDATE usuario SET senha = ?, pri_login = 1 WHERE matricula = ?";
			$stmt = $pdo->prepare($sql);
			$stmt->bindvalue(1,md5($senha));
			$stmt->bindvalue(2,$matricula);
			
			$att = $stmt->execute() ;

			if($att != null){
				$_SESSION['pri_login'] = $att['pri_login'];
			return $att;
			}

			}catch(PDOException $exc){
		        echo $exc->getMessage();
		}
	}
}