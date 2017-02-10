<?php
return array(
	//'配置项'=>'配置值'  
  'TMPL_L_DELIM'          =>  '{{',            // 模板引擎普通标签开始标记
  'TMPL_R_DELIM'          =>  '}}',            // 模板引擎普通标签结束标记
  'TMPL_PARSE_STRING'  =>array( //定义模板替换规则的
       '__CSS__'    => '/Public/Admin/stylesheets', // 增加CSS文件路径替换规则
       '__LIB__'     => '/Public/Admin/lib',         // 增加JS  类库路径替换规则
       '__IMG__'    => '/Public/Admin/images',      // 增加图片文件路径替换规则
       '__UPLOAD__' => '/Public/Uploads',           // 增加新的上传路径替换规则
  ),    
);