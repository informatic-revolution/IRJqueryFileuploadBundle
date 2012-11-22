<?php

namespace IR\JqueryFileuploadBundle\Templating\Helper;

use Symfony\Component\Templating\Helper\Helper;
use Symfony\Component\Templating\EngineInterface;

/**
 * Provides some templating helpers.
 *
 * @author Julien Kirsch <informatic.revolution@gmail.com>
 */
class JqueryFileuploadHelper extends Helper
{
    /**
     * @var \Symfony\Component\Templating\EngineInterface
     */       
    protected $templating;

    /**
     * Constructor.
     *
     * @param \Symfony\Component\Templating\EngineInterface $templating
     */    
    public function __construct(EngineInterface $templating)
    {
        $this->templating = $templating;
    }

    /**
    * Returns the HTML necessary for initializing the JqueryFileupload plugin.
    *
    * @return string
    */
    public function initialize()
    {
        return $this->templating->render('IRJqueryFileuploadBundle::initialize.html.twig');
    }

    /**
     * {@inheritDoc}
     */  
    public function getName()
    {
        return 'jquery_fileupload';
    }
}