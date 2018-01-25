<?php
namespace Home\Controller;
use Think\Controller;
class ExpertController extends Controller {
    public function index(){
        $model = M('eye_expert_user');
        $Data = $model -> field('expert_id, expert_realname, expert_pic, expert_job, expert_hospital, expert_brief, expert_time') -> order('expert_time desc') -> select();
        $this -> assign('Data', $Data);
        $this -> display();
    }
//    专家登录
    public function login(){
        if(IS_POST){
            $post =I('post.');
//            dump($post);exit;
            $post['expert_password']=md5($post['expert_password']);
            //实例化模型
            $model =M('eye_expert_user');
            //查询，根据用户名密码进行查询
            $row=$model->where($post)->find();
            if($row){
                //用户名存在，登陆持久化
                session('expert_id',$row['expert_id']);//记录用户的id
                session('expert_phone',$row['expert_phone']);//用户名
                session('expert_username',$row['expert_username']);
                //session('perpass',$row['perpass']);//密码
                $this->success('登陆成功',U('center'),3);
            }else{
                $this->error('手机号或密码错误',U('login'),3);
            }
        }
        $this -> display();
    }
//    个人中心
    public function center(){
        $data = D('eye_expert_user') -> where("expert_id = {$_SESSION['expert_id']}") -> find();
        $this -> assign('data',$data);
        $this -> display();
    }
    public function deta(){
        $id = I('get.expert_id');
        $Deta = M('eye_expert_user') -> where("expert_id = {$id}") -> find();
        $Deta['expert_time'] = date('Y-m-d', $Deta['expert_time']);
        $this -> assign('Deta', $Deta);
        $this -> display();
    }
//    专家注册
    public function reg(){
        if(IS_POST){
            $post = I('post.');
            if($post['expert_password'] != $post['expert_password2']){
                $this -> error("两次输入密码不一样",U('Expert/reg'),2);
            }
            $verify =new \Think\Verify();
            $rst =$verify->check($post['authcode']);
            if(!$rst){
                $this->error("验证码错误，请重新输入",U('Expert/reg'),2);
            }else{
                $post['expert_password']=md5($post['expert_password']);
                $model = M('eye_expert_user');
                $a = $post['expert_phone'];
                $ss = $model->where("expert_phone={$post['expert_phone']}")->find();
                if($ss){
                    //echo $model->_sql();exit;
                    $this->error("该手机号已注册！",U('Expert/reg'),2);
                }
                $post['expert_time'] = time();
                $sss=$model->add($post);
                if($sss){
                    $this->success("恭喜您，注册成功！",U('Expert/login'),2);
                }else{
                    echo "注册失败！";
                }
            }
        }
        $this -> display();
    }

}