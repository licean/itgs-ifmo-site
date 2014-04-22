<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 21.04.14
 * Time: 16:41
 */

namespace Application\Sonata\PageBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class PageBundleExtension extends Extension {

	public function load(array $configs, ContainerBuilder $container)
	{
		$loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
		$loader->load('block.xml');
		$loader->load('twig.xml');
	}

	public function getAlias()
	{
		return 'acme_demo';
	}
}
