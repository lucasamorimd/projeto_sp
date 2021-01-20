<?php
require_once 'conexao.php';

class bd_usuario
{
	public function perfilUser($iduser){
			try{
				$pdo = conexao::getinstance();
				$sql = "SELECT * FROM usuario INNER JOIN setor ON usuario.fk_usu_id_setor = setor.id_setor WHERE matricula = ?";
				$stmt = $pdo->prepare($sql);
				$stmt->bindvalue(1,$iduser);
				$stmt->execute();
				$Clientes = array();
				while($Cliente = $stmt->fetchObject(__CLASS__)){
				    $Clientes[] = $Cliente;
				}
				return $Clientes;
			}catch (Exception $exc) {
		         echo $exc->getTraceAsString();
		    }
	}
	public function cadastraUsuario(usuario $usuario){


		try{
			$pdo = conexao::getinstance();
			$sql = "INSERT INTO usuario (matricula,nome,email,senha,perfil,pri_login,fk_usu_id_setor) VALUES(?,?,?,'bf591b2c746bc2dec7ad060d20ec087a',?,0,?)";
			$stmt = $pdo->prepare($sql);
			$stmt->bindvalue(1,$usuario->getMatricula());
			$stmt->bindvalue(2,$usuario->getNome());
			$stmt->bindvalue(3,$usuario->getEmail());
			$stmt->bindvalue(4,$usuario->getPerfil());
			$stmt->bindvalue(5,$usuario->getIdSetor());
			return $stmt->execute();

		}catch(PDOException $exc){
	          echo $exc->getMessage();
	  }
	}
	public function upfoto($foto,$matricula){

	try{
	    $pdo = conexao::getinstance();
	    $sql = "UPDATE usuario SET foto = ? WHERE matricula = ?";
	    $stmt= $pdo->prepare($sql);
	    $stmt->bindvalue(1,$foto);
	    $stmt->bindvalue(2,$matricula);
	    $perfil = $stmt->execute();
	    if($perfil == true){
	        $_SESSION['fotouser'] = $foto;
	    }else{
	        $_SESSION['fotouser'] = null;
	    }
	    return $perfil;
	}catch(PDOException $exc){
	    echo "Erro: ".$exc->getMessage();
	}
	}
}