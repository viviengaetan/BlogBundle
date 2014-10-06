<?php

namespace GGTeam\BlogBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @author Gaëtan Verlhac <viviengaetan69@gmail.com>
 */
abstract class Article implements ArticleInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var User
     */
    protected $author;

    /**
     * @var \DateTime
     */
    protected $created;

    /**
     * @var \DateTime
     */
    protected $updated;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $body;

    /**
     * @var string
     */
    protected $image;

    /**
     * @var Collection
     */
    protected $comments;

    /**
     * @var Collection
     */
    protected $tags;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->created = new \DateTime();
        $this->comments = new ArrayCollection();
        $this->tags = new ArrayCollection();
    }


    /**
     * @inheritdoc
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @inheritdoc
     */
    public function setAuthor(User $author)
    {
        $this->author = $author;

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
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @inheritdoc
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @inheritdoc
     */
    public function setComments(Collection $comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function addComment(CommentInterface $comment)
    {
        if (!$this->comments->contains($comment)) {
            $this->comments->add($comment);
        }
    }

    /**
     * @inheritdoc
     */
    public function removeComment(CommentInterface $comment)
    {
        if ($this->comments->contains($comment)) {
            $this->comments->removeElement($comment);
        }
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @inheritdoc
     */
    public function setTags(Collection $tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function addTag(TagInterface $tag)
    {
        if (!($this->tags->contains($tag))) {
            $this->tags->add($tag);
        }

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function removeTag(TagInterface $tag)
    {
        if (($this->tags->contains($tag))) {
            $this->tags->removeElement($tag);
        }

        return $this;
    }
}