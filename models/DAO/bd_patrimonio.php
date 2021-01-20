<?php
require_once 'conexao.php';

class bd_patrimonio
{
	public function cadastraPatrimonio(patrimonio $patrimonio){
		try{
			$pdo = conexao::getinstance();
			$sql = "INSERT INTO patrimonio(id_patrimonio,fk_pat_id_setor,fk_pat_matricula,descricao,unidade,marca, data_cadastro) values(?,?,?,?,?,?,now())";
			$stmt = $pdo->prepare($sql);
			$stmt->bindvalue(1,$patrimonio->getIdPatrimonio());
			$stmt->bindvalue(2,$patrimonio->getIdSetor());
			$stmt->bindvalue(3,$patrimonio->getMatricula());
			$stmt->bindvalue(4,$patrimonio->getDescricao());
			$stmt->bindvalue(5,$patrimonio->getUnidade());
			$stmt->bindvalue(6,$patrimonio->getMarca());

			return $stmt->execute();
		}catch(PDOException $exc){
	          echo $exc->getMessage();
	  }
	}
	public function listaPatrimonio($idpatri){
		try{
			$array = [];
			$perpage = 10;

			$page = intval(filter_input(INPUT_GET, 'p'));
			if($page < 1){
				$page = 1;
			}


			$offset = ($page - 1) * $perpage;
			$pdo = conexao::getinstance();
			$sql = "SELECT * FROM patrimonio as p INNER JOIN setor as s ON p.fk_pat_id_setor = s.id_setor WHERE fk_pat_id_setor = ? ORDER BY data_cadastro LIMIT $offset,$perpage";
			$stmt= $pdo->prepare($sql);
			$stmt->bindvalue(1,$idpatri);
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

	public function listaPatrimonioNTI(){
		try{
			$array = [];
			$perpage = 10;

			$page = intval(filter_input(INPUT_GET, 'p'));
			if($page < 1){
				$page = 1;
			}


			$offset = ($page - 1) * $perpage;

			$pdo = conexao::getinstance();
			$sql = "SELECT * FROM patrimonio as p INNER JOIN setor as s ON p.fk_pat_id_setor = s.id_setor ORDER BY data_cadastro DESC LIMIT $offset,$perpage";
			$stmt= $pdo->prepare($sql);
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
	public function listaPatrimonioPagination($id_setor){
		try{
			$array = [];
			$perpage = 10;

			$page = intval(filter_input(INPUT_GET, 'p'));
			if($page < 1){
				$page = 1;
			}


			$offset = ($page - 1) * $perpage;					


			$pdo2 = conexao::getinstance();
			$sql2 =("SELECT COUNT(*) FROM patrimonio ORDER BY data_cadastro DESC");
			$stmt = $pdo2->prepare($sql2);
			$stmt->execute();
			$totalData = $stmt->fetch();
			$totalPat = $totalData['0'];

			$pdo3 = conexao::getinstance();
			$sql3 =("SELECT COUNT(*) FROM patrimonio WHERE fk_pat_id_setor = ? ORDER BY data_cadastro DESC ");
			$stmt = $pdo3->prepare($sql3);
			$stmt->bindvalue(1,$id_setor);
			$stmt->execute();
			$totalData0 = $stmt->fetch();
			$totalPat0 = $totalData0['0'];
			
            if($totalPat == 0){
                $array['pages'] = 1;
            }else{
                $array['pages'] = ceil($totalPat / $perpage);
                
            }
		if($totalPat0 == 0){
		    $array['pagesid'] = 1;
		}else{
		    $array['pagesid'] = ceil($totalPat0 / $perpage);
		}

			
			$array['pageatual'] = $page;


			return $array;
		}catch (Exception $exc) {
	         echo $exc->getTraceAsString();
	    }
	}
	private function _patToObject($patri){
		$patra = [];
		$pa = [];

		foreach ($patri as $pt) {
		 	 
			$pa = filter_var_array($patra, filter_default);
			$patra[] = $pa;
		 } 




		return $patra;
	}

	public function listaPatrimonioOrd($id_setor){
		try{
			$pdo = conexao::getinstance();
			$sql = "SELECT * FROM patrimonio as p INNER JOIN setor as s ON p.fk_pat_id_setor = s.id_setor WHERE p.fk_pat_id_setor = ? ORDER BY data_cadastro DESC LIMIT 4 ";
			$stmt= $pdo->prepare($sql);
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

	public function pesquisaId($patrid){
		try{
			$pdo = conexao::getinstance();
			$sql = "SELECT * FROM patrimonio INNER JOIN setor ON patrimonio.fk_pat_id_setor = setor.id_setor WHERE id_patrimonio = ?";
			$stmt = $pdo->prepare($sql);
			$stmt->bindvalue(1,$patrid);
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
	public function alteraPatrimonio(patrimonio $patrimonio,$idantes){
		try{
			$pdo = conexao::getinstance();
			$sql = "UPDATE patrimonio SET 
			id_patrimonio = ?, 
			descricao = ?, 
			unidade = ?,
			marca = ? WHERE id_patrimonio = ?";
			$stmt = $pdo->prepare($sql);
			$stmt->bindvalue(1,$patrimonio->getIdPatrimonio());
			$stmt->bindvalue(2,$patrimonio->getDescricao());
			$stmt->bindvalue(3,$patrimonio->getUnidade());
			$stmt->bindvalue(4,$patrimonio->getMarca());
			$stmt->bindvalue(5,$idantes);

			return $stmt->execute();
		}catch(PDOException $exc){
	          echo $exc->getMessage();
	  }
	}


}