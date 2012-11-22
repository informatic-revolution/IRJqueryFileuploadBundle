<?php

namespace IR\JqueryFileuploadBundle\Twig\Extension;

use IR\JqueryFileuploadBundle\Templating\Helper\JqueryFileuploadHelper;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Extends Twig to provide some helper functions.
 *
 * @author Julien Kirsch <informatic.revolution@gmail.com>
 */
class JqueryFileuploadExtension extends \Twig_Extension
{
    /**
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */    
    protected $container;

    /**
     * Constructor.
     *
     * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * {@inheritdoc}
     */    
    public function getFunctions()
    {
        return array(
            'ir_jquery_fileupload_initialize' => new \Twig_Function_Method($this, 'renderInitialize'),
        );
    }

    /**
     * JqueryFileupload initializations.
     *
     * @return string
     */
    public function renderInitialize()
    {
        //return $this->container->get('fos_facebook.helper')->initialize($parameters, $name ?: 'FOSFacebookBundle::initialize.html.twig');
    }

    /**
     * {@inheritDoc}
     */  
    public function getName()
    {
        return 'ir_jquery_fileupload';
    }    
}