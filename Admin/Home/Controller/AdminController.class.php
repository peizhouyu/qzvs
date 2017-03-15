<?php
namespace Home\Controller;
use Think\Controller;

class AdminController extends Controller
{
    public  function  Showlist()
    {
       $adminmodel=M('qzvideo_admin');
       $condition=NULL;
        //��ҳ��ȡ����
         $p=getpage($adminmodel,$condition,10);
        $list=$adminmodel->field(true)->where($condition)->order('userid desc')->select();
        $this->list=$list;
        $this->page=$p->show();

        //$admin=$adminmodel->order('userid desc')->select();
        //$this->assign('info',$admin);
        //
        $count=$adminmodel->where($condition)->Count();
        $this->assign('count',$count);
        $this->assign('info',$list);
        $this->display('list');
    }

    public function Add()
    {
        if(empty(I('post.username'))) {
            $adminrolemodel = M('qzvideo_admin_role');
            $adminrole = $adminrolemodel->select();
            $this->assign('adminrole', $adminrole);
            $this->display(add);
        }else
        {
           $condition['rolename']=I('post.role');
            $adminrolemodel=M('qzvideo_admin_role');
            $adminrole= $adminrolemodel->where($condition)->find();
           // var_dump(I('post.role'));

            $data['username']=I('post.username');
            $data['password'] =md5(I('post.password'));
            $data['email']=I('post.email');
            $data['realname']=I('post.realname');
            $data['roleid'] =$adminrole['roleid'];
            $data['rolename']=$adminrole['rolename'];
            $data['lastloginip']=get_client_ip();
            $data['lastlogintime']=date('Y-m-d h:i:s',time());
            //var_dump($data);

            $rules = array(
                array('username','','�ʺ������Ѿ����ڣ�',0,'unique',1), // ��������ʱ����֤name�ֶ��Ƿ�Ψһ
            );

            $addmodel=M('qzvideo_admin');
            $result=$addmodel->validate($rules)->add($data);
           if ($result) {
                $this->success('����Ա��ӳɹ�', 'Showlist');
            } else {
               $this->error($addmodel->getError());
            }
          //  $ip=get_client_ip();
         //   var_dump($ip);
        }

    }

    public function Change()
    {
        $userid=I('get.id');
       // var_dump($userid);
        if(empty(I('post.username')))
        {
            $adminrolemodel = M('qzvideo_admin_role');
            $adminrole = $adminrolemodel->select();
            $this->assign('adminrole', $adminrole);

           $condition['userid']=$userid;
            $userinfomodel=M('qzvideo_admin');
            $userinfo=$userinfomodel->where($condition)->find();
            $this->assign('info',$userinfo);
            //var_dump($userinfo);

           $this->display('change');
        }else
        {
            $condition['rolename']=I('post.role');
            $adminrolemodel=M('qzvideo_admin_role');
            $adminrole= $adminrolemodel->where($condition)->find();

            $data['username']=I('post.username');
            $data['email']=I('post.email');
            $data['realname']=I('post.realname');
            $data['roleid'] =$adminrole['roleid'];
            $data['rolename']=$adminrole['rolename'];

            $changemodel=M('qzvideo_admin');
            $con['userid']= I('post.userid');

            $userinfo=$changemodel->where($con)->find();
            if (I('post.password')!==$userinfo['password'])
            {
                $data['password'] =md5(I('post.password'));
            }

            $rules = array(
                            array('username','','�ʺ������Ѿ����ڣ�',0,'unique',1), // ��������ʱ����֤name�ֶ��Ƿ�Ψһ
                        );

            if($changemodel->validate($rules)->where($con)->save($data))
            {
                if(session('userid')==$con['userid'])
                {
                    $this->assign("jumpUrl",U('Index/loginout'))->success('�޸ĸ�����Ϣ�ɹ��������µ�½');
                }else{
                    //var_dump(session('userid'));
                    //var_dump($con['userid']);
                    $this->success('�޸Ĺ���Ա��Ϣ�ɹ���','Showlist');
                }
            }else {
                //var_dump($data);
               //  $this->error('�޸Ĺ���Ա��Ϣʧ�ܣ�������');
                $this->error($changemodel->getError());
            }

        }
    }

    public function Del()
    {
        $userid=I('get.id');
       // var_dump($userid);
        $condition['userid']=$userid;
        $delmodel=M('qzvideo_admin');
        if($delmodel->where($condition)->delete())
        {
            $this->assign("jumpUrl",U('Admin/Showlist'))->success('��ɾ��');
        }else
        {
            $this->error('ɾ������Աʧ�ܣ�������');
        }

    }

public function search(){
        $key=I('post.key');
        $searchmodel=M('qzvideo_admin');
        $where['username'] = array('like','%'.$key.'%');
        $where['rolename'] = array('like','%'.$key.'%');
        $where['realname'] = array('like' , '%'.$key.'%');
        $where['_logic']='or';
        $map['_complex']=$where;



        $p=getpage($searchmodel,$map,1);
        $list=$searchmodel->field(true)->where($map)->order('userid desc')->select();
         $this->list=$list;
        $this->page=$p->show();
       
        $this->assign('info',$list);
        
        //$map['labname|catname']=$key;
        //$info=$searchmodel->where($where)->order('lableid desc')->select();
        //$this->assign('labinfo',$info);
        //var_dump($where);
        $this->display('list');
    }


    public function userchange()
    {
        if (empty(I('post.username')))
        {
            /*��ȡ����Ա��ɫ*/
            $adminrolemodel = M('qzvideo_admin_role');
            $adminrole = $adminrolemodel->select();
            $this->assign('adminrole', $adminrole);
            /*��ȡ����Ա��ɫ����*/

            /*��ȡ��ǰ��¼�û���Ϣ*/
            $username=session('name');
            $condition['username']=$username;
            $usermodel=M('qzvideo_admin');
            $userinfo=$usermodel->where($condition)->find();
           // session('userid',$userinfo['id']);
            $this->assign('info',$userinfo);
            /*��ȡ��ǰ��¼�û���Ϣ����*/
           // var_dump(session());
          $this->display('userchange');
        }
    }

}
