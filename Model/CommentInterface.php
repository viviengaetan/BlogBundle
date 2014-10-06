<?php

namespace GGTeam\BlogBundle\Model;

use Doctrine\Common\Collections\Collection;

/**
 * @author Gaëtan Verlhac <viviengaetan69@gmail.com>
 */
interface CommentInterface
{
    /**
     * Returns the comment author mail
     * @return string
     */
    public function getEmail();

    /**
     * Set the comment author mail
     * @param string $email
     * @return CommentInterface
     */
    public function setEmail($email);

    /**
     * Returns the comment title
     * @return string
     */
    public function getTitle();

    /**
     * Set the comment title
     * @param string $title
     * @return CommentInterface
     */
    public function setTitle($title);

    /**
     * Returns the comment body
     * @return string
     */
    public function getBody();

    /**
     * Set the comment body
     * @param string $body
     * @return CommentInterface
     */
    public function setBody($body);

    /**
     * Checks if the comment has been approved
     * @return bool
     */
    public function isApproved();

    /**
     * Set the state concerning the comment approvemen
     * @param bool $state
     * @return CommentInterface
     */
    public function setApproved($state);

    /**
     * Returns the comment creation date
     * @return \DateTime
     */
    public function getCreated();

    /**
     * Set the comment creation date
     * @param \DateTime $date
     * @return CommentInterface
     */
    public function setCreated(\DateTime $date);

    /**
     * Returns the comment update date
     * @return \DateTime
     */
    public function getUpdated();

    /**
     * Set the comment update date
     * @param \DateTime $date
     * @return CommentInterface
     */
    public function setUpdated(\DateTime $date);

    /**
     * Returns the article owning the comment
     * @return ArticleInterface
     */
    public function getArticle();

    /**
     * Returns the parent comment
     * @return CommentInterface
     */
    public function getParentComment();

    /**
     * Set the parent comment
     * @param CommentInterface $comment
     * @return CommentInterface
     */
    public function setParentComment(CommentInterface $comment);

    /**
     * Returns the children comments
     * @return Collection
     */
    public function getChildrenComments();
} 