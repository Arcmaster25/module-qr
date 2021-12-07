<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ConnectionActive extends Model
{
    use HasFactory;

    /**
     * 
     * The table associated with the model
     * 
    */
    protected $table = 'conection_active';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'state',
        'user_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'user_id',
    ];

    /**
     * Desconect user the system
     *
     * 
     */
    public static function closeConnection($userId){

        DB::table('conection_active')->where('user_id', $userId)->delete();

        return true;

    }
}
