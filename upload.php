<?php

echo $_FILES['audio'];
echo json_encode($_FILES['audio']);

if(isset($_FILES['audio']) and !$_FILES['audio']['error'] ){
    file_put_contents( "uploads/audio.wav", file_get_contents($_FILES['audio']['tmp_name']) );
  }
?>