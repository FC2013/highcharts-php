<?php
namespace HighCharts\Entity;

/**
 * Class Legend
 *
 * @package HighCharts\Entity
 */
class Legend
{

    /**
     * @var string
     */
    protected $layout = 'horizontal';

    /**
     * @var string
     */
    protected $align = 'center';

    /**
     * @var int
     */
    protected $x = 0;

    /**
     * @var int
     */
    protected $y = 15;

    /**
     * @var int
     */
    protected $borderWidth = 1;

    /**
     * @param string $align
     * @return Legend
     */
    public function setAlign($align)
    {
        $this->align = (string) $align;

        return $this;
    }

    /**
     * @return string
     */
    public function getAlign()
    {
        return $this->align;
    }

    /**
     * @param int $borderWidth
     * @return Legend
     */
    public function setBorderWidth($borderWidth)
    {
        $this->borderWidth = (int) $borderWidth;

        return $this;
    }

    /**
     * @return int
     */
    public function getBorderWidth()
    {
        return $this->borderWidth;
    }

    /**
     * @param string $layout
     * @return Legend
     */
    public function setLayout($layout)
    {
        $this->layout = (string) $layout;

        return $this;
    }

    /**
     * @return string
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * @param int $x
     * @return Legend
     */
    public function setX($x)
    {
        $this->x = (int) $x;

        return $this;
    }

    /**
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param int $y
     * @return Legend
     */
    public function setY($y)
    {
        $this->y = (int) $y;

        return $this;
    }

    /**
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return get_object_vars($this);
    }


}