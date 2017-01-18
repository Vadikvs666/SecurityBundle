<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('login', new Route('/login', array(
    '_controller' => 'VVSSecurityBundle:Security:login',
)));
$collection->add('login_check', new Route('/login_check'));
$collection->add('logout', new Route('/logout'));





/*добавление роутинга к администрированию пользователей и ролей*/

$user=$loader->import("@VVSSecurityBundle/Resources/config/routing/user.php");
$user->addPrefix('vvs-admin/user');
$collection->addCollection($user);

$user=$loader->import("@VVSSecurityBundle/Resources/config/routing/role.php");
$user->addPrefix('vvs-admin/role');
$collection->addCollection($user);


return $collection;
