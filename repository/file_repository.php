<?php 
function check_files($files){
        //$files = $_FILES['file']['name'];
        var_dump($_FILES);
        var_dump($_POST);
        var_dump($_SERVER);
        return $_FILES;
}
