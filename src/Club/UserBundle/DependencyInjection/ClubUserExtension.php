<?php

namespace Club\UserBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;

class ClubUserExtension extends Extension
{
  public function load(array $configs, ContainerBuilder $container)
  {
    $loader = new YamlFileLoader($container,new FileLocator(__DIR__.'/../Resources/config'));
    $loader->load('config.yml');
    $loader->load('listener.yml');
    $loader->load('twig.yml');
  }
}
