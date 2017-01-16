<?php

namespace Gaatu\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shipment
 *
 * @ORM\Table(name="shipment")
 * @ORM\Entity(repositoryClass="Gaatu\CoreBundle\Repository\ShipmentRepository")
 */
class Shipment
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
     * @ORM\Column(name="trackingNumber", type="string", length=255)
     */
    private $trackingNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="carrier", type="string", length=255)
     */
    private $carrier;

    /**
     * @var string
     *
     * @ORM\Column(name="shippingFee", type="decimal", precision=10, scale=4)
     */
    private $shippingFee;


    /**
     * @ORM\ManyToMany(targetEntity="Transaction", mappedBy="shipments")
     */
    protected $transactions;

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
     * Set trackingNumber
     *
     * @param string $trackingNumber
     *
     * @return Shipment
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;

        return $this;
    }

    /**
     * Get trackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * Set carrier
     *
     * @param string $carrier
     *
     * @return Shipment
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * Get carrier
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * Set shippingFee
     *
     * @param string $shippingFee
     *
     * @return Shipment
     */
    public function setShippingFee($shippingFee)
    {
        $this->shippingFee = $shippingFee;

        return $this;
    }

    /**
     * Get shippingFee
     *
     * @return string
     */
    public function getShippingFee()
    {
        return $this->shippingFee;
    }

    /**
     * Shipment constructor.
     * @param $trackingNumber
     * @param $carrier
     * @param $fee
     */
    public function __construct($trackingNumber, $carrier, $fee)
    {
        $this->transactions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->trackingNumber = $trackingNumber;
        $this->carrier = $carrier;
        $this->shippingFee = $fee;
    }

    /**
     * Add transaction
     *
     * @param \Gaatu\CoreBundle\Entity\Transaction $transaction
     *
     * @return Shipment
     */
    public function addTransaction(\Gaatu\CoreBundle\Entity\Transaction $transaction)
    {
        $this->transactions[] = $transaction;

        return $this;
    }

    /**
     * Remove transaction
     *
     * @param \Gaatu\CoreBundle\Entity\Transaction $transaction
     */
    public function removeTransaction(\Gaatu\CoreBundle\Entity\Transaction $transaction)
    {
        $this->transactions->removeElement($transaction);
    }

    /**
     * Get transactions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTransactions()
    {
        return $this->transactions;
    }
}
