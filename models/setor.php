<?php

class setor
{
	private $id_setor;
	private $coordenador;
	private $nome_setor;
	

    /**
     * @return mixed
     */
    public function getIdSetor()
    {
        return $this->id_setor;
    }

    /**
     * @param mixed $id_setor
     *
     * @return self
     */
    public function setIdSetor($id_setor)
    {
        $this->id_setor = $id_setor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCoordenador()
    {
        return $this->coordenador;
    }

    /**
     * @param mixed $coordenador
     *
     * @return self
     */
    public function setCoordenador($coordenador)
    {
        $this->coordenador = $coordenador;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNomeSetor()
    {
        return $this->nome_setor;
    }

    /**
     * @param mixed $nome_setor
     *
     * @return self
     */
    public function setNomeSetor($nome_setor)
    {
        $this->nome_setor = $nome_setor;

        return $this;
    }
}