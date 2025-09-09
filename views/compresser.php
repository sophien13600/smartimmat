<?php 
session_start();
if(isset($_SESSION['nom'])){
    echo "compression";

}else{
    header("location: ../index.php");
}