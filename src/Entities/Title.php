<?php
namespace HighCharts\Entity;

/**
 * Class Title
 *
 * @package HighCharts\Entity
 */
class Title
{

    /**
     * @var string
     */
    protected $text = '';

    /**
     * @var int
     */
    protected $x = 0;

    /**
     * @param string $text
     * @return Title
     */
    public function setText($text)
    {
        $this->text = (string) $text;

        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param int $x
     * @return Title
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


}