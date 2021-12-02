<?php

namespace App\Controllers;

class Pendaftaran extends BaseController
{
    public function index()
    {
        if ($this->validate([
            'nisn' => [
                'rules' => 'required|is_unique[pendaftaran.nisn]',
                'errors' => [
                    'required' => 'NISN harus diisi',
                    'is_unique' => 'NISN sudah terdaftar'
                ]
            ],
            'sma' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Asal sekolah harus diisi'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi'
                ]
            ],
            'gender' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Kelamin harus dipilih'
                ]
            ],
            'nohp' => [
                'rules' => 'required|numeric|min_length[10]',
                'errors' => [
                    'required' => 'Nomor HP harus diisi',
                    'numeric' => 'Masukkan Nomor HP dengan Benar, contoh: 08123467890',
                    'min_length' => 'Nomor HP Terlalu pendek',
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email harus diisi',
                    'valid_email' => 'Masukkan email dengan benar, contoh: email.123@yahoo.com'
                ]
            ],
            'bday' => [
                'rules' => 'required|valid_date',
                'errors' => [
                    'required' => 'Tanggal lahir harus diisi',
                    'valid_date' => 'Masukkan Tanggal dengan benar'
                ]
            ],
            'jurusan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jurusan harus dipilih'
                ]
            ],
        ])) {
            session()->set('regdata', [
                'nisn' => $this->request->getPost('nisn', true),
                'asal_sekolah' => $this->request->getPost('sma', true),
                'nama' => $this->request->getPost('nama', true),
                'gender' => $this->request->getPost('gender', true),
                'tgl_lhr' => $this->request->getPost('bday'),
                'nohp' => $this->request->getPost('nohp', true),
                'email' => $this->request->getPost('email'),
                'jurusan' => $this->request->getPost('jurusan', true),
            ]);

            return $this->pembayaran();
        }

        $data = [
            'fakultas' => $this->fk->getFk(),
            'jurusan' => $this->prodi->getProdi(),
            'validation' => $this->validator
        ];
        return view('pendaftaran/input', $data);
    }

    public function pembayaran()
    {
        return view('pendaftaran/metode-pembayaran');

        if ((session()->get('regdata')) !== null) {
            // SIKE!!!
            header('Refresh: 5; url="https://youtu.be/dQw4w9WgXcQ";');
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Sepertinya anda tersesat, jika ingin kembali silahkan tunggu 5 detik...');
        }
    }

    private function _sukses()
    {
        return redirect()->to('/')->with('registrasi', 'Registrasi Anda Berhasil! Informasi lebih lanjut akan dikabarkan melalui email anda.');
    }
}
