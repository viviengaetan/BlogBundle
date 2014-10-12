<?php

namespace GGTeam\BlogBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class GGTeamBlogExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.xml');

        if ('custom' !== $config['db_driver']) {
            $loader->load(sprintf('%s.xml', $config['db_driver']));
            $container->setParameter($this->getAlias() . '.backend_type_' . $config['db_driver'], true);
        }
        $container->setParameter('gg_team_blog.model.article.class', $config['article']['article_class']);
        $container->setParameter('gg_team_blog.model.comment.class', $config['comment']['comment_class']);
        $container->setParameter('gg_team_blog.model_manager_name', $config['model_manager_name']);

        $container->setAlias('gg_team_blog.article_manager', $config['article']['article_manager']);
        $container->setAlias('gg_team_blog.comment_manager', $config['comment']['comment_manager']);
    }
}