<?php

namespace GGTeam\BlogBundle\Model;

/**
 * Abstract Article Manager implementation.
 * Can be used as base class for a concrete manager.
 *
 * @author Gaëtan Verlhac <viviengaetan69@gmail.com>
 */
abstract class ArticleManager implements ArticleManagerInterface
{
    /**
     * @inheritdoc
     */
    public function createArticle()
    {
        $class = $this->getClass();

        return new $class;
    }

}