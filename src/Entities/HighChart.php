<?php
namespace HighCharts\Entity;

/**
 * Class HighCharts
 *
 * @package HighCharts\Entity
 */
class HighChart
{

    /**
     * @var Chart
     */
    protected $chart;

    /**
     * @var Title
     */
    protected $title;

    /**
     * @var Title
     */
    protected $subtitle;

    /**
     * @var Xaxis
     */
    protected $xAxis;

    /**
     * @var Yaxis
     */
    protected $yAxis;

    /**
     * @var Tooltip
     */
    protected $tooltip;

    /**
     * @var Legend
     */
    protected $legend;

    /**
     * @var SeriesCollection
     */
    protected $series;

    /**
     * @param Yaxis $yAxis
     * @return HighCharts
     */
    public function setYAxis(Yaxis $yAxis)
    {
        $this->yAxis = $yAxis;

        return $this;
    }

    /**
     * @return Yaxis
     */
    public function getYAxis()
    {
        return $this->yAxis;
    }

    /**
     * @param Xaxis $xAxis
     * @return HighCharts
     */
    public function setXAxis(Xaxis $xAxis)
    {
        $this->xAxis = $xAxis;

        return $this;
    }

    /**
     * @return Xaxis
     */
    public function getXAxis()
    {
        return $this->xAxis;
    }

    /**
     * @param Tooltip $tooltip
     * @return HighCharts
     */
    public function setTooltip(Tooltip $tooltip)
    {
        $this->tooltip = $tooltip;

        return $this;
    }

    /**
     * @return Tooltip
     */
    public function getTooltip()
    {
        return $this->tooltip;
    }

    /**
     * @param Title $title
     * @return HighCharts
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
     * @param Title $subtitle
     * @return HighCharts
     */
    public function setSubtitle(Title $subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * @return Title
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * @param SeriesCollection $series
     * @return HighCharts
     */
    public function setSeries(SeriesCollection $series)
    {
        $this->series = $series;

        return $this;
    }

    /**
     * @return SeriesCollection
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @param Legend $legend
     * @return HighCharts
     */
    public function setLegend(Legend $legend)
    {
        $this->legend = $legend;

        return $this;
    }

    /**
     * @return Legend
     */
    public function getLegend()
    {
        return $this->legend;
    }

    /**
     * @param Chart $chart
     * @return HighCharts
     */
    public function setChart(Chart $chart)
    {
        $this->chart = $chart;

        return $this;
    }

    /**
     * @return Chart
     */
    public function getChart()
    {
        return $this->chart;
    }



}