<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'last_name',
        'age',
        'email',
        'mobile',
    ];

    /**
     * Get all clients
     *
     * 
     */
    public static function get_all(){
        $all_clients = DB::table('clients')->get();

        return $all_clients;
    }

    /**
     * Update client data
     *
     * 
     */
    public static function update_data($array_fields_updates, $id){
        $update = DB::table('clients')->where('id', $id)->update($array_fields_updates);

        return $update;
    }
}
