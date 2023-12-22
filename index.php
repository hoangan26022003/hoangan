<?php
    session_start();
    $controller = '';
    if(isset($_GET['controller'])){
        $controller = $_GET['controller'];
    }

    switch ($controller){
        case '':
            include_once 'view/index.php';
            break;
        case 'home':
            include_once 'controllers/homeController.php';
            break;
        case 'shop':
            include_once 'controllers/shopController.php';
            break;
        case 'loginUser':
            include_once 'controllers/loginUserController.php';
            break;
        case 'myAccount':
            include_once 'controllers/myAccountController.php';
            break;
//        case 'orderDetail':
//            include_once 'controllers/orderDetaiController.php';
//            break;
        case 'myOrder':
            include_once 'controllers/myOrderController.php';
            break;
        case 'contact':
            include_once 'controllers/contactModel.php';
            break;
        case 'detail':
            include_once 'controllers/detailController.php';
            break;
        case 'register':
            include_once 'controllers/registerController.php';
            break;
        case 'cart':
            if (isset($_SESSION['customer_email'])){
                include_once 'controllers/cartController.php';
            } else {
                header('Location:index.php?controller=loginUser&action=login');
            }
            break;
        case 'product':
            if (isset($_SESSION['admin_email'])){
                include_once 'controllers/productController.php';
            } else {
                header('Location: index.php?controller=login&action=loginAdmin');
            }
            break;
        case 'category':
            if (isset($_SESSION['admin_email'])){
                include_once 'controllers/categoriesController.php';
            }else {
                header('Location: index.php?controller=login&action=loginAdmin');
            }
            break;
        case 'productCategory':
            if (isset($_SESSION['admin_email'])){
                include_once 'controllers/product_categoriesController.php';
            } else {
                header('Location: index.php?controller=login&action=loginAdmin');
            }
            break;
        case 'slide':
            if (isset($_SESSION['admin_email'])){
                include_once 'controllers/slideController.php';
            } else{
                header('Location: index.php?controller=login&action=loginAdmin');
            }
            break;
        case 'payment':
            if ($_SESSION['admin_email']){
                include_once 'controllers/paymentController.php';
            } else {
                header('Location: index.php?controller=login&action=loginAdmin');
            }

            break;
        case 'customer':
            if (isset($_SESSION['admin_email'])){
                include_once 'controllers/customerController.php';
            } else {
                header('Location: index.php?controller=login&action=loginAdmin');
            }
            break;
        case 'order':
            if (isset($_SESSION['admin_email'])){
                include_once 'controllers/orderController.php';
            } else {
                header('Location: index.php?controller=login&action=loginAdmin');
            }
            break;
        case 'user':
            if (isset($_SESSION['admin_email'])){
                include_once 'controllers/adminController.php';
            } else {
                header('Location: index.php?controller=login&action=loginAdmin');
            }
            break;
        case 'function':
            include_once 'controllers/functionController.php';
            break;
        case 'login':
            include_once 'controllers/loginController.php';
            break;
    }

?>