<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('vvs-admin_index', new Route(
    '/',
    array('_controller' => 'VVSSecurityBundle:User:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('vvs-admin_show', new Route(
    '/{id}/show',
    array('_controller' => 'VVSSecurityBundle:User:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('vvs-admin_new', new Route(
    '/new',
    array('_controller' => 'VVSSecurityBundle:User:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('vvs-admin_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'VVSSecurityBundle:User:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('vvs-admin_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'VVSSecurityBundle:User:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
