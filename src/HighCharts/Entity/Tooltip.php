<?php
namespace HighCharts\Entity;

/**
 * Class Tooltip
 *
 * @package HighCharts\Entity
 */
class Tooltip
{

    /**
     * @var string
     */
    protected $valueSuffix = '';

    /**
     * @param string $valueSuffix
     * @return Tooltip
     */
    public function setValueSuffix($valueSuffix)
    {
        $this->valueSuffix = (string) $valueSuffix;

        return $this;
    }

    /**
     * @return string
     */
    public function getValueSuffix()
    {
        return $this->valueSuffix;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return get_object_vars($this);
    }


}