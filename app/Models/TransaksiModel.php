<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $allowedFields = ['id_pendaftar', 'payment_type', 'email_paypal', 'rek_num', 'exp_date', 'sc_code'];

    public function konfirmasi($data)
    {
        return $this->save($data);
    }
}
