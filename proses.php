<?php
include_once('koneksi.php');
if(isset($_GET['aksi'])){
    if($_GET['aksi'] == "all"){
        $sql = "SELECT * FROM `01-artikel`";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
        // output data of each row
            $rows = array();
            while($row = $result->fetch_assoc()) {
                // echo "id: " . $row["id_artikel"]. " - Judul: " . $row["judul"]. " - Deskripsi: " . $row["deskripsi"]. "<br>";
                $rows[] = $row;
            }

            echo (json_encode($rows));
    
            // while($row = $rs->fetch_assoc()) {
            //     $rows[] = $row;
            // }
            // return $hasil = $rows;
        } else {
            echo "0 results";
        }        
    }elseif($_GET['aksi'] == "detail"){
    
    }elseif($_GET['aksi'] == "tamu"){
        
    }
}else{
   
}



$conn->close();