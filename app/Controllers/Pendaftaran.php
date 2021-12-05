<?php

namespace App\Controllers;

class Pendaftaran extends BaseController
{
    public function index()
    {
        if ($this->request->getPost('daftar') == true) {
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
                $prodi = $this->request->getPost('jurusan', true);
                $nisn = $this->request->getPost('nisn', true);
                $this->reg->daftar([
                    'nisn' => $nisn,
                    'asal_sekolah' => $this->request->getPost('sma', true),
                    'nama' => $this->request->getPost('nama', true),
                    'gender' => $this->request->getPost('gender', true),
                    'tgl_lahir' => $this->request->getPost('bday'),
                    'nohp' => $this->request->getPost('nohp', true),
                    'email' => $this->request->getPost('email'),
                    'id_jurusan' => $prodi,
                    'dibayar' => false,
                ]);
                return redirect()->to('pendaftaran/pembayaran')
                    ->with('nisn', $nisn)
                    ->with('jurusan', $prodi);
            }
            return redirect()->back()->withInput();
        }

        $data = [
            'jurusan' => $this->prodi->getProdi(),
            'validation' => $this->validator
        ];
        return view('pendaftaran/input', $data);
    }

    public function pembayaran()
    {
        if ($this->request->getPost('konfirmasi_pembayaran') == true) {
            $this->proses();
        }

        $nisn = session()->getFlashdata('nisn');
        $prodi = session()->getFlashdata('jurusan');
        session()->setFlashdata('reg_id', $this->reg->getRegId($nisn));

        helper('number');
        $data = [
            'validation' => $this->validator,
            'biaya' => $this->prodi->getBiaya($prodi),
            'diskon' => 20
        ];
        return view('pendaftaran/pembayaran', $data);
    }

    private function proses()
    {
        $transaksi = new \App\Models\TransaksiModel;
        if ($this->request->getPost('payment', true) === 'paypal') {
            if ($this->validate([
                'paypal' => [
                    'rules' => 'required|regex_match[/^[a-zA-Z0-9.]+(@paypal.com)$/]',
                    'errors' => [
                        'required' => 'Email paypal Harus Diisi',
                        'regex_match' => 'gunakan Email paypal',
                    ],
                ]
            ])) {
                $transaksi->konfirmasi([
                    'id_pendaftar' => session()->getFlashdata('reg_id'),
                    'payment_type' => $this->request->getPost('payment', true),
                    'email_paypal' => $this->request->getPost('paypal', true),
                    'rek_num' => null,
                    'exp_date' => null,
                    'sc_code' => null,
                ]);
                return redirect()->to('/')->with('registrasi', 'Transaksi sedang di proses Silahkan tunggu beberapa hari');
            }
        } else if ($this->request->getPost('payment', true) === 'rekening') {
            if ($this->validate([
                'rekening' => [
                    'rules' => 'required|valid_cc_number[visa]',
                    'errors' => [
                        'required' => 'Nomor rekening Harus Diisi',
                        'valid_cc_number' => 'Masukkan Nomor rekening dengan benar',
                    ],
                ],
                'expiry_date' => [
                    'rules' => 'required|valid_date[m/y]',
                    'errors' => [
                        'required' => 'Tanggal Kadaluarsa Harus Dimasukkan',
                        'valid_date' => 'Masukkan Tanggal Kadaluarsa dengan benar',
                    ],
                ],
                'cvc' => [
                    'rules' => 'required|min_length[3]|max_length[4]|numeric',
                    'errors' => [
                        'required' => 'Nomor CVC/CVV Harus Dimasukkan',
                        'numeric' => 'Masukkan Nomor CVC/CVV dengan benar',
                        'min_length' => 'Masukkan Nomor CVC/CVV paling sedikit 3 digit',
                        'max_length' => 'Masukkan Nomor CVC/CVV paling banyak 4 digit',
                    ],
                ],
            ])) {
                $transaksi->konfirmasi([
                    'id_pendaftar' => session()->getFlashdata('reg_id'),
                    'payment_type' => $this->request->getPost('payment', true),
                    'email_paypal' => null,
                    'rek_num' => $this->request->getPost('rekening', true),
                    'exp_date' => $this->request->getPost('expiry_date', true),
                    'sc_code' => $this->request->getPost('cvc', true),
                ]);
                return redirect()->to('/')->with('registrasi', 'Transaksi sedang di proses Silahkan tunggu beberapa hari');
            }
        }
        return redirect()->back()->withInput();
    }
}
