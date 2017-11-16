<?php

// src/AppBundle/Entity/AreaCurso.php
namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\Table(name="areas_curso")
 */
class AreaCurso
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $nomeArea;

    public function __construct()
    {
        //parent::__construct();
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid('', true));
    }

    public function getNomeArea()
    {
        return $this->nomeArea;
    }

    public function setNomeArea($nomeArea)
    {
        $this->nomeArea = $nomeArea;
    }

    public function getCodigo()
    {
        return $this->id;
    }

    public function __toString(){
        return $this->nomeArea;
    }

    public function getId()
    {
        return $this->id;
    }

}