<?php
namespace app\index\controller;

use think\Loader;
use think\Db;
use think\Controller;
use think\PHPMailer\PHPMailer\PHPMailer;

class Index extends Controller
{	
//邮箱发送邮件
	public function index()
	{
		return $this->fetch();
	}
	public function reg()
	{
		$email=input('post.email');
		$username=input('post.username');
		$title="你好,".$username.'欢迎注册相亲网';
		$body="你好，".$username.',相亲网欢迎你的加入，以下是激活链接：http://localhost/tp5';
		sendmail($email,$title,$body);
	}

}
