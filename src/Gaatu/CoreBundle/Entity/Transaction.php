<?php

namespace Gaatu\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaction
 *
 * @ORM\Table(name="transaction")
 * @ORM\Entity(repositoryClass="Gaatu\CoreBundle\Repository\TransactionRepository")
 */
class Transaction
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="buyerName", type="string", length=255)
     */
    private $buyerName;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=4)
     */
    private $price;

    /**
     * @var bool
     *
     * @ORM\Column(name="shipped", type="boolean")
     */
    private $shipped;


    /**
     * @ORM\ManyToMany(targetEntity="Shipment", inversedBy="transactions")
     * @ORM\JoinTable(name="transaction_shipment")
     */
    protected $shipments;
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set buyerName
     *
     * @param string $buyerName
     *
     * @return Transaction
     */
    public function setBuyerName($buyerName)
    {
        $this->buyerName = $buyerName;

        return $this;
    }

    /**
     * Get buyerName
     *
     * @return string
     */
    public function getBuyerName()
    {
        return $this->buyerName;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Transaction
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set shipped
     *
     * @param boolean $shipped
     *
     * @return Transaction
     */
    public function setShipped($shipped)
    {
        $this->shipped = $shipped;

        return $this;
    }

    /**
     * Get shipped
     *
     * @return bool
     */
    public function getShipped()
    {
        return $this->shipped;
    }
    /**
     * Constructor
     */
    public function __construct($buyer, $price, $shipped)
    {
        $this->shipments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->buyerName = $buyer;
        $this->price = $price;
        $this->shipped = $shipped;
    }

    /**
     * Add shipment
     *
     * @param \Gaatu\CoreBundle\Entity\Shipment $shipment
     *
     * @return Transaction
     */
    public function addShipment(\Gaatu\CoreBundle\Entity\Shipment $shipment)
    {
        $this->shipments[] = $shipment;

        return $this;
    }

    /**
     * Remove shipment
     *
     * @param \Gaatu\CoreBundle\Entity\Shipment $shipment
     */
    public function removeShipment(\Gaatu\CoreBundle\Entity\Shipment $shipment)
    {
        $this->shipments->removeElement($shipment);
    }

    /**
     * Get shipments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getShipments()
    {
        return $this->shipments;
    }
}
