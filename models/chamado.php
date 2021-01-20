<?php

class chamado
{
	private $id_chamado; 
	private $fk_usu;
	private $fk_setor;
	private $tipo_chamado; 
	private $descricao;
	private $resolvido;
	private $data_resolvido;
	private $data_abertura;
	private $matricula_tecnico;
	private $unidade;
	private $solucao;
	private $nome_tecnico;


    public function setSolucao($solucao)
    {
        $this->solucao = $solucao;
    }
    
    public function getSolucao()
    {
        return $this->solucao;
    }
    public function setNomeTecnico($nome_tecnico)
    {
        $this->nome_tecnico = $nome_tecnico;
    }
    public function getNomeTecnico()
    {
        return $this->nome_tecnico;
    }

    /**
     * @return mixed
     */
    public function getIdChamado()
    {
        return $this->id_chamado;
    }

    /**
     * @param mixed $id_chamado
     *
     * @return self
     */
    public function setIdChamado($id_chamado)
    {
        $this->id_chamado = $id_chamado;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFkUsu()
    {
        return $this->fk_usu;
    }

    /**
     * @param mixed $fk_usu
     *
     * @return self
     */
    public function setFkUsu($fk_usu)
    {
        $this->fk_usu = $fk_usu;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFkSetor()
    {
        return $this->fk_setor;
    }

    /**
     * @param mixed $fk_setor
     *
     * @return self
     */
    public function setFkSetor($fk_setor)
    {
        $this->fk_setor = $fk_setor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoChamado()
    {
        return $this->tipo_chamado;
    }

    /**
     * @param mixed $tipo_chamado
     *
     * @return self
     */
    public function setTipoChamado($tipo_chamado)
    {
        $this->tipo_chamado = $tipo_chamado;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     *
     * @return self
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getResolvido()
    {
        return $this->resolvido;
    }

    /**
     * @param mixed $resolvido
     *
     * @return self
     */
    public function setResolvido($resolvido)
    {
        $this->resolvido = $resolvido;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataAbertura()
    {
        return $this->data_abertura;
    }

    /**
     * @param mixed $data_abertura
     *
     * @return self
     */
    public function setDataAbertura($data_abertura)
    {
        $this->data_abertura = $data_abertura;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMatriculaTecnico()
    {
        return $this->matricula_tecnico;
    }

    /**
     * @param mixed $matricula_tecnico
     *
     * @return self
     */
    public function setMatriculaTecnico($matricula_tecnico)
    {
        $this->matricula_tecnico = $matricula_tecnico;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnidade()
    {
        return $this->unidade;
    }

    /**
     * @param mixed $unidade
     *
     * @return self
     */
    public function setUnidade($unidade)
    {
        $this->unidade = $unidade;

        return $this;
    }
}