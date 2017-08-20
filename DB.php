<?php
 class User{

    public function action($_type){
        switch($_type){
            case 1:
                $this->getUser();
                break;
            case 2:
                $this->getEmail();
                break;
        }
    }
    public function getUser(){
         $_sql = "SELECT user FROM cms_user WHERE id=1";
         $query = mysql_query($_sql);
         $this->showQuery($query);
        
    }
    public function getEmail(){
         $_sql = "SELECT email FROM cms_user WHERE id=1";
         $query = mysql_query($_sql);
         $this->showQuery($query);
        
    }
    public function showQuery($_query){
        $json = '';
        while(!!$row = mysql_fetch_array($_query,MYSQL_ASSOC)){
            foreach($row as $key => $value){
                $row[$key] = urlencode(str_replace("\n", "", $value));
            }
            $json .= urldecode(json_encode($row)).',';
        }

        echo '['.substr($json,0,strlen($json)-1).']';
        mysql_close();
    }
 } 


?>
