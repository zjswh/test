<?php
    require "config.php";
    switch($_POST{'type'}){
        case 1:
            getUser();
            break;
        case 2:
            getEmail();
            break;
    }
    function getUser(){
         $_sql = "SELECT user FROM cms_user WHERE id=1";
         $query = mysql_query($_sql);
         showQuery($query);
        
    }
    function getEmail(){
         $_sql = "SELECT email FROM cms_user WHERE id=1";
         $query = mysql_query($_sql);
         showQuery($query);
        
    }
    function showQuery($_query){
        $json = '';
        while(!!$row = mysql_fetch_array($_query,MYSQL_ASSOC)){
            foreach($row as $key => $value){
                $row[$key] = urlencode(str_replace("\n", "", $value));
            }
            $json .= urldecode(json_encode($row)).',';
        }

        echo '['.substr($json,0,strlen($json)-1).']';
        
    }
    mysql_close();
?>
