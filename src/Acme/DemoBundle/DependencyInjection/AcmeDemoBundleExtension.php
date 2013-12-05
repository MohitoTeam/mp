<?php 
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\Config\FileLocator;

public function load(array $configs, ContainerBuilder $container) {
    // ...
    $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
    $loader->load('admin.yml');
}
?>