<?php

class usuario
{
	private $matricula;
	private $nome;
	private $email;
	private $senha;
	private $perfil;
    private $fk_usu_id_setor;

	

  

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $matricula
     *
     * @return self
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     *
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     *
     * @return self
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPerfil()
    {
        return $this->perfil;
    }

    /**
     * @param mixed $perfil
     *
     * @return self
     */
    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdSetor()
    {
        return $this->fk_usu_id_setor;
    }

    /**
     * @param mixed $fk_usu_id_setor
     *
     * @return self
     */
    public function setIdSetor($fk_usu_id_setor)
    {
        $this->fk_usu_id_setor = $fk_usu_id_setor;

        return $this;
    }
}