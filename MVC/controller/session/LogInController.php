<?php
require_once './../MVC/controller/Controller.php';
require_once './../MVC/repository/UserRepository.php';

class LogInController extends Controller
{

    public function __construct()
    {
        parent::__construct("./../MVC/views/session/login.php");
    }

    public function index()
    {
        $responseType = "";
        
        if (!empty($_POST)) {
            $responseType = "error";

            $userRepository = new UserRepository("user");
            $user = $userRepository->findOneByUsername($_POST["username"]);

            if (!empty($user) && password_verify($_POST["password"], $user->getPassword())) {
               // $responseType = "success";
                $_SESSION['user_is_connect'] = true;
            }
        }
        return $this->renderView(["responseType" => $responseType]);
    }
}
