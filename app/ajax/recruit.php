<?php
/**
 * Created by PhpStorm.
 * User: dmzie
 * Date: 10/11/2017
 * Time: 7:29 PM
 */

namespace App\Http\Controllers;

use DB;
use App\Recruit;

$results = DB::select("SELECT * FROM users");
echo $results;
