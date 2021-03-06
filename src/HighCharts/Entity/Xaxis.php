<?php
namespace HighCharts\Entity;

/**
 * Class Xaxis
 *
 * @package HighCharts\Entity
 */
class Xaxis
{

    /**
     * @var array
     */
    protected $dateTimeLabelFormats = array();

    /**
     * @var string
     */
    protected $type = '';

    /**
     * @return array
     */
    public function toArray()
    {
        return get_object_vars($this);
    }

    /**
     * @param string $type
     * @return Xaxis
     */
    public function setType($type)
    {
        $this->type = (string) $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return array
     */
    public function getDateTimeLabelFormats()
    {
        return $this->dateTimeLabelFormats;
    }

    /**
     * @param array $dateTimeLabelFormats
     * @return Xaxis
     */
    public function setDateTimeLabelFormats(array $dateTimeLabelFormats)
    {
        $this->dateTimeLabelFormats = $dateTimeLabelFormats;

        return $this;
    }


}