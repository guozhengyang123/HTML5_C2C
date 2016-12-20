<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="/C2C/Public/admin/css/pintuer.css">
<link rel="stylesheet" href="/C2C/Public/admin/css/admin.css">
<link rel="stylesheet" href="/C2C/Public/admin/css/main.css">

<script src="/C2C/Public/admin/js/jquery.js"></script>
<script src="/C2C/Public/admin/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>

  <form action="<?php echo U('Admin/adv/store');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            
                            <tr>
                                <th><i class="require-red">*</i>name</th>
                                <td>
                                    <input class="common-text required" id="title" name="name" size="50" value="" type="text">
                                </td>
                            </tr>
                            <br/>
                            <tr>
                                <th><i class="require-red">*</i>图：</th>
                                <td><input name="thumb" id="" type="file"></td>
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


</body>
</html>