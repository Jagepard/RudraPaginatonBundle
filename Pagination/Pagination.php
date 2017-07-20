<?php

namespace Rudra\PaginationBundle\Pagination;

class Pagination
{

    /**
     * @var
     */
    protected $page;

    /**
     * @var
     */
    protected $perPage;

    /**
     * @var
     */
    protected $count;

    /**
     * Pagination constructor.
     *
     * @param $value
     */
    public function __construct($value)
    {
        $this->setPerPage($value);
    }

    /**
     * @param $value
     */
    public function init($value)
    {
        $this->page = (int) $value;
    }

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @return mixed
     */
    public function getPerPage()
    {
        return $this->perPage;
    }

    /**
     * @param mixed $perPage
     */
    public function setPerPage($perPage)
    {
        $this->perPage = $perPage;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param mixed $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @return mixed
     */
    public function getOffset()
    {
        return $this->getPage() * $this->getPerPage() - $this->getPerPage();
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return ceil($this->getCount() / $this->getPerPage());
    }

    /**
     * @return array
     */
    public function getLinks()
    {
        for ($i = 1; $i <= $this->getTotal(); $i++) {
            $links[] = $i;
        }

        return $links;
    }

    /**
     * @param $link
     */
    public function activeClass($link)
    {
        if ($this->getPage() == $link) {
            echo 'class="active"';
        }
    }
}
