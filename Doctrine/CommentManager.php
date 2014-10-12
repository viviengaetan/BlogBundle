<?php

namespace GGTeam\BlogBundle\Doctrine;

use Doctrine\Common\Persistence\ObjectManager;
use GGTeam\BlogBundle\Model\CommentInterface;
use GGTeam\BlogBundle\Model\CommentManager as BaseCommentManager;

/**
 * @author Gaëtan Verlhac <viviengaetan69@gmail.com>
 */
class CommentManager extends BaseCommentManager
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
     * @param CommentInterface $article
     * @param Boolean           $andFlush Whether to flush the changes (default true)
     * @return void
     */
    public function updateComment(CommentInterface $article, $andFlush = true)
    {
        $this->objectManager->persist($article);
        if ($andFlush) {
            $this->objectManager->flush();
        }
    }
}
