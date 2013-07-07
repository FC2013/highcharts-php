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


}