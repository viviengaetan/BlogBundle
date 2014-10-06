<?php

namespace GGTeam\BlogBundle\Model;

/**
 * Abstract Comment Manager implementation.
 * Can be used as base class for a concrete manager.
 *
 * @author Gaëtan Verlhac <viviengaetan69@gmail.com>
 */
abstract class CommentManager implements CommentManagerInterface
{
    /**
     * @inheritdoc
     */
    public function createComment()
    {
        $class = $this->getClass();

        return new $class;
    }

    /**
     * @inheritdoc
     */
    public function validateComment(CommentInterface $comment)
    {
        $comment->setApproved(true);
    }

}