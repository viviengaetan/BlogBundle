<?php

namespace GGTeam\BlogBundle\Model;

use Doctrine\Common\Collections\Collection;

/**
 * @author Gaëtan Verlhac <viviengaetan69@gmail.com>
 */
interface TagInterface
{
    /**
     * Returns the tag
     * @return string
     */
    public function getTag();

    /**
     * Sets the tag
     * @param string $tag
     * @return TagInterface
     */
    public function setTag($tag);

    /**
     * Returns the list of articles referencing the tag
     * @return Collection
     */
    public function getArticles();
}