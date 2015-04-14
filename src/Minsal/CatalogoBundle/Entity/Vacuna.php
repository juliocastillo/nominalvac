<?php

namespace Minsal\CatalogoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vacuna
 *
 * @ORM\Table(name="ctl_vacuna", indexes={@ORM\Index(name="idx_e5873ce6a7194a90", columns={"id_sexo"}), @ORM\Index(name="idx_e5873ce66a540e", columns={"id_estado"})})
 * @ORM\Entity
 */
class Vacuna
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\SequenceGenerator(sequenceName="ctl_vacuna_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="vacuna", type="string", length=100, nullable=false)
     */
    private $vacuna;

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
     * @var \Sexo
     *
     * @ORM\ManyToOne(targetEntity="Sexo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sexo", referencedColumnName="id")
     * })
     */
    private $idSexo;

    /**
     * @var \Sexo
     *
     * @ORM\ManyToOne(targetEntity="Sitioaplicacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sitio_aplicacion", referencedColumnName="id")
     * })
     */
    private $idSitioaplicacion;
    
    
    /**
     * @var \Estado
     *
     * @ORM\ManyToOne(targetEntity="Estado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estado", referencedColumnName="id")
     * })
     */
    private $idEstado;



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
     * Set vacuna
     *
     * @param string $vacuna
     * @return Vacuna
     */
    public function setVacuna($vacuna)
    {
        $this->vacuna = $vacuna;

        return $this;
    }

    /**
     * Get vacuna
     *
     * @return string 
     */
    public function getVacuna()
    {
        return $this->vacuna;
    }

    /**
     * Set userAdd
     *
     * @param integer $userAdd
     * @return Vacuna
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
     * @return Vacuna
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
     * @return Vacuna
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
     * @return Vacuna
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
     * Set idSexo
     *
     * @param \Minsal\CatalogoBundle\Entity\Sexo $idSexo
     * @return Vacuna
     */
    public function setIdSexo(\Minsal\CatalogoBundle\Entity\Sexo $idSexo = null)
    {
        $this->idSexo = $idSexo;

        return $this;
    }

    /**
     * Get idSexo
     *
     * @return \Minsal\CatalogoBundle\Entity\Sexo 
     */
    public function getIdSexo()
    {
        return $this->idSexo;
    }

    /**
     * Set idEstado
     *
     * @param \Minsal\CatalogoBundle\Entity\Estado $idEstado
     * @return Vacuna
     */
    public function setIdEstado(\Minsal\CatalogoBundle\Entity\Estado $idEstado = null)
    {
        $this->idEstado = $idEstado;

        return $this;
    }

    /**
     * Get idEstado
     *
     * @return \Minsal\CatalogoBundle\Entity\Estado 
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }

    /**
     * Set idSitioaplicacion
     *
     * @param \Minsal\CatalogoBundle\Entity\Sitioaplicacion $idSitioaplicacion
     * @return Vacuna
     */
    public function setIdSitioaplicacion(\Minsal\CatalogoBundle\Entity\Sitioaplicacion $idSitioaplicacion = null)
    {
        $this->idSitioaplicacion = $idSitioaplicacion;

        return $this;
    }

    /**
     * Get idSitioaplicacion
     *
     * @return \Minsal\CatalogoBundle\Entity\Sitioaplicacion 
     */
    public function getIdSitioaplicacion()
    {
        return $this->idSitioaplicacion;
    }
}
