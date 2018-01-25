<?php
namespace Home\Controller;
use Think\Controller;
//用户注册
class UserloginController extends Controller {
    public function index(){
        if(IS_POST){
            $post =I('post.');
            $post['eye_password']=md5($post['eye_password']);
            //实例化模型
            $model =D('eye_user');
            //查询，根据用户名密码进行查询
            $row=$model->where($post)->find();
            if($row){
                //用户名存在，登陆持久化
                session('eye_uid',$row['eye_uid']);//记录用户的id
                session('eye_phone',$row['eye_phone']);//用户名
                session('eye_username',$row['eye_username']);
                //session('perpass',$row['perpass']);//密码
                $this->success('登陆成功',U('center'),3);
            }else{
                $this->error('手机号或密码错误',U('index'),3);
            }
        }
        $this->display();
    }
    public function center(){
        $data = D('eye_user') -> where("eye_uid = {$_SESSION['eye_uid']}") -> find();
        $this -> assign('data',$data);
        $this -> display();
    }
    
    public function logout(){
        session_unset();
        session_destroy();
        $this->success('',U('Index/index'));
    }
}