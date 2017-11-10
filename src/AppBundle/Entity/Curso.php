<?php

// src/AppBundle/Entity/Curso.php
namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\Table(name="cursos")
 */
class Curso
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
    protected $nomeCurso;

    /**
     * @ORM\Column(type="string", length=10, unique=TRUE)
     */
    protected $codigoCurso;

    /**
     * @ORM\ManyToOne(targetEntity="AreaCurso")
     * @ORM\JoinColumn(name="area_id", referencedColumnName="id")
     */
    protected $areaCurso;

    /**
     * @OneToMany(targetEntity="Coordenacao", mappedBy="curso")
     */
    protected $coordenacoes;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    protected $isActive;

    /**
     * @ORM\ManyToOne(targetEntity="ModalidadeCurso")
     * @ORM\JoinColumn(name="modalidade_id", referencedColumnName="id")
     */
    protected $modalidadeCurso;

    /**
     * @ORM\ManyToOne(targetEntity="TipoCurso")
     * @ORM\JoinColumn(name="tipo_id", referencedColumnName="id")
     */
    protected $tipoCurso;

    public function __construct()
    {
        //parent::__construct();
        $this->isActive = true;
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid('', true));
    }

    public function getNome()
    {
        return $this->nomeCurso;
    }

    public function setNome($nomeCurso)
    {
        $this->nomeCurso = $nomeCurso;
    }

    public function getCodigo()
    {
        return $this->codigoCurso;
    }

    public function setCodigo($codigoCurso)
    {
        $this->codigoCurso = $codigoCurso;
    }

    public function getArea()
    {
        return $this->areaCurso;
    }

    public function setArea($areaCurso)
    {
        $this->areaCurso = $areaCurso;
    }

    public function getCoordenador()
    {
        return $this->coordCurso;
    }

    public function setCoordenador($coordCurso)
    {
        $this->coordCurso = $coordCurso;
    }

    public function getModalidade()
    {
        return $this->modalidadeCurso;
    }

    public function setModalidade($modalidadeCurso)
    {
        $this->modalidadeCurso = $modalidadeCurso;
    }

    public function getTipo()
    {
        return $this->tipoCurso;
    }

    public function setTipo($tipoCurso)
    {
        $this->tipoCurso = $tipoCurso;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setAtivo($isActive)
    {
        $this->isActive = $isActive;
    }

    public function getAtivo()
    {
        return $this->isActive;
    }

    public function __toString(){
        // Or change the property that you want to show in the select.
        return (string)$this->id;
    }
}