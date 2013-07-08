<?php
namespace HighCharts\Entity;

/**
 * Class Chart
 *
 * @package HighCharts\Entity
 */
class Chart
{

    /**
     * @var string
     */
    protected $type = 'line';

    /**
     * @var string
     */
    protected $zoomType = 'x';

    /**
     * @var int
     */
    protected $marginRight = 10;

    /**
     * @var int
     */
    protected $marginBottom = 50;

    /**
     * @param int $marginBottom
     * @return Chart
     */
    public function setMarginBottom($marginBottom)
    {
        $this->marginBottom = (int) $marginBottom;

        return $this;
    }

    /**
     * @return int
     */
    public function getMarginBottom()
    {
        return $this->marginBottom;
    }

    /**
     * @param int $marginRight
     * @return Chart
     */
    public function setMarginRight($marginRight)
    {
        $this->marginRight = (int) $marginRight;

        return $this;
    }

    /**
     * @return int
     */
    public function getMarginRight()
    {
        return $this->marginRight;
    }

    /**
     * @param string $type
     * @return Chart
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
    public function toArray()
    {
        return get_object_vars($this);
    }

    /**
     * @param string $zoomType
     * @return Chart
     */
    public function setZoomType($zoomType)
    {
        $this->zoomType = (string) $zoomType;

        return $this;
    }

    /**
     * @return string
     */
    public function getZoomType()
    {
        return $this->zoomType;
    }



}