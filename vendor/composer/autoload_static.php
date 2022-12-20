<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe014b03f0bb186bd4ce9f1175abf8b3
{
    public static $classMap = array (
        'AdminAddCar' => __DIR__ . '/../..' . '/views/car/add/admin_add_car.class.php',
        'Car' => __DIR__ . '/../..' . '/models/car.class.php',
        'CarController' => __DIR__ . '/../..' . '/controllers/car_controller.class.php',
        'CarDetail' => __DIR__ . '/../..' . '/views/car/detail/car_detail.class.php',
        'CarEdit' => __DIR__ . '/../..' . '/views/car/edit/car_edit.class.php',
        'CarError' => __DIR__ . '/../..' . '/views/car/error/car_error.class.php',
        'CarIndex' => __DIR__ . '/../..' . '/views/car/index/car_index.class.php',
        'CarIndexView' => __DIR__ . '/../..' . '/views/car/car_index_view.class.php',
        'CarModel' => __DIR__ . '/../..' . '/models/car_model.class.php',
        'CarSearch' => __DIR__ . '/../..' . '/views/car/search/car_search.class.php',
        'Category' => __DIR__ . '/../..' . '/models/category.class.php',
        'ComposerAutoloaderInitfe014b03f0bb186bd4ce9f1175abf8b3' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitfe014b03f0bb186bd4ce9f1175abf8b3' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Customer' => __DIR__ . '/../..' . '/models/customer.class.php',
        'DataMissingException' => __DIR__ . '/../..' . '/exceptions/data_missing_exception.class.php',
        'Database' => __DIR__ . '/../..' . '/application/database.class.php',
        'DatabaseConnectionException' => __DIR__ . '/../..' . '/exceptions/database_connection_exception.class.php',
        'DatabaseExecutionException' => __DIR__ . '/../..' . '/exceptions/database_execution_exception.class.php',
        'Dispatcher' => __DIR__ . '/../..' . '/application/dispatcher.class.php',
        'HomeController' => __DIR__ . '/../..' . '/controllers/home_controller.class.php',
        'HomeIndex' => __DIR__ . '/../..' . '/views/home/home_index.class.php',
        'IndexView' => __DIR__ . '/../..' . '/views/index_view.class.php',
        'InvalidDateException' => __DIR__ . '/../..' . '/exceptions/invalid_date_exception.class.php',
        'Login' => __DIR__ . '/../..' . '/views/login/login.class.php',
        'LoginIndex' => __DIR__ . '/../..' . '/views/login/login_index.class.php',
        'Logout' => __DIR__ . '/../..' . '/views/login/logout.class.php',
        'User' => __DIR__ . '/../..' . '/models/user.class.php',
        'UserController' => __DIR__ . '/../..' . '/controllers/user_controller.class.php',
        'UserModel' => __DIR__ . '/../..' . '/models/user_model.class.php',
        'VerifyUser' => __DIR__ . '/../..' . '/views/login/verify_user.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitfe014b03f0bb186bd4ce9f1175abf8b3::$classMap;

        }, null, ClassLoader::class);
    }
}