<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Home\Controller;
use OT\DataDictionary;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class IndexController extends HomeController {
    public function index(){
		//读取栏目列表数据
		$channel = D('Channel')->field("title,url")->order('sort asc')->select();
		$this->assign('channel',$channel);
		
		
        $this->display();
    }
    //产业园区
    public function gion(){
        $this->display();
    }
    //厂房租售
    public function rental(){
       
    	$this->display();
    }
	public function tudi(){
       
    	$this->display();
    }
	
	public function louyu(){
       
    	$this->display();
    }
    /*新闻中心*/
    public function news(){
    	$this->display();
    }
    
 
    
    /*留言板*/
    public function message(){
    	$this->display();
    }
    
    /*服务*/
    public function server(){
    	$this->display();
    }
    
    /*税务规划*/
    public function taxation(){
    	$this->display();
    }
    
}