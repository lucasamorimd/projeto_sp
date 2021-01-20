<?php
require_once 'conexao.php';

class bd_setor
{
	public function cadastraSetor(setor $setor){
		try{
			$pdo = conexao::getinstance();
			$sql = "INSERT INTO setor(coordenador,nome_setor) values(?,?)";
			$stmt = $pdo->prepare($sql);
			$stmt->bindvalue(1,$setor->getCoordenador());
			$stmt->bindvalue(2,$setor->getNomeSetor());

			return $stmt->execute();
		}catch(PDOException $exc){
	          echo $exc->getMessage();
	  }

	}
	public function listaSetor(){
		try{
			$pdo = conexao::getinstance();
			$sql = "SELECT * FROM setor";
			$stmt = $pdo->prepare($sql);
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

	public function listaSetorId($id_setor){
		try{
			$pdo = conexao::getinstance();
			$sql = "SELECT * FROM setor WHERE id_setor = ?";
			$stmt = $pdo->prepare($sql);
			$stmt->bindvalue(1,$id_setor);
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

	public function listaSetorLimit(){
		try{
			$pdo = conexao::getinstance();
			$sql = "SELECT * FROM setor ORDER BY id_setor DESC LIMIT 5";
			$stmt = $pdo->prepare($sql);
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
	public function pesquisaSetorNome($nome){
			try{
				$pdo = conexao::getinstance();
				$sql = "SELECT * FROM setor WHERE nome_setor LIKE :nome";
				$nomeA = "%".$nome."%";
				$stmt = $pdo->prepare($sql);
				$stmt->bindValue(':nome',$nomeA, PDO::PARAM_STR);
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
}