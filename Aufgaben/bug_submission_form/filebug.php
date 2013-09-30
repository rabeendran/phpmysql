<?php

$alloweduser = "user";
$allowedpass = "pass";

if ($alloweduser === $_POST ['user']&&$allowedpass === $_POST['pass'])
{

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"])
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "/var/www/uploads/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "/var/www/uploads/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "No File added";
  }

var_dump($_POST);

$empfaenger = "rajeevan@bluewin.ch";
$betreff = "Formular";
$text = "name = ".$_POST['name']. "\n"
		."email=".$_POST['email']. "\n"
		."web=".$_POST['web']. "\n"
		."priority=".$_POST['priority']. "\n"
		."bugtype=".$_POST['bugtype']. "\n"
		."description=".$_POST['description']. "\n"
		."radio=".$_POST['radio']. "\n"
		."checkbox=".$_POST['checkbox']. "\n"
		."file=".$_POST['file']. "\n"
		."date=".$_POST['date']. "\n";

mail($empfaenger, $betreff, $text);
echo "Mail gesendet";


} else
{
	echo "user pw nicht korekt";
}

?>