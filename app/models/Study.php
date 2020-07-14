<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    // public $table = "studies";

    // public $timestamp = true;

    public $fillable = [
        'description',
        'date_init',
        'date_finish',
        'status',
        'area_id'
    ];

    public function area(){
        return $this ->belongsTo(Area::class, 'area_id', 'id');
    }

    public function countStatus()
    {
        $result = $this->select($this::raw('status, count(status) AS count'))->groupBy('status')->get();
        $parsedResult = [];
        foreach ($result as $row) {
            $parsedResult[$row->status] = $row->count;
        }
        return $parsedResult;
    }

}
