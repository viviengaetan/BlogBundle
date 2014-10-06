<?php

namespace GGTeam\BlogBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @author Gaëtan Verlhac <viviengaetan69@gmail.com>
 */
abstract class Tag implements TagInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $tag;

    /**
     * @var Collection
     */
    protected $articles;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->articles = new ArrayCollection();
    }


    /**
     * Returns the tag unique id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @inheritdoc
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getArticles()
    {
        return $this->articles;
    }
}