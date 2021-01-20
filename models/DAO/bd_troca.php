<?php 
require_once 'conexao.php';

class bd_troca
{
	public function cadastraTroca(troca $troca){

		try{
			$pdo = conexao::getinstance();
			$sql = "INSERT INTO troca (fk_troca_matricula,id_setor_atual,id_setor_destino, data_troca,fk_troca_id_patrimonio) values(?,?,?,now(),?)";
			$stmt = $pdo->prepare($sql);
			$stmt->bindvalue(1,$troca->getMatricula());
			$stmt->bindvalue(2,$troca->getIdSetorAtual());
			$stmt->bindvalue(3,$troca->getIdSetorDestino());
			$stmt->bindvalue(4,$troca->getIdPatrimonio());

			return $stmt->execute();
			
		}catch(PDOException $exc){
	          echo $exc->getMessage();
	      }
	}

	public function listaTroca(){
		try{
			$pdo = conexao::getinstance();
			$sql = "SELECT * FROM troca ORDER BY data_troca ASC";
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

	public function alteraPatrimonio($idpat,$idsetor){
		try{
			$pdo = conexao::getinstance();
			$sql = "UPDATE patrimonio SET fk_pat_id_setor = ? WHERE id_patrimonio = ?";
			$stmt = $pdo->prepare($sql);
			$stmt->bindvalue(1,$idsetor);
			$stmt->bindvalue(2,$idpat);

			return $stmt->execute();
		}catch(PDOException $exc){
	          echo $exc->getMessage();
	      }
	}

	public function listaTrocaDetalhe(){
		try{
		    $array = [];
			$perpage = 10;

			$page = intval(filter_input(INPUT_GET, 'p'));
			if($page < 1){
				$page = 1;
			}


			$offset = ($page - 1) * $perpage;
			$pdo = conexao::getinstance();
			$sql = "SELECT * FROM troca INNER JOIN setor ON troca.id_setor_destino = setor.id_setor INNER JOIN usuario ON troca.fk_troca_matricula = usuario.matricula INNER JOIN patrimonio ON troca.fk_troca_id_patrimonio = patrimonio.id_patrimonio ORDER BY data_troca DESC LIMIT $offset,$perpage";
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
	public function listaTrocaDetalheAtu(){
		try{
			$pdo = conexao::getinstance();
			$sql = "SELECT * FROM troca INNER JOIN setor ON troca.id_setor_atual = setor.id_setor INNER JOIN usuario ON troca.fk_troca_matricula = usuario.matricula";
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

	public function detalhaTroca($id_troca){
		try{
			$pdo = conexao::getinstance();
			$sql = "SELECT * FROM troca as t INNER JOIN setor as s ON t.id_setor_destino = s.id_setor INNER JOIN usuario as u ON t.fk_troca_matricula = u.matricula INNER JOIN patrimonio ON t.fk_troca_id_patrimonio = patrimonio.id_patrimonio WHERE t.id_troca = ?";
			$stmt = $pdo->prepare($sql);
			$stmt->bindvalue(1,$id_troca);
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
	public function detalhaTrocaAntigo($id_troca){
		try{
			$pdo = conexao::getinstance();
			$sql = "SELECT * FROM troca as t INNER JOIN patrimonio ON t.fk_troca_id_patrimonio = patrimonio.id_patrimonio INNER JOIN setor as ss ON t.id_setor_atual = ss.id_setor WHERE id_troca = ?";
			$stmt = $pdo->prepare($sql);
			$stmt->bindvalue(1,$id_troca);
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

	public function listaTrocaPat($id_trocaPat){
		try{
			$pdo = conexao::getinstance();
			$sql = "SELECT * FROM troca as t INNER JOIN setor as s ON t.id_setor_destino = s.id_setor INNER JOIN usuario ON t.fk_troca_matricula = usuario.matricula INNER JOIN patrimonio ON t.fk_troca_id_patrimonio = patrimonio.id_patrimonio WHERE t.fk_troca_id_patrimonio = ?";
			$stmt = $pdo->prepare($sql);
			$stmt->bindvalue(1,$id_trocaPat);
			$stmt->execute();
				$Clientes = array();
				while($Cliente = $stmt->fetchObject(__CLASS__)){
					$Clientes[] = $Cliente;
				}
				return $Clientes;
		}catch (Exception $exc){
			echo $exc->getTraceAsString();
		}
	}
		public function trocasPagination(){
		try{
			$array = [];
			$perpage = 10;

			$page = intval(filter_input(INPUT_GET, 'p'));
			if($page < 1){
				$page = 1;
			}


			$offset = ($page - 1) * $perpage;					


			$pdo2 = conexao::getinstance();
			$sql2 =("SELECT COUNT(*) FROM troca ORDER BY data_troca DESC");
			$stmt = $pdo2->prepare($sql2);
			$stmt->execute();
			$totalData = $stmt->fetch();
			$totalPat = $totalData['0'];


            if($totalPat != 0){
                $array['pages'] = ceil($totalPat / $perpage);
            }else{
                $array['pages'] = 1;
                
            }
		
			$array['pageatual'] = $page;


			return $array;
		}catch (Exception $exc) {
	         echo $exc->getTraceAsString();
	    }
	}

}