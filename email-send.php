<?php

if(isset($_POST["submit"]))  //check submit button is pressed
{

$email = $_POST["email"];  // get name from URL

$file = Fopen("db.txt","a+"); //create a file if not exists

fwrite($file,"\n".$email); // fwrite(file_object, data to store);

}
?>