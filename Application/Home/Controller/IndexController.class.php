<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    /*
     * 若要把二维码输出到页面的某个位置,把 qrcode() 的值用变量接收,分配到页面即可
     */
    public function index(){
        if(IS_POST){
            $url = I('post.url');
            empty($url) && $this->error('请输入URL');
            //调用函数
            qrcode($url,3,6);
        }else{
            $this -> display();
        }
    }
}