<?php
//start session
//start session
session_start();

//load and initialize database class
require_once '../core/db.php';
$db = new DB();

$Dte = date('Y/m/d');
$y=date('Y');
$m=date('m');


//set default redirect url
$redirectURL = '../'.$db->url;
//SELECT `ID`, `Motif`, `TimeOut`, `TimeBack`, `Staff_ID`, `Type_ID` FROM `aidesong_holidays` WHERE 1
   if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['motif']))
    {
       // SELECT `ID`, `Motif`, `Location`, `Way`, `TimeOut`, `TimeBack`, `` FROM `aidesong_mission` WHERE 1
        $Dte = date('Y/m/d');
        $tblName = 'aidesong_mission';
            //insert data
  
            $userData = array
            (
                'Location' =>  $_POST['location'],
                'Way' =>  $_POST['way'],
                'Motif' =>  $_POST['motif'],
                'TimeOut' => $_POST['Dout'],
                'TimeBack' => $_POST['Dback'],
                'User_ID' => (int)$_POST['user'],
                //'Type_ID' => (int)$_POST['type'],
            );
  $insert = $db->insert($tblName, $userData);
            if($insert){
                $sessData['status']['type'] = 'success';
                $sessData['status']['msg'] = 'Operation Réussie ';
            //set redirect url
                $redirectURL .= '?request=missionlist';

            }

            else{
                $sessData['status']['type'] = 'error';
                $sessData['status']['msg'] = 'Operation échouée, essayez encore  ';
                
                //set redirect 
                $redirectURL .= '?request=mission';
            }
    }

    else 
    {
        $sessData['status']['type'] = 'error';
        $sessData['status']['msg'] = 'fill all required fields';
        
        //set redirect url
        //$redirectURL .= '?request=mission';
       }


       if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['rate']))
    {
       // SELECT `ID`, `Motif`, `Location`, `Way`, `TimeOut`, `TimeBack`, `` FROM `aidesong_mission` WHERE 1
        $tblName = 'distribution';
            //insert data
  
            $userData = array
            (
                'business_idea_id' =>  $_POST['id'],
                'interest_rate' =>  $_POST['rate'],
                'amount' =>  $_POST['amount'],
                'bank' => $_POST['bank'],
                //'TimeBack' => $_POST['Dback'],
                //'User_ID' => (int)$_POST['user'],
                //'Type_ID' => (int)$_POST['type'],
            );
  $insert = $db->insert($tblName, $userData);
            if($insert){
                $sessData['status']['type'] = 'success';
                $sessData['status']['msg'] = 'Successful operation ';
            //set redirect url
                $redirectURL .= '?request=reception_order';

            }

            else{
                $sessData['status']['type'] = 'error';
                $sessData['status']['msg'] = '
                Operation failed, try again  ';
                
                //set redirect 
                $redirectURL .= '?request=reception_order';
            }
    }

    else 
    {
        $sessData['status']['type'] = 'error';
        $sessData['status']['msg'] = 'fill all required fields';
        
        //set redirect url
        $redirectURL .= '?request=reception_order';
       }
   





   //store status into the session
    $_SESSION['sessData'] = $sessData;
    
    //redirect to the list page
    header("Location:".$redirectURL);







exit();
?>