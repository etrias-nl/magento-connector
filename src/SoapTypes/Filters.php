<?php

namespace Etrias\MagentoConnector\SoapTypes;

class Filters
{

    /**
     * @var associativeArray
     */
    protected $filter = null;

    /**
     * @var complexFilterArray
     */
    protected $complex_filter = null;

    /**
     * Constructor
     *
     * @var associativeArray $filter
     * @var complexFilterArray $complex_filter
     */
    public function __construct($filter, $complex_filter)
    {
        $this->filter = $filter;
        $this->complex_filter = $complex_filter;
    }

    /**
     * @return associativeArray
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @param associativeArray $filter
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * @return complexFilterArray
     */
    public function getComplex_filter()
    {
        return $this->complex_filter;
    }

    /**
     * @param complexFilterArray $complex_filter
     * @return $this
     */
    public function setComplex_filter($complex_filter)
    {
        $this->complex_filter = $complex_filter;
        return $this;
    }


}

