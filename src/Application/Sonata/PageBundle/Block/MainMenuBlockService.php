<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 21.04.14
 * Time: 16:34
 */

namespace Application\Sonata\PageBundle\Block;


use Sonata\BlockBundle\Block\BaseBlockService;
use Sonata\PageBundle\Block\ChildrenPagesBlockService;
use Sonata\PageBundle\CmsManager\CmsManagerSelectorInterface;
use Sonata\PageBundle\Site\SiteSelectorInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Templating\EngineInterface;

class MainMenuBlockService extends ChildrenPagesBlockService{

	public function setDefaultSettings(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'current'  => false,
			'pageId'   => null,
			'title'    => '',
			'class'    => 'nav nav-pills',
			'active_class' => 'active',
			'container_class' => '',
			'template' => 'ApplicationSonataPageBundle:Block:block_core_children_pages.html.twig',
		));
	}


} 