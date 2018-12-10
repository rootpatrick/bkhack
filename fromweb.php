<?php
//start session

session_start();

//load and initialize database class
require_once '../core/db.php';
$db = new DB();






     if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
       // $Dte = date('Y/m/d');
  
  $tblName = 'idearegistration';
            //insert data
            $userData = array
            (
                'refugee_names' => $_POST['refugee_names'],
                'refugee_camp_add' => $_POST['refugee_camp_add'],
                'phone_number' => $_POST['phone_number'],
                'idea_title' => $_POST['idea_title'],
                'description' =>$_POST['description'],
                'objective' => $_POST['objective'],
                'house_number' =>$_POST['house_number'],
                'refugee_id_number' => $_POST['refugee_id_number'],
                'loan_season' => $_POST['loan_season']
            )
            ;
            $insert = $db->insert($tblName, $userData);
            if($insert)
             {
                
                    echo "User  Saved Successfully";
             }
            else
            {
                     echo 'Operation failed, Try Again later, Thanks';
            }
           
    }

    
   


exit();
?>