<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe014b03f0bb186bd4ce9f1175abf8b3
{
    public static $classMap = array (
        'Car' => __DIR__ . '/../..' . '/models/car.class.php',
        'CarController' => __DIR__ . '/../..' . '/controllers/car_controller.class.php',
        'CarCreate' => __DIR__ . '/../..' . '/views/car/create/car_create.class.php',
        'CarDetail' => __DIR__ . '/../..' . '/views/car/detail/car_detail.class.php',
        'CarEdit' => __DIR__ . '/../..' . '/views/car/edit/car_edit.class.php',
        'CarError' => __DIR__ . '/../..' . '/views/car/error/car_error.class.php',
        'CarIndex' => __DIR__ . '/../..' . '/views/car/index/car_index.class.php',
        'CarIndexView' => __DIR__ . '/../..' . '/views/car/car_index_view.class.php',
        'CarModel' => __DIR__ . '/../..' . '/models/car_model.class.php',
        'CarSearch' => __DIR__ . '/../..' . '/views/car/search/car_search.class.php',
        'CarUser' => __DIR__ . '/../..' . '/views/car/user/car_user.php',
        'CartController' => __DIR__ . '/../..' . '/controllers/cart_controller.class.php',
        'CartIndex' => __DIR__ . '/../..' . '/views/cart/cart_index.class.php',
        'Category' => __DIR__ . '/../..' . '/models/category.class.php',
        'ComposerAutoloaderInitfe014b03f0bb186bd4ce9f1175abf8b3' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitfe014b03f0bb186bd4ce9f1175abf8b3' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Customer' => __DIR__ . '/../..' . '/models/customer.class.php',
        'Database' => __DIR__ . '/../..' . '/application/database.class.php',
        'DatabaseException' => __DIR__ . '/../..' . '/exceptions/database.exception.php',
        'Dispatcher' => __DIR__ . '/../..' . '/application/dispatcher.class.php',
        'EmailException' => __DIR__ . '/../..' . '/exceptions/email.exception.php',
        'HomeController' => __DIR__ . '/../..' . '/controllers/home_controller.class.php',
        'HomeIndex' => __DIR__ . '/../..' . '/views/home/home_index.class.php',
        'IndexView' => __DIR__ . '/../..' . '/views/index_view.class.php',
        'LocationIndex' => __DIR__ . '/../..' . '/views/location/location_index.class.php',
        'OrderIndex' => __DIR__ . '/../..' . '/views/cart/order/order_index.class.php',
        'PlaneNumAuthenticationException' => __DIR__ . '/../..' . '/exceptions/planenum_authentication.exception.php',
        'QueryDatabaseException' => __DIR__ . '/../..' . '/exceptions/query_database.exception.php',
        'User' => __DIR__ . '/../..' . '/models/user.class.php',
        'UserAuthenticationException' => __DIR__ . '/../..' . '/exceptions/user_authentication.exception.php',
        'UserController' => __DIR__ . '/../..' . '/controllers/user_controller.class.php',
        'UserCreate' => __DIR__ . '/../..' . '/views/user/create/user_create.class.php',
        'UserDetail' => __DIR__ . '/../..' . '/views/user/detail/user_detail.class.php',
        'UserEdit' => __DIR__ . '/../..' . '/views/user/edit/user_edit.class.php',
        'UserError' => __DIR__ . '/../..' . '/views/user/error/user_error.class.php',
        'UserLogin' => __DIR__ . '/../..' . '/views/user/login/login_index.class.php',
        'UserLogout' => __DIR__ . '/../..' . '/views/user/logout/logout.class.php',
        'UserModel' => __DIR__ . '/../..' . '/models/user_model.class.php',
        'VerifyUser' => __DIR__ . '/../..' . '/views/user/login/verify_user.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitfe014b03f0bb186bd4ce9f1175abf8b3::$classMap;

        }, null, ClassLoader::class);
    }
}
