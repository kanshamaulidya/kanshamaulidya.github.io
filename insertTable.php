<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "web_db";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    if($connect){
        echo "Koneksi ke MYSQL berhasil<br>";
    }
    else{
        echo "Koneksi ke MYSQL gagal" . mysqli_connect_error();
    }

    $query = "INSERT into student (name, address)
                VALUES ('Kansha', 'Nganjuk'),
                ('Khosy', 'Nganjuk'),
                ('Dila', 'Nganjuk')";

    if(mysqli_query($connect, $query)){
        echo "Data baru berhasil dibuat";
    }
    else{
        echo "Data baru gagal dibuat <br>". mysqli_error($connect);
    }
    mysqli_close($connect);
?>