<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
		echo index;
    }
	public function user($user,$pass){
		echo 'user:'.$user.'<br />pass:'.$pass;
	}
}