<?php
//array 1 dimensi
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(',', $nilaiLulus) ."<br>" ;

/*
indeks 0= nama
indeks 1= pengalaman
menggunakan array 2 dimensi dengan perulangan foreach 
yang mana nilai dari daftarKaryawan akan disimpan sementara 
pada variabel $nilai. lalu di if akan dilakukan pengecekan jika pada indeks ke 1 pada variabel pengalaman karyawan >5 tahum. 
maka nama karyawan(indeks 0) akan dimasukan ke dalam  array $karyawanPengalamanLimaTahun
*/
$daftarKaryawan =[
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan){
    if($karyawan[1] >5){
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " .implode(',', $karyawanPengalamanLimaTahun) ."<br>";


/* 
indeks 0= nama
indeks 1= nilai
ini menggunakan array asosiatif. $daftarNilai[$mataKuliah] mengakses array yang berisi daftar nilai untuk
mata kuliah yang ditentukan oleh variabel $mataKuliah di sisni yang dipilih adalah "fisika" 
lalu akan disimpan sementara pada variabel $nilai.
*/
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],

    'Fisika'=> [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 85],      
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br> ";

foreach ($daftarNilai[$mataKuliah] as $nilai){
    echo "Nama: {$nilai [0]}, Nilai: {$nilai[1]} <br>";
}


/*
Ada soal cerita : Seorang guru ingin mencetak daftar nilai siswa dalam ujian matematika. 
Guru tersebut memiliki data setiap siswa terdrir dari nama dan nilai. Bantu guru ini mencetak daftar
nilai siswa yang mencapai nilai di atas rata-rata kelas. 
Dengan ketentuan nama dan nilai siswa Alice dapat 85, Bob dapat 92, Charlie dapat 78, David dapat 64, Eva dapat 90
 */

 $nilaiMahasiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

// Hitung total nilai
$totalNilai = 0;
foreach ($nilaiMahasiswa as $nilai) {
    $totalNilai += $nilai[1];
}

// Hitung rata-rata nilai
$rataRata = $totalNilai / count($nilaiMahasiswa);
echo "Rata-rata kelas: $rataRata <br>";

// Memcetak daftar nilai di atas rata-rata kelas
echo "Daftar nilai siswa yang di atas rata-rata kelas: <br>";
foreach ($nilaiMahasiswa as $nilai) {
    if ($nilai[1] > $rataRata) {
        echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
    }
}

//cara ke 2
$dataMahasiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];
$jumlahMahasiswa = count($dataMahasiswa);

$totalNilaiKelas = 0;
foreach($dataMahasiswa as $mahasiswa){
    $totalNilaiKelas += $mahasiswa[1];
}

$rataRata = $totalNilaiKelas / $jumlahMahasiswa;
echo "<hr> Daftar siswa yang memiliki nilai di atas rata-rata kelas $rataRata: <br>";
foreach($dataMahasiswa as $mahasiswa){
    if ($mahasiswa[1] > $rataRata){
        echo $mahasiswa[0] . ":" . $mahasiswa[1] . "<br>";
    }
}

  
?>
