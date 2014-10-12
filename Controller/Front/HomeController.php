<?php

namespace GGTeam\BlogBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @author Gaëtan Verlhac <viviengaetan69@gmail.com>
 */
class HomeController extends Controller
{
    public function indexAction()
    {
        $articles = $this->get('gg_team_blog.article_manager')->findLatestArticles(0, 5);

        return $this->render(
            'GGTeamBlogBundle:Front\Home:index.html.twig',
            array('title' => $this->get('translator')->trans('Home'), 'articlesList' => $articles)
        );
    }
}