<?php

namespace GGTeam\BlogBundle\Model;

use Doctrine\Common\Collections\Collection;

/**
 * @author Gaëtan Verlhac <viviengaetan69@gmail.com>
 */
interface ArticleInterface
{

    /**
     * Returns the article author
     * @return User
     */
    public function getAuthor();

    /**
     * Set the article author
     * @param User $author
     * @return User
     */
    public function setAuthor(User $author);

    /**
     * Returns the article creation date
     * @return \DateTime
     */
    public function getCreated();

    /**
     * Set the article creation date
     * @param \DateTime $date
     * @return ArticleInterface
     */
    public function setCreated(\DateTime $date);

    /**
     * Returns the article update date
     * @return \DateTime
     */
    public function getUpdated();

    /**
     * Set the article update date
     * @param \DateTime $date
     * @return ArticleInterface
     */
    public function setUpdated(\DateTime $date);

    /**
     * Returns the article title
     * @return string
     */
    public function getTitle();

    /**
     * Set the article title
     * @param string $title
     * @return ArticleInterface
     */
    public function setTitle($title);

    /**
     * Returns the article body
     * @return string
     */
    public function getBody();

    /**
     * Set the article body
     * @param string $body
     * @return ArticleInterface
     */
    public function setBody($body);

    /**
     * Returns the article image
     * @return string
     */
    public function getImage();

    /**
     * Set the article image
     * @param string $image
     * @return ArticleInterface
     */
    public function setImage($image);

    /**
     * Returns the article comments
     * @return Collection
     */
    public function getComments();

    /**
     * Set the article comments
     * @param Collection $comments
     * @return ArticleInterface
     */
    public function setComments(Collection $comments);

    /**
     * Add a comment to the article
     * @param CommentInterface $comment
     * @return ArticleInterface
     */
    public function addComment(CommentInterface $comment);

    /**
     * Remove a comment to the article
     * @param CommentInterface $comment
     * @return ArticleInterface
     */
    public function removeComment(CommentInterface $comment);

    /**
     * Returns the article tags
     * @return Collection
     */
    public function getTags();

    /**
     * Set the article tags
     * @param Collection $tags
     * @return ArticleInterface
     */
    public function setTags(Collection $tags);

    /**
     * Add the tag to the article
     * @param TagInterface $tag
     * @return ArticleInterface
     */
    public function addTag(TagInterface $tag);

    /**
     * Remove the tag from the article
     * @param TagInterface $tag
     * @return ArticleInterface
     */
    public function removeTag(TagInterface $tag);
} 