<?php

namespace GGTeam\BlogBundle\Model;

/**
 * @author Gaëtan Verlhac <viviengaetan69@gmail.com>
 */
interface ArticleManagerInterface
{
    /**
     * Returns an empty article interface
     *
     * @return ArticleInterface
     */
    public function createArticle();

    /**
     * Updates an article
     *
     * @param ArticleInterface $article
     * @return void
     */
    public function updateArticle(ArticleInterface $article);

    /**
     * Finds articles by tag
     *
     * @param TagInterface $tag
     * @param int $start
     * @param int $number
     * @return \Traversable
     */
    public function findArticlesByTag(TagInterface $tag, $start = 0, $number = 5);

    /**
     * Finds the latest articles
     *
     * @param int $start
     * @param int $number
     * @return \Traversable
     */
    public function findLatestArticles($start = 0, $number = 5);

    /**
     * Returns the user's fully qualified class name.
     *
     * @return string
     */
    public function getClass();
}