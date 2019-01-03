<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/graphiql' => array(array(array('_route' => 'overblog_graphiql_endpoint', '_controller' => 'Overblog\\GraphiQLBundle\\Controller\\GraphiQLController::indexAction'), null, null, null, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/graphiql/([^/]++)(*:25)'
                    .'|/_error/(\\d+)(?:\\.([^/]++))?(*:60)'
                .')(?:/?)$}sDu',
        );
        $this->dynamicRoutes = array(
            25 => array(array(array('_route' => 'overblog_graphiql_endpoint_multiple', '_controller' => 'Overblog\\GraphiQLBundle\\Controller\\GraphiQLController::indexAction'), array('schemaName'), null, null, false, null)),
            60 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, null)),
        );
    }
}
