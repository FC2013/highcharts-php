<?php
namespace HighCharts\Entity;

/**
 * Class Series
 *
 * @package HighCharts\Entity
 */
class Series
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    //protected $pointStart = 0;

    /**
     * @var int
     */
    //protected $pointInterval = 0;

    /**
     * @var array
     */
    protected $data = array();

    /**
     * @param array $data
     * @return Series
     */
    public function setData(array $data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param string $name
     * @return Series
     */
    public function setName($name)
    {
        $this->name = (string) $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return get_object_vars($this);
    }

//    /**
//     * @param int $pointInterval
//     * @return Series
//     */
//    public function setPointInterval($pointInterval)
//    {
//        $this->pointInterval = (int) $pointInterval;
//
//        return $this;
//    }
//
//    /**
//     * @return int
//     */
//    public function getPointInterval()
//    {
//        return $this->pointInterval;
//    }
//
//    /**
//     * @param int $pointStart
//     * @return Series
//     */
//    public function setPointStart($pointStart)
//    {
//        $this->pointStart = (int) $pointStart;
//
//        return $this;
//    }
//
//    /**
//     * @return int
//     */
//    public function getPointStart()
//    {
//        return $this->pointStart;
//    }


}