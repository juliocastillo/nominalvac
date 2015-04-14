<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/minsal/catalogo')) {
                if (0 === strpos($pathinfo, '/admin/minsal/catalogo/vacuna')) {
                    // admin_minsal_catalogo_vacuna_list
                    if ($pathinfo === '/admin/minsal/catalogo/vacuna/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.vacuna',  '_sonata_name' => 'admin_minsal_catalogo_vacuna_list',  '_route' => 'admin_minsal_catalogo_vacuna_list',);
                    }

                    // admin_minsal_catalogo_vacuna_create
                    if ($pathinfo === '/admin/minsal/catalogo/vacuna/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.vacuna',  '_sonata_name' => 'admin_minsal_catalogo_vacuna_create',  '_route' => 'admin_minsal_catalogo_vacuna_create',);
                    }

                    // admin_minsal_catalogo_vacuna_batch
                    if ($pathinfo === '/admin/minsal/catalogo/vacuna/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.vacuna',  '_sonata_name' => 'admin_minsal_catalogo_vacuna_batch',  '_route' => 'admin_minsal_catalogo_vacuna_batch',);
                    }

                    // admin_minsal_catalogo_vacuna_edit
                    if (preg_match('#^/admin/minsal/catalogo/vacuna/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_catalogo_vacuna_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.vacuna',  '_sonata_name' => 'admin_minsal_catalogo_vacuna_edit',));
                    }

                    // admin_minsal_catalogo_vacuna_delete
                    if (preg_match('#^/admin/minsal/catalogo/vacuna/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_catalogo_vacuna_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.vacuna',  '_sonata_name' => 'admin_minsal_catalogo_vacuna_delete',));
                    }

                    // admin_minsal_catalogo_vacuna_show
                    if (preg_match('#^/admin/minsal/catalogo/vacuna/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_catalogo_vacuna_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.vacuna',  '_sonata_name' => 'admin_minsal_catalogo_vacuna_show',));
                    }

                    // admin_minsal_catalogo_vacuna_export
                    if ($pathinfo === '/admin/minsal/catalogo/vacuna/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.vacuna',  '_sonata_name' => 'admin_minsal_catalogo_vacuna_export',  '_route' => 'admin_minsal_catalogo_vacuna_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/minsal/catalogo/estado')) {
                    // admin_minsal_catalogo_estado_list
                    if ($pathinfo === '/admin/minsal/catalogo/estado/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.estado',  '_sonata_name' => 'admin_minsal_catalogo_estado_list',  '_route' => 'admin_minsal_catalogo_estado_list',);
                    }

                    // admin_minsal_catalogo_estado_create
                    if ($pathinfo === '/admin/minsal/catalogo/estado/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.estado',  '_sonata_name' => 'admin_minsal_catalogo_estado_create',  '_route' => 'admin_minsal_catalogo_estado_create',);
                    }

                    // admin_minsal_catalogo_estado_batch
                    if ($pathinfo === '/admin/minsal/catalogo/estado/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.estado',  '_sonata_name' => 'admin_minsal_catalogo_estado_batch',  '_route' => 'admin_minsal_catalogo_estado_batch',);
                    }

                    // admin_minsal_catalogo_estado_edit
                    if (preg_match('#^/admin/minsal/catalogo/estado/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_catalogo_estado_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.estado',  '_sonata_name' => 'admin_minsal_catalogo_estado_edit',));
                    }

                    // admin_minsal_catalogo_estado_delete
                    if (preg_match('#^/admin/minsal/catalogo/estado/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_catalogo_estado_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.estado',  '_sonata_name' => 'admin_minsal_catalogo_estado_delete',));
                    }

                    // admin_minsal_catalogo_estado_show
                    if (preg_match('#^/admin/minsal/catalogo/estado/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_catalogo_estado_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.estado',  '_sonata_name' => 'admin_minsal_catalogo_estado_show',));
                    }

                    // admin_minsal_catalogo_estado_export
                    if ($pathinfo === '/admin/minsal/catalogo/estado/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.estado',  '_sonata_name' => 'admin_minsal_catalogo_estado_export',  '_route' => 'admin_minsal_catalogo_estado_export',);
                    }

                }

            }

        }

        // minsal_catalogo_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'minsal_catalogo_homepage')), array (  '_controller' => 'Minsal\\CatalogoBundle\\Controller\\DefaultController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
