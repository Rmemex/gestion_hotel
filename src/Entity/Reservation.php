<?php

namespace ResaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="Reservation", indexes={@ORM\Index(name="FK_Reservation_Id", columns={"Id"}), @ORM\Index(name="FK_Reservation_Id_Hotel", columns={"Id_Hotel"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateArrivee", type="date", nullable=false)
     */
    private $datearrivee;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDepart", type="date", nullable=false)
     */
    private $datedepart;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdReservation", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreservation;

    /**
     * @var \ResaBundle\Entity\Chambre
     *
     * @ORM\ManyToOne(targetEntity="ResaBundle\Entity\Chambre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id", referencedColumnName="Id")
     * })
     */
    private $id;

    /**
     * @var \ResaBundle\Entity\Hotel
     *
     * @ORM\ManyToOne(targetEntity="ResaBundle\Entity\Hotel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Hotel", referencedColumnName="Id")
     * })
     */
    private $idHotel;



    /**
     * Set datearrivee
     *
     * @param \DateTime $datearrivee
     *
     * @return Reservation
     */
    public function setDatearrivee($datearrivee)
    {
        $this->datearrivee = $datearrivee;

        return $this;
    }

    /**
     * Get datearrivee
     *
     * @return \DateTime
     */
    public function getDatearrivee()
    {
        return $this->datearrivee;
    }

    /**
     * Set datedepart
     *
     * @param \DateTime $datedepart
     *
     * @return Reservation
     */
    public function setDatedepart($datedepart)
    {
        $this->datedepart = $datedepart;

        return $this;
    }

    /**
     * Get datedepart
     *
     * @return \DateTime
     */
    public function getDatedepart()
    {
        return $this->datedepart;
    }

    /**
     * Get idreservation
     *
     * @return integer
     */
    public function getIdreservation()
    {
        return $this->idreservation;
    }

    /**
     * Set id
     *
     * @param \ResaBundle\Entity\Chambre $id
     *
     * @return Reservation
     */
    public function setId(\ResaBundle\Entity\Chambre $id = null)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return \ResaBundle\Entity\Chambre
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idHotel
     *
     * @param \ResaBundle\Entity\Hotel $idHotel
     *
     * @return Reservation
     */
    public function setIdHotel(\ResaBundle\Entity\Hotel $idHotel = null)
    {
        $this->idHotel = $idHotel;

        return $this;
    }

    /**
     * Get idHotel
     *
     * @return \ResaBundle\Entity\Hotel
     */
    public function getIdHotel()
    {
        return $this->idHotel;
    }
}
