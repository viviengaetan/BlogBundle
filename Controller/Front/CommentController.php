<?php

namespace GGTeam\BlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @author Gaëtan Verlhac <viviengaetan69@gmail.com>
 */
class CommentController extends Controller
{
    public function addAction($articleId)
    {
        return $this->render('GGTeamBlogBundle:Home:index.html.twig');
    }
}