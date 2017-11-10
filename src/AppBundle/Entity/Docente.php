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
class Docente extends Usuario
{
    /**
     * @ORM\Column(type="integer", unique=TRUE)
     * @ORM\Id
     */
    protected $matricula;
    /**
     * @OneToMany(targetEntity="Coordenacao", mappedBy="coordenador")
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
}