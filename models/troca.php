<?php

class troca 
{
	private $id_troca;
	private $fk_troca_matricula;
	private $id_setor_atual;
	private $id_setor_destino;
	private $data_troca;
    private $fk_troca_id_patrimonio;

	


    /**
     * @return mixed
     */
    public function getIdTroca()
    {
        return $this->id_troca;
    }

    /**
     * @param mixed $id_troca
     *
     * @return self
     */
    public function setIdTroca($id_troca)
    {
        $this->id_troca = $id_troca;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->fk_troca_matricula;
    }

    /**
     * @param mixed $fk_troca_matricula
     *
     * @return self
     */
    public function setMatricula($fk_troca_matricula)
    {
        $this->fk_troca_matricula = $fk_troca_matricula;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdSetorAtual()
    {
        return $this->id_setor_atual;
    }

    /**
     * @param mixed $id_setor_atual
     *
     * @return self
     */
    public function setIdSetorAtual($id_setor_atual)
    {
        $this->id_setor_atual = $id_setor_atual;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdSetorDestino()
    {
        return $this->id_setor_destino;
    }

    /**
     * @param mixed $id_setor_destino
     *
     * @return self
     */
    public function setIdSetorDestino($id_setor_destino)
    {
        $this->id_setor_destino = $id_setor_destino;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDataTroca()
    {
        return $this->data_troca;
    }

    /**
     * @param mixed $data_troca
     *
     * @return self
     */
    public function setDataTroca($data_troca)
    {
        $this->data_troca = $data_troca;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdPatrimonio()
    {
        return $this->fk_troca_id_patrimonio;
    }

    /**
     * @param mixed $fk_troca_id_patrimonio
     *
     * @return self
     */
    public function setIdPatrimonio($fk_troca_id_patrimonio)
    {
        $this->fk_troca_id_patrimonio = $fk_troca_id_patrimonio;

        return $this;
    }
}