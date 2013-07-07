<?php
namespace HighCharts\Entity;

/**
 * Class PlotLines
 *
 * @package HighCharts\Entity
 */
class PlotLines
{

    /**
     * @var int
     */
    protected $value = 0;

    /**
     * @var int
     */
    protected $width = 1;

    /**
     * @var string
     */
    protected $color = '#808080';

    /**
     * @param string $color
     * @return PlotLines
     */
    public function setColor($color)
    {
        $this->color = (string) $color;

        return $this;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param int $value
     * @return PlotLines
     */
    public function setValue($value)
    {
        $this->value = (int) $value;

        return $this;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $width
     * @return PlotLines
     */
    public function setWidth($width)
    {
        $this->width = (int) $width;

        return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return get_object_vars($this);
    }


}