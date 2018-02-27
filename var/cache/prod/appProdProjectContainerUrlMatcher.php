<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // pets_web_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'pets\\WebBundle\\Controller\\DefaultController::indexAction',  '_route' => 'pets_web_homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pets_web_homepage'));
            }

            return $ret;
        }

        // vallbona_web_homepage
        if ('/public-web/home' === $pathinfo) {
            return array (  '_controller' => 'Vallbona\\WebBundle\\Controller\\DefaultController::indexAction',  '_route' => 'vallbona_web_homepage',);
        }

        if (0 === strpos($pathinfo, '/public-web/articles')) {
            // vallbona_web_articles
            if ('/public-web/articles' === $pathinfo) {
                return array (  '_controller' => 'Vallbona\\WebBundle\\Controller\\DefaultController::articlesAction',  '_route' => 'vallbona_web_articles',);
            }

            // vallbona_web_articlesDetall
            if (preg_match('#^/public\\-web/articles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vallbona_web_articlesDetall')), array (  '_controller' => 'Vallbona\\WebBundle\\Controller\\DefaultController::articlesDetallAction',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
