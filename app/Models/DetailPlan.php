<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPlan extends Model
{
    use HasFactory;

    protected $table = 'details_plan';

    // Através do Detalhe recupera um Plano
    public function plan()
    {
        $this->belongsTo(Plan::class);
    }
}
