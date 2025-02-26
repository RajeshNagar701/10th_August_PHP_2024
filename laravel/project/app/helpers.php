<?php
if(!function_exists('hello') ){

    function hello()
    {
        echo "<h1> Hello i am custom helper</h1>";
    }
}

if(!function_exists('print_arr') ){
    function print_arr($data)
    {
        echo "<pre>";
            print_r($data);
        echo "</pre>";
    }
}
if(!function_exists('custome_date') ){

    function custome_date($date,$format)
    {
        $date_formated=date($format,strtotime($date));
        echo $date_formated;
    }
}
?>