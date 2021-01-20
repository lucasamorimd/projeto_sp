<?php
require_once 'conexao.php';

class bd_chamado
{
	public function cadastrachamado(chamado $chamado){

		try{
			$pdo = conexao::getinstance();
			$sql = "INSERT INTO chamado(fk_setor,fk_usu,tipo_chamado,descricao,unidade,resolvido,data_abertura) values(?,?,?,?,?,0,now())";
			$stmt=$pdo->prepare($sql);
			$stmt->bindvalue(1,$chamado->getFkSetor());
			$stmt->bindvalue(2,$chamado->getFkUsu());
			$stmt->bindvalue(3,$chamado->getTipoChamado());
			$stmt->bindvalue(4,$chamado->getDescricao());
			$stmt->bindvalue(5,$chamado->getUnidade());
			$champ = $stmt->execute();
			return $champ;

		}catch(PDOException $exc){
	          echo $exc->getMessage();
	      }
	}
	public function atendechamado($matricula,$nome,$id_chamado){
	    try{
	        $pdo = conexao::getinstance();
	        $sql = "UPDATE chamado SET resolvido = 2, nome_tecnico = ?, mat_tecnico = ? WHERE id_chamado = ?";
	        $stmt= $pdo->prepare($sql);
	        $stmt->bindvalue(1,$nome);
	        $stmt->bindvalue(2,$matricula);
	        $stmt->bindvalue(3,$id_chamado);
	        return $stmt->execute();
	    }catch(PDOException $exc){
	          echo $exc->getMessage();
	      }
	}
	public function listachamado($matricula){
		try{
		    
			$perpage = 10;

			$page = intval(filter_input(INPUT_GET, 'p'));
			if($page < 1){
				$page = 1;
			}
            $offset = ($page - 1) * $perpage;
			$pdo = conexao::getinstance();
			$sql = "SELECT * FROM chamado as c INNER JOIN setor as s ON c.fk_setor = s.id_setor INNER JOIN usuario as u ON c.fk_usu = u.matricula WHERE c.fk_usu = ? ORDER BY  data_abertura DESC LIMIT $offset,$perpage";
			$stmt = $pdo->prepare($sql);
			$stmt->bindvalue(1,$matricula);
			$stmt->execute();
			$Clientes = array();
			   while($Cliente = $stmt->fetchObject(__CLASS__)){
			   $Clientes[] = $Cliente;
			}
				 return $Clientes;
		}catch(Exception $exc){
	          echo $exc->getTraceAsString();
	      }
	}
	public function listachamadoPagi($id_setor,$matricula)
	{
	    try{
	        $array = [];
			$perpage = 10;

			$page = intval(filter_input(INPUT_GET, 'p'));
			if($page < 1){
				$page = 1;
			}


			$offset = ($page - 1) * $perpage;
			
			$pdo2 = conexao::getinstance();
			$sql2 =("SELECT COUNT(*) FROM chamado ORDER BY data_abertura DESC");
			$stmt = $pdo2->prepare($sql2);
			$stmt->execute();
			$totalData = $stmt->fetch();
			$totalPat = $totalData['0'];
			
			$pdo3 = conexao::getinstance();
			$sql3 =("SELECT COUNT(*) FROM chamado WHERE fk_setor = ? ORDER BY data_abertura DESC ");
			$stmt = $pdo3->prepare($sql3);
			$stmt->bindvalue(1,$id_setor);
			$stmt->execute();
			$totalData0 = $stmt->fetch();
			$totalPat0 = $totalData0['0'];
			
			$pdo4 = conexao::getinstance();
			$sql4 =("SELECT COUNT(*) FROM chamado WHERE fk_usu = ? ORDER BY data_abertura DESC ");
			$stmt = $pdo4->prepare($sql4);
			$stmt->bindvalue(1,$matricula);
			$stmt->execute();
			$totalData1 = $stmt->fetch();
			$totalPat1 = $totalData1['0'];
			
			$array['pages'] = ceil($totalPat / $perpage);
			$array['pagesid'] = ceil($totalPat0 / $perpage);
			$array['pagesmat']= ceil($totalPat1/ $perpage);
			$array['pageatual'] = $page;
	        
	        return $array;
	    }catch (Exception $exc) {
	         echo $exc->getTraceAsString();
	    }
	}
		public function listachamadoEncerrado($matricula){
		try{
		    

			$pdo = conexao::getinstance();
			$sql = "SELECT * FROM chamado as c INNER JOIN setor as s ON c.fk_setor = s.id_setor WHERE c.mat_tecnico = ? AND c.resolvido = 1 ";
			$stmt = $pdo->prepare($sql);
			$stmt->bindvalue(1,$matricula);
			$stmt->execute();
			$Clientes = array();
			   while($Cliente = $stmt->fetchObject(__CLASS__)){
			   $Clientes[] = $Cliente;
			}
				 return $Clientes;
		}catch(Exception $exc){
	          echo $exc->getTraceAsString();
	      }
	}
	public function selecionaidchamado($id_chamado){
		try{
			$pdo = conexao::getinstance();
			$sql = "SELECT * FROM chamado as c INNER JOIN setor as s ON c.fk_setor = s.id_setor INNER JOIN usuario as u ON c.fk_usu = u.matricula WHERE c.id_chamado = ? ";
			$stmt = $pdo->prepare($sql);
			$stmt->bindvalue(1,$id_chamado);
			$stmt->execute();
			$Clientes = array();
			   while($Cliente = $stmt->fetchObject(__CLASS__)){
			   $Clientes[] = $Cliente;
			}
				 return $Clientes;
		}catch(Exception $exc){
	          echo $exc->getTraceAsString();
	      }
	}
	public function listatudochamado($setor){
		try{
		    $array = [];
			$perpage = 10;

			$page = intval(filter_input(INPUT_GET, 'p'));
			if($page < 1){
				$page = 1;
			}


			$offset = ($page - 1) * $perpage;

			$pdo = conexao::getinstance();
			$sql = "SELECT * FROM chamado as c INNER JOIN setor as s ON c.fk_setor = s.id_setor INNER JOIN usuario as u ON c.fk_usu = u.matricula WHERE c.fk_setor = ? ORDER BY resolvido ASC, data_abertura DESC LIMIT $offset,$perpage";
			$stmt = $pdo->prepare($sql);
			$stmt->bindvalue(1,$setor);
			$stmt->execute();
			$Clientes = array();
			   while($Cliente = $stmt->fetchObject(__CLASS__)){
			   $Clientes[] = $Cliente;
			}
				 return $Clientes;
		}catch(Exception $exc){
	          echo $exc->getTraceAsString();
	      }
	}
		public function listachamadoNTI(){
		try{
		    $array = [];
			$perpage = 10;

			$page = intval(filter_input(INPUT_GET, 'p'));
			if($page < 1){
				$page = 1;
			}


			$offset = ($page - 1) * $perpage;

			$pdo = conexao::getinstance();
			$sql = "SELECT * FROM chamado as c INNER JOIN setor as s ON c.fk_setor = s.id_setor INNER JOIN usuario as u ON c.fk_usu = u.matricula order by resolvido ASC, data_abertura DESC LIMIT $offset,$perpage";
			$stmt= $pdo->prepare($sql);
			$stmt->execute();
			$Clientes = array();
			   while($Cliente = $stmt->fetchObject(__CLASS__)){
			   $Clientes[] = $Cliente;

		}
		
		return $Clientes;
	}catch(Exception $exc){
		echo $exc->getTraceAsString();
	}
}
		public function listachamadosabertos(){
		try{
		    
		    
			$pdo = conexao::getinstance();
			$sql = "SELECT * FROM chamado as c INNER JOIN setor as s ON c.fk_setor = s.id_setor INNER JOIN usuario as u ON c.fk_usu = u.matricula WHERE c.resolvido = 0 order by data_abertura ASC LIMIT 5";
			$stmt= $pdo->prepare($sql);
			$stmt->execute();
			$Clientes = array();
			   while($Cliente = $stmt->fetchObject(__CLASS__)){
			   $Clientes[] = $Cliente;

		}
		
		return $Clientes;
	}catch(Exception $exc){
		echo $exc->getTraceAsString();
	}
}


		public function listachamadosabertosws(){
		try{
		    
		    
			$pdo = conexao::getinstance();
			$sql = "SELECT * FROM chamado as c INNER JOIN setor as s ON c.fk_setor = s.id_setor INNER JOIN usuario as u ON c.fk_usu = u.matricula WHERE c.resolvido = 0 order by id_chamado DESC LIMIT 1";
			$stmt= $pdo->prepare($sql);
			$stmt->execute();
			$Clientes = array();
			   while($Cliente = $stmt->fetchObject(__CLASS__)){
			   $Clientes[] = $Cliente;

		}
		
		return $Clientes;
	}catch(Exception $exc){
		echo $exc->getTraceAsString();
	}
}





		public function listachamadosabertos1(){
		try{
		    
		    
			$pdo = conexao::getinstance();
			$sql = "SELECT * FROM chamado as c INNER JOIN setor as s ON c.fk_setor = s.id_setor INNER JOIN usuario as u ON c.fk_usu = u.matricula WHERE c.resolvido = 0 order by data_abertura DESC";
			$stmt= $pdo->prepare($sql);
			$stmt->execute();
			$Clientes = array();
			   while($Cliente = $stmt->fetchObject(__CLASS__)){
			   $Clientes[] = $Cliente;

		}
		
		return $Clientes;
	}catch(Exception $exc){
		echo $exc->getTraceAsString();
	}
}
		public function listachamadosabertosF($matri){
		try{
		    
		    
			$pdo = conexao::getinstance();
			$sql = "SELECT * FROM chamado as c INNER JOIN setor as s ON c.fk_setor = s.id_setor INNER JOIN usuario as u ON c.fk_usu = u.matricula WHERE c.resolvido = 0 AND c.fk_usu = ? order by data_abertura DESC LIMIT 5";
			$stmt= $pdo->prepare($sql);
			$stmt->bindvalue(1,$matri);
			$stmt->execute();
			$Clientes = array();
			   while($Cliente = $stmt->fetchObject(__CLASS__)){
			   $Clientes[] = $Cliente;

		}
		
		return $Clientes;
	}catch(Exception $exc){
		echo $exc->getTraceAsString();
	}
}
        public function fechachamado(chamado $chamado){
            try{
                $pdo = conexao::getinstance();
                $sql = "UPDATE chamado SET resolvido = 1, data_resolvido = now(), mat_tecnico = ?, solucao = ?, nome_tecnico = ? where id_chamado = ? ORDER BY data_abertura DESC";
                $stmt= $pdo->prepare($sql);
                $stmt->bindvalue(1,$chamado->getMatriculaTecnico());
                $stmt->bindvalue(2,$chamado->getSolucao());
                $stmt->bindvalue(3,$chamado->getNomeTecnico());
                $stmt->bindvalue(4,$chamado->getIdChamado());
                return $stmt->execute();
            }catch(PDOException $exc){
	          echo $exc->getMessage();
	      }
        }
}