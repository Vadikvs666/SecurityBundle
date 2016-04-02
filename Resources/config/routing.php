<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('login_route', new Route('/login', array(
    '_controller' => 'VVSSecurityBundle:Security:login',
)));

$collection->add('login_check', new Route('/login_check'));
$collection->add('logout', new Route('/logout'));





/*добавление роутинга к администрированию пользоывателей*/

$user=$loader->import("@VVSSecurityBundle/Resources/config/routing/user.php");
$user->addPrefix('vvs-admin/user');
$collection->addCollection($user);


return $collection;
