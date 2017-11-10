<?php

namespace AppBundle\Entity;

use Sonata\UserBundle\Entity\BaseUser as BaseUser;
use Doctrine\ORM\Mapping as ORM;
/**
 * Created by PhpStorm.
 * User: UFT
 * Date: 08/11/2017
 * Time: 15:28
 */
/**
 * @ORM\Entity
 * @ORM\Table(name="usuarios_root")
 */
class Usuario extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}