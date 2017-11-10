<?php
/**
 * Created by PhpStorm.
 * User: UFT
 * Date: 10/11/2017
 * Time: 11:30
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="coordenacoes")
*/

class Coordenacao
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * Many Features have One Product.
     * @ManyToOne(targetEntity="Docente", inversedBy="coordenacoes")
     * @JoinColumn(name="coordenador", referencedColumnName="id")
     */
    protected $coordenador;

    protected $atual;
    /**
     * Many Features have One Product.
     * @ManyToOne(targetEntity="Curso", inversedBy="coordenacoes")
     * @JoinColumn(name="curso", referencedColumnName="id")
     */
    protected $curso;

    protected $dt_inicio;

    protected $dt_termino;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
     */
    public function setCoordenador($coordenador)
    {
        $this->coordenador = $coordenador;
    }

    /**
     * @return mixed
     */
    public function getAtual()
    {
        return $this->atual;
    }

    /**
     * @param mixed $atual
     */
    public function setAtual($atual)
    {
        $this->atual = $atual;
    }

    /**
     * @return mixed
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * @param mixed $curso
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }

    /**
     * @return mixed
     */
    public function getDtInicio()
    {
        return $this->dt_inicio;
    }

    /**
     * @param mixed $dt_inicio
     */
    public function setDtInicio($dt_inicio)
    {
        $this->dt_inicio = $dt_inicio;
    }

    /**
     * @return mixed
     */
    public function getDtTermino()
    {
        return $this->dt_termino;
    }

    /**
     * @param mixed $dt_termino
     */
    public function setDtTermino($dt_termino)
    {
        $this->dt_termino = $dt_termino;
    }




}