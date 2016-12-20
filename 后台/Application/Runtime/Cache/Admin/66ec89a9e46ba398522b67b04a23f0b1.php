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
<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加分类</strong></div>
  <div class="body-content">
    <form action="<?php echo U('Admin/category/store');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
      <table class="insert-tab" width="100%">
          <tbody>
              <tr>
                  <th width="120"><i class="require-red">*</i>上级分类：</th>
                  <td>
                      <select name="pid" class="required">
                          <option value="">无</option>
                          <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["tag"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                      </select>
                  </td>
              </tr>
              <tr>
                  <th><i class="require-red">*</i>分类级数：</th>
                  <td>
                      <select name="tag" class="required">
                      <option value="1">1</option>
                      <option value="2">2</option>
                  </select>
                  </td>
              </tr>
              <tr>
                  <th><i class="require-red">*</i>分类名称：</th>
                  <td><input name="name" class="common-text required" style="width: 20%;" /></td>
              </tr>
              <tr>
                  <th></th>
                  <td>
                      <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                      <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                  </td>
              </tr>
          </tbody>
          </table>
  </form>
  </div>
</div>
</body>
</html>