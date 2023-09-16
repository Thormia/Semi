<?php

namespace ContainerBi2x9eA;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NxExzVuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nxExzVu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nxExzVu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CartController::add' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\CartController::remove' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\CartController::update' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\CategoryController::addcate' => ['privates', '.service_locator.IFTIe5Y', 'get_ServiceLocator_IFTIe5YService', true],
            'App\\Controller\\CategoryController::delete' => ['privates', '.service_locator.VulvMuV', 'get_ServiceLocator_VulvMuVService', true],
            'App\\Controller\\CategoryController::editcate' => ['privates', '.service_locator.IFTIe5Y', 'get_ServiceLocator_IFTIe5YService', true],
            'App\\Controller\\CategoryController::listcate' => ['privates', '.service_locator.vFqSrbX', 'get_ServiceLocator_VFqSrbXService', true],
            'App\\Controller\\ContactController::delete' => ['privates', '.service_locator.ysu79FI', 'get_ServiceLocator_Ysu79FIService', true],
            'App\\Controller\\ContactController::index' => ['privates', '.service_locator.VulvMuV', 'get_ServiceLocator_VulvMuVService', true],
            'App\\Controller\\ContactController::list' => ['privates', '.service_locator.vFqSrbX', 'get_ServiceLocator_VFqSrbXService', true],
            'App\\Controller\\OrderController::change' => ['privates', '.service_locator.VulvMuV', 'get_ServiceLocator_VulvMuVService', true],
            'App\\Controller\\OrderController::index' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\OrderController::item' => ['privates', '.service_locator.vFqSrbX', 'get_ServiceLocator_VFqSrbXService', true],
            'App\\Controller\\OrderController::list' => ['privates', '.service_locator.vFqSrbX', 'get_ServiceLocator_VFqSrbXService', true],
            'App\\Controller\\OrderController::vieworderitem' => ['privates', '.service_locator.VulvMuV', 'get_ServiceLocator_VulvMuVService', true],
            'App\\Controller\\PaymentController::index1' => ['privates', '.service_locator.EbLn4Sr', 'get_ServiceLocator_EbLn4SrService', true],
            'App\\Controller\\PaymentController::success' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\ProductController::add' => ['privates', '.service_locator.IFTIe5Y', 'get_ServiceLocator_IFTIe5YService', true],
            'App\\Controller\\ProductController::delete' => ['privates', '.service_locator.VulvMuV', 'get_ServiceLocator_VulvMuVService', true],
            'App\\Controller\\ProductController::detail' => ['privates', '.service_locator.vFqSrbX', 'get_ServiceLocator_VFqSrbXService', true],
            'App\\Controller\\ProductController::detailad' => ['privates', '.service_locator.vFqSrbX', 'get_ServiceLocator_VFqSrbXService', true],
            'App\\Controller\\ProductController::edit' => ['privates', '.service_locator.IFTIe5Y', 'get_ServiceLocator_IFTIe5YService', true],
            'App\\Controller\\ProductController::list' => ['privates', '.service_locator.vFqSrbX', 'get_ServiceLocator_VFqSrbXService', true],
            'App\\Controller\\ProductController::userlist' => ['privates', '.service_locator.vFqSrbX', 'get_ServiceLocator_VFqSrbXService', true],
            'App\\Controller\\ProfileController::deleteAccount' => ['privates', '.service_locator.wDCSOZW', 'get_ServiceLocator_WDCSOZWService', true],
            'App\\Controller\\ProfileController::editProfile' => ['privates', '.service_locator.VNfh.KW', 'get_ServiceLocator_VNfh_KWService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.xVV8u.q', 'get_ServiceLocator_XVV8u_QService', true],
            'App\\Controller\\StaffController::delete' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\StaffController::edit' => ['privates', '.service_locator.fJMEPx3', 'get_ServiceLocator_FJMEPx3Service', true],
            'App\\Controller\\StaffController::index' => ['privates', '.service_locator.fJMEPx3', 'get_ServiceLocator_FJMEPx3Service', true],
            'App\\Controller\\StaffController::listSPinCate' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\StaffController::list_staff' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\UserController::addUser' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController::deleteUser' => ['privates', '.service_locator.rvMNZGh', 'get_ServiceLocator_RvMNZGhService', true],
            'App\\Controller\\UserController::editUser' => ['privates', '.service_locator.3F8krw9', 'get_ServiceLocator_3F8krw9Service', true],
            'App\\Controller\\UserController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserController::loginadmin' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserController::userList' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserManagerController::add' => ['privates', '.service_locator.GhWdsZd', 'get_ServiceLocator_GhWdsZdService', true],
            'App\\Controller\\UserManagerController::delete' => ['privates', '.service_locator.VulvMuV', 'get_ServiceLocator_VulvMuVService', true],
            'App\\Controller\\UserManagerController::index' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\CartController:add' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\CartController:remove' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\CartController:update' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\CategoryController:addcate' => ['privates', '.service_locator.IFTIe5Y', 'get_ServiceLocator_IFTIe5YService', true],
            'App\\Controller\\CategoryController:delete' => ['privates', '.service_locator.VulvMuV', 'get_ServiceLocator_VulvMuVService', true],
            'App\\Controller\\CategoryController:editcate' => ['privates', '.service_locator.IFTIe5Y', 'get_ServiceLocator_IFTIe5YService', true],
            'App\\Controller\\CategoryController:listcate' => ['privates', '.service_locator.vFqSrbX', 'get_ServiceLocator_VFqSrbXService', true],
            'App\\Controller\\ContactController:delete' => ['privates', '.service_locator.ysu79FI', 'get_ServiceLocator_Ysu79FIService', true],
            'App\\Controller\\ContactController:index' => ['privates', '.service_locator.VulvMuV', 'get_ServiceLocator_VulvMuVService', true],
            'App\\Controller\\ContactController:list' => ['privates', '.service_locator.vFqSrbX', 'get_ServiceLocator_VFqSrbXService', true],
            'App\\Controller\\OrderController:change' => ['privates', '.service_locator.VulvMuV', 'get_ServiceLocator_VulvMuVService', true],
            'App\\Controller\\OrderController:index' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\OrderController:item' => ['privates', '.service_locator.vFqSrbX', 'get_ServiceLocator_VFqSrbXService', true],
            'App\\Controller\\OrderController:list' => ['privates', '.service_locator.vFqSrbX', 'get_ServiceLocator_VFqSrbXService', true],
            'App\\Controller\\OrderController:vieworderitem' => ['privates', '.service_locator.VulvMuV', 'get_ServiceLocator_VulvMuVService', true],
            'App\\Controller\\PaymentController:index1' => ['privates', '.service_locator.EbLn4Sr', 'get_ServiceLocator_EbLn4SrService', true],
            'App\\Controller\\PaymentController:success' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\ProductController:add' => ['privates', '.service_locator.IFTIe5Y', 'get_ServiceLocator_IFTIe5YService', true],
            'App\\Controller\\ProductController:delete' => ['privates', '.service_locator.VulvMuV', 'get_ServiceLocator_VulvMuVService', true],
            'App\\Controller\\ProductController:detail' => ['privates', '.service_locator.vFqSrbX', 'get_ServiceLocator_VFqSrbXService', true],
            'App\\Controller\\ProductController:detailad' => ['privates', '.service_locator.vFqSrbX', 'get_ServiceLocator_VFqSrbXService', true],
            'App\\Controller\\ProductController:edit' => ['privates', '.service_locator.IFTIe5Y', 'get_ServiceLocator_IFTIe5YService', true],
            'App\\Controller\\ProductController:list' => ['privates', '.service_locator.vFqSrbX', 'get_ServiceLocator_VFqSrbXService', true],
            'App\\Controller\\ProductController:userlist' => ['privates', '.service_locator.vFqSrbX', 'get_ServiceLocator_VFqSrbXService', true],
            'App\\Controller\\ProfileController:deleteAccount' => ['privates', '.service_locator.wDCSOZW', 'get_ServiceLocator_WDCSOZWService', true],
            'App\\Controller\\ProfileController:editProfile' => ['privates', '.service_locator.VNfh.KW', 'get_ServiceLocator_VNfh_KWService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.xVV8u.q', 'get_ServiceLocator_XVV8u_QService', true],
            'App\\Controller\\StaffController:delete' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\StaffController:edit' => ['privates', '.service_locator.fJMEPx3', 'get_ServiceLocator_FJMEPx3Service', true],
            'App\\Controller\\StaffController:index' => ['privates', '.service_locator.fJMEPx3', 'get_ServiceLocator_FJMEPx3Service', true],
            'App\\Controller\\StaffController:listSPinCate' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\StaffController:list_staff' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\UserController:addUser' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController:deleteUser' => ['privates', '.service_locator.rvMNZGh', 'get_ServiceLocator_RvMNZGhService', true],
            'App\\Controller\\UserController:editUser' => ['privates', '.service_locator.3F8krw9', 'get_ServiceLocator_3F8krw9Service', true],
            'App\\Controller\\UserController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserController:loginadmin' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserController:userList' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserManagerController:add' => ['privates', '.service_locator.GhWdsZd', 'get_ServiceLocator_GhWdsZdService', true],
            'App\\Controller\\UserManagerController:delete' => ['privates', '.service_locator.VulvMuV', 'get_ServiceLocator_VulvMuVService', true],
            'App\\Controller\\UserManagerController:index' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\CartController::add' => '?',
            'App\\Controller\\CartController::remove' => '?',
            'App\\Controller\\CartController::update' => '?',
            'App\\Controller\\CategoryController::addcate' => '?',
            'App\\Controller\\CategoryController::delete' => '?',
            'App\\Controller\\CategoryController::editcate' => '?',
            'App\\Controller\\CategoryController::listcate' => '?',
            'App\\Controller\\ContactController::delete' => '?',
            'App\\Controller\\ContactController::index' => '?',
            'App\\Controller\\ContactController::list' => '?',
            'App\\Controller\\OrderController::change' => '?',
            'App\\Controller\\OrderController::index' => '?',
            'App\\Controller\\OrderController::item' => '?',
            'App\\Controller\\OrderController::list' => '?',
            'App\\Controller\\OrderController::vieworderitem' => '?',
            'App\\Controller\\PaymentController::index1' => '?',
            'App\\Controller\\PaymentController::success' => '?',
            'App\\Controller\\ProductController::add' => '?',
            'App\\Controller\\ProductController::delete' => '?',
            'App\\Controller\\ProductController::detail' => '?',
            'App\\Controller\\ProductController::detailad' => '?',
            'App\\Controller\\ProductController::edit' => '?',
            'App\\Controller\\ProductController::list' => '?',
            'App\\Controller\\ProductController::userlist' => '?',
            'App\\Controller\\ProfileController::deleteAccount' => '?',
            'App\\Controller\\ProfileController::editProfile' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\StaffController::delete' => '?',
            'App\\Controller\\StaffController::edit' => '?',
            'App\\Controller\\StaffController::index' => '?',
            'App\\Controller\\StaffController::listSPinCate' => '?',
            'App\\Controller\\StaffController::list_staff' => '?',
            'App\\Controller\\UserController::addUser' => '?',
            'App\\Controller\\UserController::deleteUser' => '?',
            'App\\Controller\\UserController::editUser' => '?',
            'App\\Controller\\UserController::login' => '?',
            'App\\Controller\\UserController::loginadmin' => '?',
            'App\\Controller\\UserController::userList' => '?',
            'App\\Controller\\UserManagerController::add' => '?',
            'App\\Controller\\UserManagerController::delete' => '?',
            'App\\Controller\\UserManagerController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\CartController:add' => '?',
            'App\\Controller\\CartController:remove' => '?',
            'App\\Controller\\CartController:update' => '?',
            'App\\Controller\\CategoryController:addcate' => '?',
            'App\\Controller\\CategoryController:delete' => '?',
            'App\\Controller\\CategoryController:editcate' => '?',
            'App\\Controller\\CategoryController:listcate' => '?',
            'App\\Controller\\ContactController:delete' => '?',
            'App\\Controller\\ContactController:index' => '?',
            'App\\Controller\\ContactController:list' => '?',
            'App\\Controller\\OrderController:change' => '?',
            'App\\Controller\\OrderController:index' => '?',
            'App\\Controller\\OrderController:item' => '?',
            'App\\Controller\\OrderController:list' => '?',
            'App\\Controller\\OrderController:vieworderitem' => '?',
            'App\\Controller\\PaymentController:index1' => '?',
            'App\\Controller\\PaymentController:success' => '?',
            'App\\Controller\\ProductController:add' => '?',
            'App\\Controller\\ProductController:delete' => '?',
            'App\\Controller\\ProductController:detail' => '?',
            'App\\Controller\\ProductController:detailad' => '?',
            'App\\Controller\\ProductController:edit' => '?',
            'App\\Controller\\ProductController:list' => '?',
            'App\\Controller\\ProductController:userlist' => '?',
            'App\\Controller\\ProfileController:deleteAccount' => '?',
            'App\\Controller\\ProfileController:editProfile' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\StaffController:delete' => '?',
            'App\\Controller\\StaffController:edit' => '?',
            'App\\Controller\\StaffController:index' => '?',
            'App\\Controller\\StaffController:listSPinCate' => '?',
            'App\\Controller\\StaffController:list_staff' => '?',
            'App\\Controller\\UserController:addUser' => '?',
            'App\\Controller\\UserController:deleteUser' => '?',
            'App\\Controller\\UserController:editUser' => '?',
            'App\\Controller\\UserController:login' => '?',
            'App\\Controller\\UserController:loginadmin' => '?',
            'App\\Controller\\UserController:userList' => '?',
            'App\\Controller\\UserManagerController:add' => '?',
            'App\\Controller\\UserManagerController:delete' => '?',
            'App\\Controller\\UserManagerController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}