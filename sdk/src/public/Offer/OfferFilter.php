<?php
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 02/11/2016
 * Time: 17:08
 */

namespace Sdk\Offer;


class OfferFilter
{
    private $_pageNumber = 0;

    private $_sellerProductIdList = array();

    /**
     * @return int
     */
    public function getPageNumber()
    {
        return $this->_pageNumber;
    }

    /**
     * @param int $pageNumber
     */
    public function setPageNumber($pageNumber)
    {
        $this->_pageNumber = $pageNumber;
    }

    public function setSellerproductIds(array $ids)
    {
        $this->_sellerProductIdList = $ids;
    }

    public function getSellerproductIds()
    {
        return $this->_sellerProductIdList;
    }
}