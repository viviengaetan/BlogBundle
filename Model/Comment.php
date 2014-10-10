<?php

namespace GGTeam\BlogBundle\Model;

use Doctrine\Common\Collections\Collection;

/**
 * @author Gaëtan Verlhac <viviengaetan69@gmail.com>
 */
abstract class Comment implements CommentInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $body;

    /**
     * @var bool
     */
    protected $approved;

    /**
     * @var \DateTime
     */
    protected $created;

    /**
     * @var \DateTime
     */
    protected $updated;

    /**
     * @var ArticleInterface
     */
    protected $article;

    /**
     * @var CommentInterface
     */
    protected $parentComment;

    /**
     * @var Collection
     */
    protected $childrenComments;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->created = new \DateTime();
        $this->approved = false;
    }


    /**
     * @inheritdoc
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @inheritdoc
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @inheritdoc
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @inheritdoc
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function isApproved()
    {
        return $this->approved;
    }

    /**
     * @inheritdoc
     */
    public function setApproved($state)
    {
        $this->approved = $state;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @inheritdoc
     */
    public function setCreated(\DateTime $date)
    {
        $this->created = $date;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @inheritdoc
     */
    public function setUpdated(\DateTime $date)
    {
        $this->updated = $date;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getArticle()
    {
        return $this->article;
    }


    /**
     * @inheritdoc
     */
    public function getParentComment()
    {
        return $this->parentComment;
    }

    /**
     * @inheritdoc
     */
    public function setParentComment(CommentInterface $comment)
    {
        $this->parentComment = $comment;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getChildrenComments()
    {
        return $this->childrenComments;
    }
}