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
    private $priceDay2;

    /**
     * @var int
     */
    private $priceDay3;


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
     * Set priceDay2.
     *
     * @param int $priceDay2
     *
     * @return Car
     */
    public function setPriceDay2($priceDay2)
    {
        $this->priceDay2 = $priceDay2;

        return $this;
    }

    /**
     * Get priceDay2.
     *
     * @return int
     */
    public function getPriceDay2()
    {
        return $this->priceDay2;
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
}
