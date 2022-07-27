<?php

namespace Newageerp\SfCurrency\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder('nae_sfs_currency');

        return $builder;
    }
}