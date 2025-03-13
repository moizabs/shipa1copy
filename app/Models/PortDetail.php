<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortDetail extends Model
{
    use HasFactory;
    protected $table = 'port_details';
    protected $fillable = [
        'port_name',
        'country',
        'terminal_name',
        'delivery_address',
        'longitude',
        'latitude',
        'status'
    ];
    
    public function portToPort()
    {
        return $this->hasMany(PortToPort::class,'port_detail_id','id');
    }
    
    public function single_port()
    {
        return $this->hasOne(PortToPort::class,'port_detail_id','id');
    }
}
