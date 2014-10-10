<?php

namespace GGTeam\BlogBundle\Model;

/**
 * @author Gaëtan Verlhac <viviengaetan69@gmail.com>
 */
interface CommentManagerInterface
{
    /**
     * Returns an empty comment interface
     *
     * @return CommentInterface
     */
    public function createComment();

    /**
     * Updates a comment
     *
     * @param CommentInterface $comment
     * @return void
     */
    public function updateComment(CommentInterface $comment);

    /**
     * Validates a comment
     *
     * @param CommentInterface $comment
     * @return void
     */
    public function validateComment(CommentInterface $comment);

    /**
     * Returns the user's fully qualified class name.
     *
     * @return string
     */
    public function getClass();
}