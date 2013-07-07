<?php
namespace HighCharts\Entity;

/**
 * Class Yaxis
 *
 * @package HighCharts\Entity
 */
class Yaxis
{

    /**
     * @var Title
     */
    protected $title;

    /**
     * @var PlotLines
     */
    protected $plotLines;

    /**
     * @param PlotLines $plotLines
     * @return Yaxis
     */
    public function setPlotLines($plotLines)
    {
        $this->plotLines = $plotLines;

        return $this;
    }

    /**
     * @return PlotLines
     */
    public function getPlotLines()
    {
        return $this->plotLines;
    }

    /**
     * @param Title $title
     * @return Yaxis
     */
    public function setTitle(Title $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return Title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $result = array();
        $properties = get_object_vars($this);
        foreach ($properties as $objectName => $property) {
            if (is_object($property)) {
                $result[$objectName] = $property->toArray();
            }
        }

        return $result;
    }

}