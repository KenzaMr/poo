<?php
class Book
{
    /**
     * @var string
     */
    private string $title;

    /**
     * @var string
     */

    private string $author;
    /**
     * @var int
     */

    private int $pages;

    /**
     * @var int
     */
    private int $year;

    public function __construct($title, $author,$pages,$anne)
    {
        $this->title=$title;
        $this->author=$author;
        $this->pages=$pages;
        $this->year=$anne;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * 
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }


    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }


    /**
     * Get the value of pages
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Set the value of pages
     *
     * @return  self
     */
    public function setPages($pages)
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * Get the value of year
     *
     * @return  int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of year
     *
     * @param  int  $year
     *
     * @return  self
     */
    public function setYear(int $year)
    {
        $this->year = $year;

        return $this;
    }

    public function read()
    {
        return "Je lis le livre $this->title écrit par $this->author";
    }
    
}
