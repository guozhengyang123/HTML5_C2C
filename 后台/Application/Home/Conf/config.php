<?php
return array(
	//'配置项'=>'配置值'
	'FILE_UPLOAD' => array( 
            'maxSize'    =>    3145728,
            'rootpath'   =>    THINK_PATH,
            'savePath'   =>    '../Public/uploads/',
            // 'savePath'   =>    'Uploads/',
            'saveName'   =>    date('YmdHis',time()).'_'.mt_rand(1000,9999),  //array('uniqid',date('Ymd',time())),
            'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
            'autoSub'    =>    true, 
            'subName'    =>    array('date','Y-m-d'),
            )
);