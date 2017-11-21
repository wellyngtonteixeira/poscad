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
     * @ORM\OneToMany(targetEntity="Coordenacao", mappedBy="curso")
     */
    protected $coordenacoes;

    /**
     * @ORM\ManyToOne(targetEntity="Docente")
     * @ORM\JoinColumn(name="coordenador_atual", referencedColumnName="id")
     */
    protected $coordenadorAtual;

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

    public function getNomeCurso()
    {
        return $this->nomeCurso;
    }

    public function setNomeCurso($nomeCurso)
    {
        $this->nomeCurso = $nomeCurso;
    }

    public function getCodigoCurso()
    {
        return $this->codigoCurso;
    }

    public function setCodigoCurso($codigoCurso)
    {
        $this->codigoCurso = $codigoCurso;
    }

    public function getAreaCurso()
    {
        return $this->areaCurso;
    }

    public function setAreaCurso($areaCurso)
    {
        $this->areaCurso = $areaCurso;
    }

    public function getCoordenacoes()
    {
        return $this->coordenacoes;
    }

    public function setCoordenacoes($coordenacoes)
    {
        $this->coordenacoes = $coordenacoes;
    }

    public function getCoordenadorAtual()
    {
        return $this->coordenadorAtual;
    }

    public function setCoordenadorAtual($coordenadorAtual)
    {
        $this->coordenadorAtual = $coordenadorAtual;
    }

    public function getModalidadeCurso()
    {
        return $this->modalidadeCurso;
    }

    public function setModalidadeCurso($modalidadeCurso)
    {
        $this->modalidadeCurso = $modalidadeCurso;
    }

    public function getTipoCurso()
    {
        return $this->tipoCurso;
    }

    public function setTipoCurso($tipoCurso)
    {
        $this->tipoCurso = $tipoCurso;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    public function getIsActive()
    {
        return $this->isActive;
    }

    public function __toString(){
        // Or change the property that you want to show in the select.
        return (string)$this->id;
    }
}