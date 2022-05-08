<?php

// include "connection.php";

// $datas = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM `biodata`"));

    function biodata ($name, $id, $college) {
        $data = "
            Nama : $name<br>
            NIM : $id<br>
            Universitas : $college<br>
        ";

        return $data;
    };

    function luas_keliling_segitiga ($alas, $tinggi) {
        $hitung_luas_segitiga = ($alas * $tinggi) / 2;
        $hitung_keliling_segitiga = ($alas + $tinggi) + sqrt(($alas * $alas) + ($tinggi * $tinggi));
        $hasil = "
            Diketahui :<br>
            Alas = $alas cm<br>
            Tinggi = $tinggi cm<br>

            Maka, luas segitiga adalah $hitung_luas_segitiga cm² dan kelilingnya adalah $hitung_keliling_segitiga cm
        ";

        return $hasil;  
    };
    
    function luas_keliling_lingkaran ($jari) {
        $hitung_luas_lingkaran = 3.14 * ($jari * $jari);
        $hitung_keliling_lingkaran = 2 * (3.14 * $jari);
        $hasil = "
            Diketahui :<br>
            Jari-jari = $jari cm<br>

            Maka, luas lingkaran adalah $hitung_luas_lingkaran cm² dan kelilingnya adalah $hitung_keliling_lingkaran cm
        ";

        return $hasil;  
    };
    
    function nilai ($nilai) {
        if ($nilai >= 85 && $nilai <= 100) {
            $abjad = "A";
        } elseif ($nilai >= 80 && $nilai <= 84) {
            $abjad = "AB";
        } elseif ($nilai >= 70 && $nilai <= 79) {
            $abjad = "B";
        } elseif ($nilai >= 65 && $nilai <= 69) {
            $abjad = "BC";
        } elseif ($nilai >= 60 && $nilai <= 64) {
            $abjad = "C";
        } elseif ($nilai >= 50 && $nilai <= 59) {
            $abjad = "D";
        } elseif ($nilai >= 0 && $nilai <= 54) {
            $abjad = "E";
        } else {
            $abjad = "Nilai tidak valid";
        };
        $hasil = "
            Nilai Anda : $nilai<br>
            Nilai Abjad : $abjad
        ";

        return $hasil;
    };

    echo "Praktik penerapan Fungsi pada PHP<br>";
    echo "<br>Contoh 1 : Mencetak biodata<br>";
    echo biodata("Renjiro A. Pramono", "A11.2020.12428", "Universitas Dian Nuswantoro");
    echo "<br>Contoh 2 : Menghitung luas dan keliling segitiga<br>";
    echo luas_keliling_segitiga(5, 10);
    echo "<br><br>Contoh 3 : Menghitung luas dan keliling lingkaran<br>";
    echo luas_keliling_lingkaran(5);
    echo "<br><br>Contoh 4 : Menentukan nilai abjad<br>";
    echo nilai(86);

    // echo "Nama : " . $datas['name'] . "<br>";
    // echo "NIM : " . $datas['nim'] . "<br>";
    // echo "Kelas : " . $datas['course_id'] . "<br>";
    // echo "Mata Kuliah  : " . $datas['course'] . "<br>";
    // echo "Tempat, tanggal lahir : " . $datas['birthplace'] . "<br>";
?>