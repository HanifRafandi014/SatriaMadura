<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Barang_Keluar;

use Illuminate\Foundation\Auth\User as Model;

class Staff extends Model
{
    use HasFactory;


    protected $table = "staff";
    public $timestamps = false;
    protected $primaryKey = 'id';


    protected $fillable = [
        'name',
        'nama_staff',
        'username',
        'email',
        'password',
        'no_telepon',
    ];


}
