<?php

namespace OuicarBundle\Entity;

/**
 * Car
 */
class Car
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $mileage;

    /**
     * @var int
     */
    private $priceDay1;

    /**
     * @var int
     */
    private $priceDay3;

    /**
     * @var int
     */
    private $priceDay7;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set mileage.
     *
     * @param int $mileage
     *
     * @return Car
     */
    public function setMileage($mileage)
    {
        $this->mileage = $mileage;

        return $this;
    }

    /**
     * Get mileage.
     *
     * @return int
     */
    public function getMileage()
    {
        return $this->mileage;
    }

    /**
     * Set priceDay1.
     *
     * @param int $priceDay1
     *
     * @return Car
     */
    public function setPriceDay1($priceDay1)
    {
        $this->priceDay1 = $priceDay1;

        return $this;
    }

    /**
     * Get priceDay1.
     *
     * @return int
     */
    public function getPriceDay1()
    {
        return $this->priceDay1;
    }

    /**
     * Set priceDay3.
     *
     * @param int $priceDay3
     *
     * @return Car
     */
    public function setPriceDay3($priceDay3)
    {
        $this->priceDay3 = $priceDay3;

        return $this;
    }

    /**
     * Get priceDay3.
     *
     * @return int
     */
    public function getPriceDay3()
    {
        return $this->priceDay3;
    }

    /**
     * Set priceDay7.
     *
     * @param int $priceDay7
     *
     * @return Car
     */
    public function setPriceDay7($priceDay7)
    {
        $this->priceDay7 = $priceDay7;

        return $this;
    }

    /**
     * Get priceDay7.
     *
     * @return int
     */
    public function getPriceDay7()
    {
        return $this->priceDay7;
    }

}
