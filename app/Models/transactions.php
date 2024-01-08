<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class transactions extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $fillable = ['id','nama_bank', 'nomor_rekening', 'bukti_pembayaran'];
}
