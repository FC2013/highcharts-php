<?php
namespace HighCharts\Entity;

/**
 * Class SeriesCollection
 *
 * @package HighCharts\Entity
 */
class SeriesCollection
{

    /**
     * @var array
     */
    protected $seriesCollection = array();

    /**
     * @param Series $series
     * @return SeriesCollection
     */
    public function addSeries(Series $series)
    {
        $this->seriesCollection[$series->getName()] = $series;

        return $this;
    }

    /**
     * @return array
     */
    public function getSeriesCollection()
    {
        return $this->seriesCollection;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $result = array();
        foreach ($this->getSeriesCollection() as $series) {
            $result[] = $series->toArray();
        }

        return $result;
    }


}