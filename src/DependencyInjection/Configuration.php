<?php

namespace Nalogka\DoctrineReconnectBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('doctrine_reconnect');

        $treeBuilder->getRootNode()
            ->children()
            ->integerNode('seconds_between_pings')->defaultValue(28000)->end()
            ->end();

        return $treeBuilder;
    }
}