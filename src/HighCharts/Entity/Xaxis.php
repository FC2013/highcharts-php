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
    //protected $categories = array();

    /**
     * @var string
     */
    protected $type = '';

    /**
     * @param array $categories
     * @return Xaxis
     */
//    public function setCategories(array $categories)
//    {
//        $this->categories = $categories;
//
//        return $this;
//    }

    /**
     * @return array
     */
//    public function getCategories()
//    {
//        return $this->categories;
//    }

    /**
     * @param string $category
     * @return Xaxis
     */
//    public function addCategory($category)
//    {
//        $this->categories[] = (string) $category;
//
//        return $this;
//    }

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


}