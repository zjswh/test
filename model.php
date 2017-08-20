<?php
    require "config.php";
    $_sql = "SELECT * FROM cms_user";
    $query = mysql_query($_sql);
    $json = '';

    while(!!$row = mysql_fetch_array($query,MYSQL_ASSOC)){
        foreach($row as $key => $value){
            $row[$key] = urlencode(str_replace("\n", "", $value));
        }
        $json .= urldecode(json_encode($row)).',';
    }

    echo '['.substr($json,0,strlen($json)-1).']';
    mysql_close();
?>
