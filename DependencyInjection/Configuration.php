<?php

namespace GGTeam\BlogBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('gg_team_blog');


        $supportedDrivers = array('orm');

        $rootNode
            ->children()
                ->scalarNode('db_driver')
                    ->validate()
                        ->ifNotInArray($supportedDrivers)
                        ->thenInvalid('The driver %s is not supported. Please choose one of '.json_encode($supportedDrivers))
                    ->end()
                    ->cannotBeOverwritten()
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('model_manager_name')->defaultNull()->end()
                ->booleanNode('auto_validate_comment')->defaultTrue()->end()
                ->arrayNode('email')
                    ->addDefaultsIfNotSet()
                    ->canBeUnset()
                    ->children()
                        ->booleanNode('on_comment')->defaultTrue()->end()
                    ->end()
                ->end();

        $this->addArticleSection($rootNode);
        $this->addCommentSection($rootNode);
        $this->addTagSection($rootNode);

        return $treeBuilder;
    }

    private function addArticleSection(ArrayNodeDefinition $node)
    {
        $node
            ->children()
                ->arrayNode('article')
                    ->addDefaultsIfNotSet()
                    ->canBeUnset()
                    ->children()
                        ->scalarNode('article_class')->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode('article_manager')->defaultValue('gg_team_blog.article_manager.default')->end()
                        ->arrayNode('form')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode('type')->defaultValue('ggteam_article')->end()
                                ->scalarNode('name')->defaultValue('ggteam_article_form')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end();
    }

    private function addCommentSection(ArrayNodeDefinition $node)
    {
        $node
            ->children()
                ->arrayNode('comment')
                    ->addDefaultsIfNotSet()
                    ->canBeUnset()
                    ->children()
                        ->scalarNode('comment_class')->isRequired()->cannotBeEmpty()->end()
                        ->scalarNode('comment_manager')->defaultValue('gg_team_blog.comment_manager.default')->end()
                        ->arrayNode('form')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode('type')->defaultValue('ggteam_comment')->end()
                                ->scalarNode('name')->defaultValue('ggteam_comment_form')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end();
    }

    private function addTagSection(ArrayNodeDefinition $node)
    {
        $node
            ->children()
                ->arrayNode('tag')
                    ->addDefaultsIfNotSet()
                    ->canBeUnset()
                    ->children()
                        ->scalarNode('tag_class')->isRequired()->cannotBeEmpty()->end()
                    ->end()
                ->end()
            ->end();
    }
}