<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/subtasques')) {
            // subtasques_index
            if (preg_match('#^/subtasques/(?P<idTasca>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_subtasques_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'subtasques_index')), array (  '_controller' => 'pets\\WebBundle\\Controller\\SubtasquesController::llistaSubtasquesAction',));
            }
            not_subtasques_index:

            // subtasques_show
            if (preg_match('#^/subtasques/(?P<idSubtasca>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_subtasques_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'subtasques_show')), array (  '_controller' => 'pets\\WebBundle\\Controller\\SubtasquesController::showAction',));
            }
            not_subtasques_show:

            // subtasques_new
            if ('/subtasques/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_subtasques_new;
                }

                return array (  '_controller' => 'pets\\WebBundle\\Controller\\SubtasquesController::newAction',  '_route' => 'subtasques_new',);
            }
            not_subtasques_new:

            // subtasques_edit
            if (preg_match('#^/subtasques/(?P<idSubtasca>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_subtasques_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'subtasques_edit')), array (  '_controller' => 'pets\\WebBundle\\Controller\\SubtasquesController::editAction',));
            }
            not_subtasques_edit:

            // subtasques_delete
            if (preg_match('#^/subtasques/(?P<idSubtasca>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_subtasques_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'subtasques_delete')), array (  '_controller' => 'pets\\WebBundle\\Controller\\SubtasquesController::deleteAction',));
            }
            not_subtasques_delete:

        }

        elseif (0 === strpos($pathinfo, '/tasques')) {
            // tasques_index
            if ('/tasques' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_tasques_index;
                }

                $ret = array (  '_controller' => 'pets\\WebBundle\\Controller\\TasquesController::indexAction',  '_route' => 'tasques_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'tasques_index'));
                }

                return $ret;
            }
            not_tasques_index:

            // tasques_show
            if (preg_match('#^/tasques/(?P<idTasca>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_tasques_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tasques_show')), array (  '_controller' => 'pets\\WebBundle\\Controller\\TasquesController::showAction',));
            }
            not_tasques_show:

            // tasques_new
            if ('/tasques/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_tasques_new;
                }

                return array (  '_controller' => 'pets\\WebBundle\\Controller\\TasquesController::newAction',  '_route' => 'tasques_new',);
            }
            not_tasques_new:

            // tasques_edit
            if (preg_match('#^/tasques/(?P<idTasca>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_tasques_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tasques_edit')), array (  '_controller' => 'pets\\WebBundle\\Controller\\TasquesController::editAction',));
            }
            not_tasques_edit:

            // tasques_delete
            if (preg_match('#^/tasques/(?P<idTasca>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_tasques_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tasques_delete')), array (  '_controller' => 'pets\\WebBundle\\Controller\\TasquesController::deleteAction',));
            }
            not_tasques_delete:

        }

        elseif (0 === strpos($pathinfo, '/usuaris')) {
            // usuaris_index
            if ('/usuaris' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_usuaris_index;
                }

                $ret = array (  '_controller' => 'pets\\WebBundle\\Controller\\UsuarisController::indexAction',  '_route' => 'usuaris_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'usuaris_index'));
                }

                return $ret;
            }
            not_usuaris_index:

            // usuaris_show
            if (preg_match('#^/usuaris/(?P<idUsuari>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_usuaris_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuaris_show')), array (  '_controller' => 'pets\\WebBundle\\Controller\\UsuarisController::showAction',));
            }
            not_usuaris_show:

            // usuaris_new
            if ('/usuaris/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_usuaris_new;
                }

                return array (  '_controller' => 'pets\\WebBundle\\Controller\\UsuarisController::newAction',  '_route' => 'usuaris_new',);
            }
            not_usuaris_new:

            // usuaris_edit
            if (preg_match('#^/usuaris/(?P<idUsuari>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_usuaris_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuaris_edit')), array (  '_controller' => 'pets\\WebBundle\\Controller\\UsuarisController::editAction',));
            }
            not_usuaris_edit:

            // usuaris_delete
            if (preg_match('#^/usuaris/(?P<idUsuari>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_usuaris_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuaris_delete')), array (  '_controller' => 'pets\\WebBundle\\Controller\\UsuarisController::deleteAction',));
            }
            not_usuaris_delete:

        }

        // pets_web_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'pets\\WebBundle\\Controller\\DefaultController::indexAction',  '_route' => 'pets_web_homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pets_web_homepage'));
            }

            return $ret;
        }

        // pets_web_formUsuaris
        if ('/formUsuaris' === $pathinfo) {
            return array (  '_controller' => 'petsWebBundle:FormsUsuaris:create',  '_route' => 'pets_web_formUsuaris',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // pets_web_login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'pets\\WebBundle\\Controller\\FormsLoginController::loginAction',  '_route' => 'pets_web_login',);
            }

            // pets_web_logued
            if ('/logued' === $pathinfo) {
                return array (  '_controller' => 'pets\\WebBundle\\Controller\\FormsLoginController::loguedAction',  '_route' => 'pets_web_logued',);
            }

            // pets_web_logout
            if ('/logout' === $pathinfo) {
                return array (  '_controller' => 'pets\\WebBundle\\Controller\\FormsLoginController::logoutAction',  '_route' => 'pets_web_logout',);
            }

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
