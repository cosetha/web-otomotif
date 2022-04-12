<?php
if(isset($_POST['submit'])){
    $myfile = fopen("file.txt", "a") or die("Unable to open file!");
    $txt = $_POST['nama'].",".$_POST['comment'] ;
    fwrite($myfile, $txt);
    fclose($myfile);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <thead>

            </thead>
            <tbody>
                <td>
                    Nama: <input type="text" name="nama" id="">
                </td>
                <td>
                    Comment:  <input type="text" name="comment" id="">
                </td>
                <td>
                    <button type="submit" value="submit" name="submit"> Submit</button>
                </td>
            </tbody>
        </table>        
    </form>
</body>
</html>