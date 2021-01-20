<?php
session_start();

require_once 'conexao.php';

class bd_login
{
	public function login($matricula,$senha){
		try{
			$pdo = conexao::getinstance();
			$sql = "SELECT * FROM usuario WHERE matricula = ? AND senha = ?";
			$stmt = $pdo->prepare($sql);
			$stmt->bindvalue(1,$matricula);
			$stmt->bindvalue(2,$senha);
			$stmt->execute();
			$user = $stmt->fetch(PDO::FETCH_ASSOC);

			if ($user != NULL) {
				$_SESSION['userlogado'] = 1;
				$_SESSION['nomeuser'] = $user['nome'];
				$_SESSION['emailuser'] = $user['email'];
				$_SESSION['matriculauser'] = $user['matricula'];
				$_SESSION['perfiluser'] = $user['perfil'];
				$_SESSION['pri_login'] = $user['pri_login'];
				$_SESSION['setoruser'] = $user['fk_usu_id_setor'];
				$_SESSION['fotouser'] = $user['foto'];

			    return $user;
				 }
		} catch (Exception $exc) {
            echo "erro" . $exc->getMessage();
    	    }
		
	}

	public function logout()
	{
		
			unset(
				$_SESSION['usuerlogado'],
				$_SESSION['nomeuser'],
				$_SESSION['emailuser'],
				$_SESSION['matriculauser'],
				$_SESSION['perfiluser'],
				$_SESSION['pri_login'],
				$_SESSION['setoruser']
			);

	}
}