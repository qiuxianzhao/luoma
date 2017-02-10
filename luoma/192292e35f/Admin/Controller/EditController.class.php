<?php
            namespace Admin\Controller;                 #这里必须是 namespace 模块名\Controller;
            use Think\Controller;                      #这里是固定格式
            class EditController extends Controller {  #类名必须和文件名一致！
                public function index(){               #默认方法
                    echo 'Edit模块/Edit控制器/index方法';
                }
            }