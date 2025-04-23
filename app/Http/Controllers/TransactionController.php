<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function handleTransaction()
    {
    DB::transaction(function(){
        DB::select('select * from module where id=5');
        DB::delete('delete  from module where id=6');

    });
  
}
};
