<?php 

/* CONNEXION A LA BASE DE DONNEES */

    session_start(); 
    require_once 'config.php'; 

    if(!empty($_POST['email']) && !empty($_POST['password'])) 
    {
        /*Patch XSS*/

        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['password']);
        
        $email = strtolower($email); 
        
       
        $check = $bdd->prepare('SELECT pseudo, email, password, token FROM job WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        

      
        if($row > 0)
        {
            
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
            
                if(password_verify($password, $data['password']))
                {
                   
                    $_SESSION['job'] = $data['token'];
                    header('Location: list.php');
                    die();
                }else{ header('Location: index.php?login_err=password'); die(); }
            }else{ header('Location: index.php?login_err=email'); die(); }
        }else{ header('Location: index.php?login_err=already'); die(); }
    }else{ header('Location: index.php'); die();} 


