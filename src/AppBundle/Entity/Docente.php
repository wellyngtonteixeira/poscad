<?php
/**
 * Created by PhpStorm.
 * User: UFT
 * Date: 10/11/2017
 * Time: 11:25
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="docentes")
 */
class Docente
{
    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    protected $usuario;
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     */
    protected $matricula;
    /**
     * @ORM\OneToMany(targetEntity="Coordenacao", mappedBy="coordenador")
     */
    protected $coordenacoes;

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }
}