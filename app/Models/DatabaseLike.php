<?php

namespace App\Models;

use CodeIgniter\Model;

class DatabaseLike extends Model
{
    public function getFakultas()
    {
        $fakultas = [];
        $arr = [
            [1, 'Fk. Ekonomi'],
            [2, 'Fk. Hukum'],
            [3, 'Fk. Teknik'],
            [4, 'Fk. Sastra dan Budaya'],
            [5, 'Fk. Kedokteran'],
            [6, 'Fk. Seni Rupa dan Desain'],
            [7, 'Fk. Matematika dan Ilmu Pengetahuan Alam'],
            [8, 'Fk. Ilmu Politik'],
            [9, 'Fk. Ilmu komputer'],
            [10, 'Fk. Pendidikan'],
            [11, 'Fk. Pariwisata dan Perhotelan'],
        ];

        foreach ($arr as $v) {
            $fakultas[] = ['id' => $v[0], 'fakultas' => $v[1]];
        }

        return $fakultas;
    }
    public function getJurusan()
    {
        $jurusan = [];
        $arr = [
            [1, 1, 'Ilmu Ekonomi'],
            [2, 1, 'Akuntasi'],
            [3, 1, 'Manajemen'],
            [4, 2, 'Ilmu Hukum'],
            [5, 3, 'Teknik Sipil'],
            [6, 3, 'Teknik Elektro'],
            [7, 3, 'Teknik Mesin'],
            [8, 3, 'Teknik Kimia'],
            [9, 3, 'Teknik Industri'],
            [10, 3, 'Teknik Fisika'],
            [11, 3, 'Teknik Informatika'],
            [12, 4, 'Sastra Indonesia'],
            [13, 4, 'Sastra Inggris'],
            [14, 4, 'Sastra Jepang'],
            [15, 4, 'Ilmu Sejarah'],
            [16, 5, 'Pendidikan Kedokteran'],
            [17, 6, 'Seni Rupa Murni'],
            [18, 6, 'Desain Grafis'],
            [20, 6, 'Desain Interior'],
            [21, 7, 'Matematika'],
            [22, 7, 'Fisika'],
            [23, 7, 'Geofisika'],
            [24, 7, 'Kimia'],
            [25, 8, 'Ilmu Politik'],
            [26, 9, 'Sistem Informasi'],
            [27, 9, 'Teknologi Informatika'],
            [28, 10, 'Pendidikan Bahasa Inggris'],
            [29, 10, 'Pendidikan Matematika'],
            [30, 10, 'Pendidikan Biologi'],
            [31, 10, 'Pendidikan Kimia'],
            [32, 10, 'Pendidikan Fisika'],
            [33, 10, 'Pendidikan Bahasa dan Sastra Indonesia'],
            [34, 11, 'Tata Boga'],
            [35, 11, 'Tata Busana'],
            [36, 11, 'Manajemen Perhotelan'],
            [37, 11, 'Pendidikan Tata Rias dan Kecantikan'],
        ];

        foreach ($arr as $v) {
            $jurusan[] = ['id' => $v[0], 'id_fk' => $v[1], 'prodi' => $v[2]];
        }

        return $jurusan;
    }
}
