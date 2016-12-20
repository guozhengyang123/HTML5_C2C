<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="/xxx/Public/admin/css/pintuer.css">
<link rel="stylesheet" href="/xxx/Public/admin/css/admin.css">
<link rel="stylesheet" href="/xxx/Public/admin/css/main.css">
<link rel="stylesheet" href="/xxx/Public/admin/css/table.css">


<script src="/xxx/Public/admin/js/jquery.js"></script>
<script src="/xxx/Public/admin/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">  
  <button type="button" class="button border-yellow" ><a href="<?php echo U('Admin/adv/advadd');?>"><span class="icon-plus-square-o"></span> 添加内容</a></button>
  </div>

  <form name="myform" id="myform" method="post">
                
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>排序</th>
                            <th>ID</th>
                            <th>图片名称</th>
                            <th>图片地址</th>
                            <th>操作</th>


                        </tr>
                        <?php if(is_array($adv)): $i = 0; $__LIST__ = $adv;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td class="tc"><input name="id[]" value="<?php echo ($vo["id"]); ?>}" type="checkbox"></td>
                            <td>
                                <input name="ids[]" value="<?php echo ($vo["id"]); ?>" type="hidden">
                                <input class="common-input sort-input" name="ord[]" value="<?php echo ($vo["id"]); ?>" type="text">
                            </td>
                            <td><?php echo ($vo["id"]); ?></td>
                            <td><?php echo ($vo["name"]); ?></td>
                            <td><?php echo ($vo["address"]); ?></td>
                            <td>
                                <a class="link-del" href="<?php echo U('Admin/adv/destory');?>/id/<?php echo ($vo["id"]); ?>">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                </div>
            </form>
</div>


</body>
</html>