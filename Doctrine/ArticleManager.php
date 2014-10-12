<?php

namespace GGTeam\BlogBundle\Doctrine;

use Doctrine\Common\Persistence\ObjectManager;
use GGTeam\BlogBundle\Model\ArticleInterface;
use GGTeam\BlogBundle\Model\ArticleManager as BaseArticleManager;
use GGTeam\BlogBundle\Model\TagInterface;

/**
 * @author Gaëtan Verlhac <viviengaetan69@gmail.com>
 */
class ArticleManager extends BaseArticleManager
{
    protected $objectManager;
    protected $class;
    protected $repository;

    /**
     * Constructor.
     *
     * @param ObjectManager  $om
     * @param string         $class
     */
    public function __construct(ObjectManager $om, $class)
    {
        $this->objectManager = $om;
        $this->repository = $om->getRepository($class);

        $metadata = $om->getClassMetadata($class);
        $this->class = $metadata->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Updates an article
     *
     * @param ArticleInterface $article
     * @param Boolean           $andFlush Whether to flush the changes (default true)
     * @return void
     */
    public function updateArticle(ArticleInterface $article, $andFlush = true)
    {
        $this->objectManager->persist($article);
        if ($andFlush) {
            $this->objectManager->flush();
        }
    }

    /**
     * @inheritdoc
     */
    public function findArticlesByTag(TagInterface $tag, $start = 0, $number = 5)
    {
        return $this->repository->findBy(array('tag' => $tag), array('created' => 'DESC'), $number, $start);
    }

    /**
     * @inheritdoc
     */
    public function findLatestArticles($start = 0, $number = 5)
    {
        return $this->repository->findBy(array(), array('created' => 'DESC'), $number, $start);
    }

}
