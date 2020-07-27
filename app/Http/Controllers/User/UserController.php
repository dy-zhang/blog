<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * 用户存储库的实现。
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * 创建新的控制器实例。
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {

    }

    /**
     *显示指定用户的 profile。
     *
     * @param  int  $id
     * @return string
     */
    public function index()
    {
        return "user index";
    }

    /**
     *显示指定用户的 profile。
     *
     * @param  int  $id
     * @return string
     */
    public function api()
    {
        return "user api";
    }

    
    public function req(Request $request)
    {
        // echo $request->path();
        // echo $request->url();
        // echo $request->input('arr');
        // echo $request->query('name'); //相当于get
        // dump($request->only(['name']));
        // dump($request->except(['name']));
        // dump($request->has(['name']));
        // dump($request->filled(['name']));
        // $request->flush();
        // dump($request->old('name'));
        $val = $request->cookie('name');
        dump($val);
    }
}
