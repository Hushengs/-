<?php
/**
 * Index������
 *
 * @author xingcheng.hu
 * @createtime 2015-11-16 19:07:59
 */
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {

    //��̨��ҳ�������
    public function index(){
        $user = M('User');
        $data = $user->select();
        $this->assign('list',$data);
        $this->display();
    }
}