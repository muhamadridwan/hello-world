<?php

class PagingInfo
{
    public $startRowsNumber = 0 ;
    public $endRowsNumber = 0 ;
    public $totalRows = 0 ;
    public $totalRowsOnPage = 10 ;
    public $totalPage = 0 ;
    public $currentPage = 1 ;
    public $maxPagingNumber = 10 ;
    public $startPageNumber = 1 ;
    public $endPageNumber = 1 ;
    public $isPrev = 0 ;
    public $isNext = 0 ;

    function __construct($totalRowsOnPage, $maxPagingNumber, $currentPage)
    {
        $this->totalRowsOnPage = $totalRowsOnPage;
        $this->maxPagingNumber = $maxPagingNumber;
        $this->currentPage = $currentPage;
    }

    public function setupPaging()
    {
        $startPageNumber = $currentPage <= 3 ? 1 : $currentPage - 3;

        $endPageNumber = $startPageNumber + $maxPagingNumber;
        $endPageNumber = $endPageNumber > $totalPage ? $totalPage : $endPageNumber;

        $isPrev = $startPageNumber == 1 ? false : true;
        $isNext = $endPageNumber == $totalPage ? false : true;
    }

    public function getDBCountQuery($query)
    {
        return "SELECT COUNT(*) AS Total FROM ( ".$query." ) A";
    }

    /*public function getDBQuery($orderByClause)
    {
        return " * FROM (  SELECT  ROW_NUMBER() OVER("+ orderByClause+") AS NUMBER, ";
    }

    public string GetPagingCondition(string orderByClause)
    {
        return string.Format(" ) o WHERE o.NUMBER  " +
                                                " BETWEEN (({0} - 1)  * {1} + 1) " +
                                                " AND ({0} * {1})  " + orderByClause, CurrentPage, TotalRowsOnPage);
    }*/

}

?>