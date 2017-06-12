<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 11/06/17
 * Time: 23:04
 */

namespace BookBundle\Twig;


use Twig_Environment;

class TwigExtension extends \Twig_Extension
{

    public function getName()
    {
        return 'twig_extension';
    }

    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('basename', [$this, 'basenameFilter'])
        ];
    }

    /**
     * @var string $value
     * @return string
     */
    public function basenameFilter($value, $suffix = '')
    {
        return basename($value, $suffix);
    }

    public function initRuntime(Twig_Environment $environment)
    {
        // TODO: Implement initRuntime() method.
    }

    public function getGlobals()
    {
        // TODO: Implement getGlobals() method.
    }
}
