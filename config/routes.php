<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 * Cache: Routes are cached to improve performance, check the RoutingMiddleware
 * constructor in your `src/Application.php` file to change this behavior.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/:controller/action/*', ['controller' => 'Pages']);
    $routes->connect('/get_all_tours/*', ['controller' => 'Pages', 'action' => 'getAllTours']);
    $routes->connect('/:action/*', ['controller' => 'Pages']);
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'home']);


    $routes->connect('/tours', ['controller' => 'Pages', 'action' => 'tours']);
    $routes->connect('/open_tour', ['controller' => 'Pages', 'action' => 'open_tour']);
    $routes->connect('/booking', ['controller' => 'Pages', 'action' => 'booking']);
    $routes->connect('/all_foto', ['controller' => 'Pages', 'action' => 'all_foto']);
    $routes->connect('/album/*', ['controller' => 'Pages', 'action' => 'open_foto']);
    $routes->connect('/about', ['controller' => 'Pages', 'action' => 'about']);
    $routes->connect('/error404', ['controller' => 'Pages', 'action' => 'error404']);
    $routes->connect('/thank', ['controller' => 'Pages', 'action' => 'thank']);


    $routes->fallbacks(DashedRoute::class);
});


Router::prefix('admin', function ($routes) {
    $routes->connect('/', ['controller' => 'Admin', 'action' => 'login']);

    $routes->connect('/reg', ['controller' => 'Admin', 'action' => 'reg']);

    $routes->connect('/login', ['controller' => 'Admin', 'action' => 'login']);

    $routes->connect('/:action', ['controller' => 'Admin']);

    $routes->connect('/:controller/action/*', ['controller' => 'Admin']);
    $routes->connect('/:controller/action/*', ['controller' => 'Pages']);

    $routes->connect('/deleteOrder/*', ['controller' => 'Admin', 'action' => 'deleteOrder']);
    $routes->connect('/deleteCall/*', ['controller' => 'Admin', 'action' => 'deleteCall']);

    $routes->fallbacks('DashedRoute');
});
