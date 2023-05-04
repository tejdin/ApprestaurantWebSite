<?php
require_once 'Controlleur/UserControlleur.php';
require_once 'Controlleur/ReservControlleur.php';
require_once 'Controlleur/FeedbackControlleur.php';
require_once 'Controlleur/StaffControlleur.php';
require_once 'Controlleur/TableControlleur.php';
$staffControlleur = new StaffControlleur();
$userControlleur = new UserControlleur();
$reservControlleur = new ReservControlleur();
$feedbackControlleur = new FeedbackControlleur();
$tableControlleur = new TableControlleur();



$requestUrl = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

switch ($requestUrl) {
    case '/projet/public/login':
        if ($requestMethod == 'GET' && !$userControlleur->isLogged() && !$userControlleur->isAdmin()) {
            $userControlleur->showLoginView();
        } elseif ($requestMethod == 'POST') {
            $userControlleur->login();
        }
        elseif ($requestMethod == 'GET' && $userControlleur->isLogged()) {
            header('Location: home');
            
            }
            elseif ($requestMethod == 'GET' && $userControlleur->isAdmin()) {
                header('Location: /projet/public/admin');
                
                }

        break;


    case '/projet/public/register':
        if($userControlleur->isLogged()){
            header('Location: reserv');
        }
        else{
        if ($requestMethod == 'GET' || $requestMethod == 'POST') {
            $userControlleur->Register();
        } elseif ($requestMethod == 'POST') {
            $userControlleur->Register();
        }
    }
        break;

    case '/projet/public/logout':
        if ($requestMethod == 'POST' || $requestMethod == 'GET') {
            $userControlleur->logout();
            header('Location: login');
            


        }
        break;
        case '/projet/public/admin/logout':
            if ($requestMethod == 'GET') {
                $userControlleur->logout();
    
    
    
            }
            break;
    
    case '/projet/public/reserv':
        if($userControlleur->isLogged()){
            if ($requestMethod == 'GET') {
                $reservControlleur->showReservView();
            } elseif ($requestMethod == 'POST') {
                $reservControlleur->addReserv();
            }
        }
        else{
            header('Location: login');
        }
        break;

    case '/projet/public/feedback':
        if ($requestMethod == 'GET') {
            $feedbackControlleur->feedbacksshow();
        }
        break;

    case '/projet/public/Addfeedback':
        if($userControlleur->isLogged()){
            if ($requestMethod == 'GET') {
                $feedbackControlleur->showfeedbackView();
            } elseif ($requestMethod == 'POST') {
                $feedbackControlleur->addfeedback();
            }
        }
        else{
            header('Location: login');
        }
        break;
        case '/projet/public/edit':
            if($userControlleur->isLogged()){

                if ($requestMethod == 'GET') {
                
            

                    $userControlleur->ShowEditView();
                } 
                elseif ($requestMethod == 'POST') {
                    $userControlleur->Edit();
                }
            }
            else{
                header('Location: login');
            }
            break;
            case '/projet/public/admin/users':
                if($userControlleur->isLogged() && $userControlleur->isAdmin()){

               
                    if ($requestMethod == 'GET'  ){
                     
                        //$userControlleur->isLogged()  && $userControlleur->isAdmin()) {
                        $userControlleur->ShowUserListViewAdminList();
                    } 
                }
            break;
            case '/projet/public/admin/users/add':
                if ($requestMethod == 'POST') {
                    $userControlleur->AddUser();
                    header('Location: /projet/public/admin/users');
                }
            case preg_match('/^\/projet\/public\/admin\/users\/delete\/(\d+)$/', $requestUrl, $matches) ? true : false:
                if ($requestMethod == 'POST') {
                    $userId = $matches[1];
                    $userControlleur->delete($userId);
                    header('Location: /projet/public/admin/users');
                }
                break;
                case '/projet/public/admin/users/edit':
                    if ($requestMethod == 'POST') {
                        $userControlleur->EditUser();
                        header('Location: /projet/public/admin/users');
                    }
                    break;

                    case '/projet/public/admin/reservs':
                     if($userControlleur->isLogged() && $userControlleur->isAdmin()){
               
                        if ($requestMethod == 'GET'  ){
                         
                            //$userControlleur->isLogged()  && $userControlleur->isAdmin()) {
                            $reservControlleur->showAllReserv();
                        }
                        if ($requestMethod == 'POST'  ){
                     
                         
                            //$userControlleur->isLogged()  && $userControlleur->isAdmin()) {
                            $reservControlleur->AddReservAdminSide();
                            header('Location: /projet/public/admin/reservs');


                        }

                                       }
                   break;

            case preg_match('/^\/projet\/public\/admin\/reservs\/delete\/(\d+)$/', $requestUrl, $matches) ? true : false:
                if ($requestMethod == 'POST') {
                    $reservId = $matches[1];
                    $reservControlleur->deleteReserv($reservId);
                    header('Location: /projet/public/admin/reservs');
                }
                break;
            case '/projet/public/admin/reserv/edit':
                if ($requestMethod == 'POST') {
                    $reservControlleur->updateReserv();
                                        header('Location: /projet/public/admin/reservs');
                }

            case '/projet/public/admin/staffs':
                if($userControlleur->isLogged() && $userControlleur->isAdmin()){
               
                if ($requestMethod == 'GET'  ){                 
                    //$userControlleur->isLogged()  && $userControlleur->isAdmin()) {
                    $staffControlleur->getAllStaff();
                }}
                break;
            case '/projet/public/admin/staffs/add':
                if ($requestMethod == 'POST') {
                    $staffControlleur->AddStaff();
                    header('Location: /projet/public/admin/staffs');
                }
                break;
            case preg_match('/^\/projet\/public\/admin\/staffs\/delete\/(\d+)$/', $requestUrl, $matches) ? true : false:
                if ($requestMethod == 'POST') {
                    $staffId = $matches[1];
                    $staffControlleur->deleteStaff($staffId);
                    header('Location: /projet/public/admin/staffs');
                }
                break;
            case '/projet/public/admin/staffs/edit':
                if ($requestMethod == 'POST') {
                    $staffControlleur->updateStaff();
                    header('Location: /projet/public/admin/staffs');
                }
                break;

                case '/projet/public/admin/feedbacks':
                    if($userControlleur->isLogged() && $userControlleur->isAdmin()){
               
                    if ($requestMethod == 'GET'  ){
                     
                        //$userControlleur->isLogged()  && $userControlleur->isAdmin()) {
                        $feedbackControlleur->ShowFeedbackListViewAdmin();
                    }
                    if ($requestMethod == 'POST'  ){
                 
                     
                        //$userControlleur->isLogged()  && $userControlleur->isAdmin()) {
                        $feedbackControlleur->AddFeedbackAdminSide();
                        header('Location: /projet/public/admin/feedbacks');
                    }
                }
                    break;

        case preg_match('/^\/projet\/public\/admin\/feedbacks\/delete\/(\d+)$/', $requestUrl, $matches) ? true : false:
            if ($requestMethod == 'POST') {
                $feedbackId = $matches[1];
                $feedbackControlleur->deleteFeedback($feedbackId);
                header('Location: /projet/public/admin/feedbacks');
            }
            break;

        case '/projet/public/admin/feedbacks/edit':
            if ($requestMethod == 'POST') {
                $feedbackControlleur->editFeedbackAdminSide();
                header('Location: /projet/public/admin/feedbacks');
            }
            break;
            //dashboard admin route
            case '/projet/public/admin':
                if($userControlleur->isLogged() && $userControlleur->isAdmin()){
                if ($requestMethod == 'GET') {
                    $userControlleur->ShowDashbored();
                }}
                break;
            case '/projet/public/admin/dtables':
                if($userControlleur->isLogged() && $userControlleur->isAdmin()){
                if ($requestMethod == 'GET') {
             
                    $tableControlleur->tablesshow();
                }}
                break;
            case '/projet/public/admin/dtables/add':
                if ($requestMethod == 'POST') {
                    echo '<script>alert("hello")</script>';

                    $tableControlleur->addTable();
                    header('Location: /projet/public/admin/dtables');
                }
                break;
            case preg_match('/^\/projet\/public\/admin\/dtables\/delete\/(\d+)$/', $requestUrl, $matches) ? true : false:
                if ($requestMethod == 'POST') {
                    $tableId = $matches[1];
                    $tableControlleur->deleteTable($tableId);
                    header('Location: /projet/public/admin/dtables');
                }
                break;
            case '/projet/public/admin/dtables/edit':
                if ($requestMethod == 'POST') {
                    $tableControlleur->updateTable();
                    header('Location: /projet/public/admin/dtables');
                }
                break;
                
             case '/projet/public/home':
                if($requestMethod == 'GET') 
                {   
                    if ($userControlleur->isLogged())
                    {$userControlleur->homelogin();}
                    else
                    {$userControlleur->home();} 
                }
                    break;

 
            
            
                
}
  

