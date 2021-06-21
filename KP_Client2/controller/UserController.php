<?php
class UserController {

    public function index() {
        $signInPressed = filter_input(INPUT_POST, 'btnSignIn');
        if ($signInPressed=='Login') {
            $username = filter_input(INPUT_POST, 'txtEmail');
            $password = filter_input(INPUT_POST, 'txtPassword');
            $md5Password = md5($password);
            $link = PDOUtil::createConnection();
            $query = "call spLogin(?,?)";
            $stmt = $link->prepare($query);
            $stmt->bindParam(1,$username);
            $stmt->bindParam(2,$md5Password);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            $hasil=$stmt->fetchAll();
            PDOUtil::closeConnection($link);
            if ($hasil[0]->ErrCode==0){
                    $_SESSION['my_session'] = true;
                    $_SESSION['user_Role'] = $hasil[0]->user_Role;
                    $_SESSION['user_ID'] = $hasil[0]->user_ID;
                header("location:index.php?navito=book");
            } else{
                echo '<script>alert("' . $hasil[0]->ErrMsg . '")</script>';
            }
        }
        include_once 'view/home.php';
    }

    public function logout(){
        session_unset();
        session_destroy();
        header("location:index.php?navito=home");
    }

}