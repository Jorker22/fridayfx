<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req) {
        $username = $req->input('username1');
        $package = "package1";
        $data = array("userID"=>$username,"package"=>$package);
        
        DB::table('fridayfxes')->insert($data);

        echo"success";
    }

    function insertsd(Request $req) {
        $username = $req->input('username2');
        $package = "package2";
        $data = array("userID"=>$username,"package"=>$package);
        
        DB::table('fridayfxes')->insert($data);

        echo"success";
    }


    function insert3(Request $req) {
        $username = $req->input('username3');
        $package = "package3";
        $data = array("userID"=>$username,"package"=>$package);
        
        DB::table('fridayfxes')->insert($data);

        echo"success";
    }


    function insert4(Request $req) {
        $username = $req->input('username4');
        $package = "package4";
        $data = array("userID"=>$username,"package"=>$package);
        
        DB::table('fridayfxes')->insert($data);

        echo"success";
    }

}
