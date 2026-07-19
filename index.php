<!DOCTYPE html>
<html>
<head>
    <title>Sistem Penilaian Mahasiswa</title>
    <style>
        body{
            font-family: Arial;
            background:#f4f4f4;
            padding:20px;
        }

        h2{
            text-align:center;
            color:#003366;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:white;
        }

        th{
            background:#003366;
            color:white;
            padding:10px;
        }

        td{
            padding:10px;
            text-align:center;
            border:1px solid #ccc;
        }

        tr:nth-child(even){
            background:#f2f2f2;
        }
    </style>
</head>
<body>

<h2>Sistem Penilaian Mahasiswa</h2>

<?php

// Array Mahasiswa
$mahasiswa = array(

array(
"nim"=>"230001001",
"nama"=>"Andi",
"nilai"=>90
),

array(
"nim"=>"230001002",
"nama"=>"Budi",
"nilai"=>75
),

array(
"nim"=>"230001003",
"nama"=>"Citra",
"nilai"=>60
),

array(
"nim"=>"230001004",
"nama"=>"Dinda",
"nilai"=>85
),

array(
"nim"=>"230001005",
"nama"=>"Eko",
"nilai"=>50
)

);


// Function menentukan grade
function grade($nilai){

    if($nilai>=85){
        return "A";
    }
    elseif($nilai>=70){
        return "B";
    }
    elseif($nilai>=60){
        return "C";
    }
    elseif($nilai>=50){
        return "D";
    }
    else{
        return "E";
    }

}

// Function menentukan status
function statusLulus($nilai){

    if($nilai>=60){
        return "Lulus";
    }else{
        return "Tidak Lulus";
    }

}

echo "<table>";

echo "<tr>
<th>No</th>
<th>NIM</th>
<th>Nama</th>
<th>Nilai</th>
<th>Grade</th>
<th>Status</th>
</tr>";

$no=1;

foreach($mahasiswa as $m){

echo "<tr>";

echo "<td>".$no."</td>";
echo "<td>".$m['nim']."</td>";
echo "<td>".$m['nama']."</td>";
echo "<td>".$m['nilai']."</td>";
echo "<td>".grade($m['nilai'])."</td>";
echo "<td>".statusLulus($m['nilai'])."</td>";

echo "</tr>";

$no++;

}

echo "</table>";

?>

</body>
</html>