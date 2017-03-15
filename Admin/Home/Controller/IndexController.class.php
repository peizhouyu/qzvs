<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

    // echo "sdfa";
    if (empty($_SESSION['name'])) {
           $this->redirect('Index/login',array('cate_id=>2'),0,'请先登录...');
          //$this->display('index');
        }else{
            $this->assign('name',session('name'));
            $this->assign('userrole',session('userrole'));

        $adminrolemodel = M('qzvideo_admin_role');
        $adminrole = $adminrolemodel->select();
        $this->assign('adminrole', $adminrole);

        $condition['username']=session('name');
        $userinfomodel=M('qzvideo_admin');
        $userinfo=$userinfomodel->where($condition)->find();
        $this->assign('userinfo',$userinfo);

            $videotypemodel=M('qzvideo_category');
            $videotype=$videotypemodel->select();
            $this->assign('cat',$videotype);

            $vediotypemodel=M('qzvideo_category');
            $vediotype = $vediotypemodel->select();
            $this->assign('index',$vediotype);
            switch(session('userrole'))
            {
                case 超级管理员:
                    $this->display(index);
                    break;
                case 幻灯管理员:
                    $this->display(index_banner);
                    break;
                case 内容管理员:
                    $this->display(index_content);
                    break;
            }

        }
      
 

    }
/*登录*/
    public function login()
    {
        header("Content-Type:text/html;charset=utf-8");
        if (empty(I('post.username'))) {
            $this->display();
        }else{

            $user=M('qzvideo_admin');
            $name=I('post.username');

            $condition['username']=I('post.username');
            $condition['password']=md5(I('post.password'));
            //var_dump($condition);
            $userinfo=$user->where($condition)->find();

            if($userinfo){
                session('name',$name);
                $userid=$userinfo['userid'];
                session('userid',$userid);
               // var_dump($userinfo);
               $userrole=$userinfo['rolename'];
              //  var_dump($userrole);
                session('userrole',$userrole);
               //var_dump(session('userrole'));
                $data['lastloginip']=get_client_ip();
                $data['lastlogintime']=date('y-m-d h:m:s');
                session('loginip',get_client_ip());
                session('logintime',date("Y-m-d h:m:s"));
                //$userid=$userinfo['userid'];
                //$databasename='qzvideo_admin';
                //var_dump($condition);
                //change_info($databasename,$userid,$data);
                $changemodel = M("qzvideo_admin");
                $condition['userid']=$userinfo['userid'];
                $changemodel->where($condition)->save($data);
               /// var_dump(session());

              $this->success('登陆成功','index');
            }else{
                $this->error('用户名或密码错误，请重新登录！');
            }
        }
    }


/*注销*/
    public function loginout(){
        session_destroy();
        $this->success('已注销','login');
    }



}