<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/9 0009
 * Time: 上午 11:18
 */

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function info($id)
    {
        return Member::getMember();

        return 'member-info-'.$id;
    }

    public function test()
    {
//        $member = DB::select('select * from member where id > ?',[1]);
//        dd($member);

//        $bool = DB::insert('insert into member(name,age) values(?,?)',['yy2',22]);
//        var_dump($bool);

//        $mun = DB::update('update member set age = ? where name = ?',[18,'yy1']);
//        var_dump($mun);

//        $res = DB::delete('delete from member where id>?',[1]);
//        dd($res);

    }

    public function query()
    {
        $data =[
            ['name'=>'yy5','age'=>23],
            ['name'=>'yy6','age'=>24],
            ['name'=>'yy7','age'=>25],
            ['name'=>'yy8','age'=>26],
            ['name'=>'yy9','age'=>27]
        ];

        $bool = DB::table('member')->insert($data);

        //insertGetId
        //increment
        //decrement
        //delete
        //truncate清空表

        //查询
        //get
        //first
        //where   whereRaw
        //pluck
        //lists
        //select
        //chunk

        dd($bool);
    }


}