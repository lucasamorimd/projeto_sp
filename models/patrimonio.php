<?php

class patrimonio
{
	private $id_patrimonio;
	private $fk_pat_id_setor;
	private $fk_pat_matricula;
	private $descricao;
	private $unidade;
    private $marca;
    

    /**
     * @return mixed
     */
    public function getIdPatrimonio()
    {
        return $this->id_patrimonio;
    }

    /**
     * @param mixed $id_patrimonio
     *
     * @return self
     */
    public function setIdPatrimonio($id_patrimonio)
    {
        $this->id_patrimonio = $id_patrimonio;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdSetor()
    {
        return $this->fk_pat_id_setor;
    }

    /**
     * @param mixed $fk_pat_id_setor
     *
     * @return self
     */
    public function setIdSetor($fk_pat_id_setor)
    {
        $this->fk_pat_id_setor = $fk_pat_id_setor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->fk_pat_matricula;
    }

    /**
     * @param mixed $fk_pat_matricula
     *
     * @return self
     */
    public function setMatricula($fk_pat_matricula)
    {
        $this->fk_pat_matricula = $fk_pat_matricula;

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
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     *
     * @return self
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

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