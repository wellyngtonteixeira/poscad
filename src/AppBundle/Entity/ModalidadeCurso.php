<?php

// src/AppBundle/Entity/ModalidadeCurso.php
namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\Table(name="modalidades_curso")
 */
class ModalidadeCurso
{
    /**
     * @ORM\Column(type="string", length=1)
     * @ORM\Id
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $nomeModalidade;

    public function __construct()
    {
        //parent::__construct();
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid('', true));
    }

    public function getNome()
    {
        return $this->nomeModalidade;
    }

    public function setNome($nomeModalidade)
    {
        $this->nomeModalidade = $nomeModalidade;
    }

    public function getCodigo()
    {
        return $this->id;
    }

    public function __toString(){
        // Or change the property that you want to show in the select.
        return $this->nomeModalidade;
    }
}