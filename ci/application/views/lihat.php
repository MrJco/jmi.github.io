<!DOCTYPE html>
<html>
<head>
    <title> TEST</title>
    </head>
    <body>
    <?php
    foreach($hasil as $row){
    echo $row->nim . "|".$row->nama."|".$row->email."<br>";
    }?>
    </body>
    </html>