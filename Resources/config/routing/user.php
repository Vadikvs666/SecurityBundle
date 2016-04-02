<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('user', new Route('/', array(
    '_controller' => 'VVSSecurityBundle:User:index',
)));

$collection->add('user_show', new Route('/{id}/show', array(
    '_controller' => 'VVSSecurityBundle:User:show',
)));

$collection->add('user_new', new Route('/new', array(
    '_controller' => 'VVSSecurityBundle:User:new',
)));

$collection->add('user_create', new Route(
    '/create',
    array('_controller' => 'VVSSecurityBundle:User:create'),
    array(),
    array(),
    '',
    array(),
    'POST'
));

$collection->add('user_edit', new Route('/{id}/edit', array(
    '_controller' => 'VVSSecurityBundle:User:edit',
)));

$collection->add('user_update', new Route(
    '/{id}/update',
    array('_controller' => 'VVSSecurityBundle:User:update'),
    array(),
    array(),
    '',
    array(),
    array('POST', 'PUT')
));

$collection->add('user_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'VVSSecurityBundle:User:delete'),
    array(),
    array(),
    '',
    array(),
    array('POST', 'DELETE')
));

return $collection;
