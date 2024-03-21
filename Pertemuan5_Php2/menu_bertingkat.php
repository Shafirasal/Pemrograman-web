<?php
// Buat variabel $menu. Variable ini adalah gabungan antara array terindeks dan array assosiatif multidimensi. Dikatakan multidimensi karena ia adalah suatu array yang memiliki array lain di dalamnya.
$menu= [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita", 
        "SubMenu" => [
            [
                "nama" => "Wisata", 
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

// Definisikan fungsi tampilkanMenuBertingkat dengan parameter $menu
function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>"; // Mulai tag ul
    foreach ($menu as $item) { // Loop melalui setiap item di menu
        echo "<li>{$item['nama']}"; // Tampilkan nama item dalam tag li
        if (isset($item['SubMenu'])) { // Periksa apakah item memiliki SubMenu
            tampilkanMenuBertingkat($item['SubMenu']); // Jika iya, panggil kembali fungsi ini dengan SubMenu sebagai argumen
        }
        echo "</li>"; // Tutup tag li
    }
    echo "</ul>"; // Tutup tag ul
}

// Panggil fungsi tampilkanMenuBertingkat dengan menu sebagai argumen
tampilkanMenuBertingkat($menu);
?>
