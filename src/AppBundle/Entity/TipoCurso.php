<?php

// src/AppBundle/Entity/TipoCurso.php
namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\Table(name="tipo_curso")
 */
class TipoCurso
{
    /**
     * @ORM\Column(type="string", length=1)
     * @ORM\Id
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $nomeTipo;

    public function __construct()
    {
        //parent::__construct();
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid('', true));
    }

    public function getNome()
    {
        return $this->nomeTipo;
    }

    public function setNome($nomeTipo)
    {
        $this->nomeTipo = $nomeTipo;
    }

    public function getCodigo()
    {
        return $this->id;
    }

    public function __toString(){
        // Or change the property that you want to show in the select.
        return $this->nomeTipo;
    }
}