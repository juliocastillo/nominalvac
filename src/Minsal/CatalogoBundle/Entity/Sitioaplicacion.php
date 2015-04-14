<?php

namespace Minsal\CatalogoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sitioaplicacion
 *
 * @ORM\Table(name="ctl_sitioaplicacion")
 * @ORM\Entity
 */
class Sitioaplicacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\SequenceGenerator(sequenceName="ctl_sitioaplicacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="sitio_aplicacion", type="string", length=50, nullable=false)
     */
    private $sitioAplicacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_add", type="integer", nullable=false)
     */
    private $userAdd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="date", nullable=false)
     */
    private $dateAdd;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_mod", type="integer", nullable=true)
     */
    private $userMod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mod", type="date", nullable=true)
     */
    private $dateMod;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set sitioAplicacion
     *
     * @param string $sitioAplicacion
     * @return Sitioaplicacion
     */
    public function setSitioAplicacion($sitioAplicacion)
    {
        $this->sitioAplicacion = $sitioAplicacion;

        return $this;
    }

    /**
     * Get sitioAplicacion
     *
     * @return string 
     */
    public function getSitioAplicacion()
    {
        return $this->sitioAplicacion;
    }

    /**
     * Set userAdd
     *
     * @param integer $userAdd
     * @return Sitioaplicacion
     */
    public function setUserAdd($userAdd)
    {
        $this->userAdd = $userAdd;

        return $this;
    }

    /**
     * Get userAdd
     *
     * @return integer 
     */
    public function getUserAdd()
    {
        return $this->userAdd;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return Sitioaplicacion
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime 
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set userMod
     *
     * @param integer $userMod
     * @return Sitioaplicacion
     */
    public function setUserMod($userMod)
    {
        $this->userMod = $userMod;

        return $this;
    }

    /**
     * Get userMod
     *
     * @return integer 
     */
    public function getUserMod()
    {
        return $this->userMod;
    }

    /**
     * Set dateMod
     *
     * @param \DateTime $dateMod
     * @return Sitioaplicacion
     */
    public function setDateMod($dateMod)
    {
        $this->dateMod = $dateMod;

        return $this;
    }

    /**
     * Get dateMod
     *
     * @return \DateTime 
     */
    public function getDateMod()
    {
        return $this->dateMod;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Sitioaplicacion
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }
    
    public function __toString() {
        return $this->sitioAplicacion;
    }
    
}
