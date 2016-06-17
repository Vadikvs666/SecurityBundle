<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('vvs-admin_role_index', new Route(
    '/',
    array('_controller' => 'VVSSecurityBundle:Role:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('vvs-admin_role_show', new Route(
    '/{id}/show',
    array('_controller' => 'VVSSecurityBundle:Role:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('vvs-admin_role_new', new Route(
    '/new',
    array('_controller' => 'VVSSecurityBundle:Role:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('vvs-admin_role_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'VVSSecurityBundle:Role:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('vvs-admin_role_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'VVSSecurityBundle:Role:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
