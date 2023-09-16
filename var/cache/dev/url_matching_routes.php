<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/update' => [[['_route' => 'app_cart_update', '_controller' => 'App\\Controller\\CartController::update'], null, null, null, true, false, null]],
        '/admin/category' => [[['_route' => 'app_admin_add_cate', '_controller' => 'App\\Controller\\CategoryController::addcate'], null, null, null, false, false, null]],
        '/admin/listcate' => [[['_route' => 'app_product_list_cate', '_controller' => 'App\\Controller\\CategoryController::listcate'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/admin/needhelp' => [[['_route' => 'app_admin_request', '_controller' => 'App\\Controller\\ContactController::list'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\InformationController::index'], null, null, null, false, false, null]],
        '/privacy' => [[['_route' => 'app_privacy', '_controller' => 'App\\Controller\\InformationController::privacy'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\InformationController::home'], null, null, null, false, false, null]],
        '/home/user' => [[['_route' => 'app_home_user', '_controller' => 'App\\Controller\\InformationController::homeuser'], null, null, null, false, false, null]],
        '/order' => [[['_route' => 'app_order', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/admin/order/list' => [[['_route' => 'app_order_list', '_controller' => 'App\\Controller\\OrderController::list'], null, null, null, false, false, null]],
        '/admin/itemlist' => [[['_route' => 'itemlist', '_controller' => 'App\\Controller\\OrderController::item'], null, null, null, false, false, null]],
        '/payment' => [[['_route' => 'app_payment', '_controller' => 'App\\Controller\\PaymentController::index'], null, null, null, false, false, null]],
        '/checkout' => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\PaymentController::index1'], null, null, null, false, false, null]],
        '/success-url' => [[['_route' => 'ok', '_controller' => 'App\\Controller\\PaymentController::success'], null, null, null, false, false, null]],
        '/cancel-url' => [[['_route' => 'notokmeowmeow', '_controller' => 'App\\Controller\\PaymentController::ind2ex'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'app_product', '_controller' => 'App\\Controller\\ProductController::userlist'], null, null, null, false, false, null]],
        '/admin/product' => [[['_route' => 'app_admin_add', '_controller' => 'App\\Controller\\ProductController::add'], null, null, null, false, false, null]],
        '/admin/product/list' => [[['_route' => 'app_product_list', '_controller' => 'App\\Controller\\ProductController::list'], null, null, null, false, false, null]],
        '/profile/edit' => [[['_route' => 'app_edit_profile', '_controller' => 'App\\Controller\\ProfileController::editProfile'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::showProfile'], null, null, null, false, false, null]],
        '/profile/delete' => [[['_route' => 'app_delete_account', '_controller' => 'App\\Controller\\ProfileController::deleteAccount'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/add/staff' => [[['_route' => 'app_add_staff', '_controller' => 'App\\Controller\\StaffController::index'], null, null, null, false, false, null]],
        '/staff' => [[['_route' => 'app_staff', '_controller' => 'App\\Controller\\StaffController::list_staff'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'app_login4admin', '_controller' => 'App\\Controller\\UserController::login'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\UserController::loginadmin'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'user_list', '_controller' => 'App\\Controller\\UserController::userList'], null, null, null, false, false, null]],
        '/admin/user/add' => [[['_route' => 'add_user', '_controller' => 'App\\Controller\\UserController::addUser'], null, null, null, false, false, null]],
        '/user/manager' => [[['_route' => 'app_user_manager', '_controller' => 'App\\Controller\\UserManagerController::index'], null, null, null, false, false, null]],
        '/user/manager/add' => [[['_route' => 'app_add_user_manager', '_controller' => 'App\\Controller\\UserManagerController::add'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/c(?'
                    .'|a(?'
                        .'|rt/(?'
                            .'|add/([^/]++)(*:196)'
                            .'|remove/([^/]++)(*:219)'
                        .')'
                        .'|te(?'
                            .'|([^/]++)(?'
                                .'|(*:244)'
                                .'|/delete(*:259)'
                            .')'
                            .'|staff/([^/]++)(*:282)'
                        .')'
                    .')'
                    .'|hange([^/]++)(*:305)'
                .')'
                .'|/admin/(?'
                    .'|contact/delete/([^/]++)(*:347)'
                    .'|order/([^/]++)(*:369)'
                    .'|detailproduct([^/]++)(*:398)'
                    .'|user/(?'
                        .'|edit/([^/]++)(*:427)'
                        .'|delete/([^/]++)(*:450)'
                    .')'
                .')'
                .'|/product([^/]++)(?'
                    .'|(*:479)'
                    .'|/delete(*:494)'
                .')'
                .'|/detailproduct([^/]++)(*:525)'
                .'|/edit/staff/([^/]++)(*:553)'
                .'|/staff/([^/]+)delete(*:581)'
                .'|/user([^/]++)/delete(*:609)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        196 => [[['_route' => 'app_cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['product_id'], ['POST' => 0], null, false, true, null]],
        219 => [[['_route' => 'app_cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['product_id'], null, null, false, true, null]],
        244 => [[['_route' => 'app_edit_cate', '_controller' => 'App\\Controller\\CategoryController::editcate'], ['id'], null, null, false, true, null]],
        259 => [[['_route' => 'app_delete_cate', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], null, null, false, false, null]],
        282 => [[['_route' => 'app_staff_catestaff', '_controller' => 'App\\Controller\\StaffController::listSPinCate'], ['id'], null, null, false, true, null]],
        305 => [[['_route' => 'app_mark', '_controller' => 'App\\Controller\\OrderController::change'], ['id'], null, null, false, true, null]],
        347 => [[['_route' => 'app_admin_delete', '_controller' => 'App\\Controller\\ContactController::delete'], ['id'], null, null, false, true, null]],
        369 => [[['_route' => 'app_orderitem_view', '_controller' => 'App\\Controller\\OrderController::vieworderitem'], ['id'], null, null, false, true, null]],
        398 => [[['_route' => 'app_product_detail_ad', '_controller' => 'App\\Controller\\ProductController::detailad'], ['id'], null, null, false, true, null]],
        427 => [[['_route' => 'edit_user', '_controller' => 'App\\Controller\\UserController::editUser'], ['id'], null, null, false, true, null]],
        450 => [[['_route' => 'delete_user', '_controller' => 'App\\Controller\\UserController::deleteUser'], ['id'], null, null, false, true, null]],
        479 => [[['_route' => 'app_edit_product', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], null, null, false, true, null]],
        494 => [[['_route' => 'app_delete_product', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], null, null, false, false, null]],
        525 => [[['_route' => 'app_product_detail', '_controller' => 'App\\Controller\\ProductController::detail'], ['id'], null, null, false, true, null]],
        553 => [[['_route' => 'app_edit_staff', '_controller' => 'App\\Controller\\StaffController::edit'], ['id'], null, null, false, true, null]],
        581 => [[['_route' => 'app_delete_staff', '_controller' => 'App\\Controller\\StaffController::delete'], ['id'], null, null, true, false, null]],
        609 => [
            [['_route' => 'app_delete_user', '_controller' => 'App\\Controller\\UserManagerController::delete'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
