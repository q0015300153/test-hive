<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hive extends Controller
{
    public function test(Request $request)
    {
	  	$hive = new \ThriftSQL\Hive('hive-server', 10000, 'root', 'root', 30);
        $hiveTables = $hive
            ->connect()
            ->getIterator('SHOW TABLES');

        $hive->disconnect();
        dd($hiveTables);
    }
}
