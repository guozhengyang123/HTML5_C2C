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
        <div class="panel-head"><strong class="icon-reorder"> 商品列表</strong></div>
        <div class="padding border-bottom">  
          <a href="<?php echo U('Admin/Goods/goodsadd');?>"><button type="button" class="button border-yellow" ><span class="icon-plus-square-o"></span> 添加商品</button></a>
        </div>

        <form name="myform" id="myform" method="post">
            <div class="result-title">
                <div class="result-list">
                    <a id="batchDel" href="javascript:void(0)"><button class="btn btn4 btn-danger">批量删除</button></a>
                    <a id="updateOrd" href="javascript:void(0)"><button class="btn btn41 btn-success">更新排序</button></a>
                </div>
            </div>
            <div class="result-content">
                <table class="result-tab" width="100%">
                    <tr>
                        <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                        <th>排序</th>
                        <th>ID</th>
                        <th>商品名称</th>
                        <th>商品类别</th>
                        <th>数量</th>
                        <th>原价</th>
                        <th>现价</th>
                        <th>简介</th>
                        <th>新旧程度</th>
                        <th>图片</th>
                        <th>卖家</th>
                        <th>操作</th>


                    </tr>
                    <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td class="tc"><input name="id[]" value="<?php echo ($vo["id"]); ?>}" type="checkbox"></td>
                        <td>
                            <input name="ids[]" value="<?php echo ($vo["id"]); ?>" type="hidden">
                            <input class="common-input sort-input" name="ord[]" value="<?php echo ($vo["id"]); ?>" type="text">
                        </td>
                        <td><?php echo ($vo["id"]); ?></td>
                        <td><?php echo ($vo["name"]); ?></td>
                        <td><?php echo ($vo["cid"]); ?></td>
                        <td><?php echo ($vo["quantity"]); ?></td>
                        <td><?php echo ($vo["price"]); ?></td>
                        <td><?php echo ($vo["secprice"]); ?></td>
                        <td><?php echo ($vo["intro"]); ?></td>
                        <td><?php echo ($vo["condition"]); ?></td>
                        
                        <td><?php echo ($vo["picture"]); ?></td>
                        <td><?php echo ($vo["username"]); ?></td>

                        <td>
                            <a class="link-del" href="<?php echo U('Admin/goods/goodsedit');?>/id/<?php echo ($vo["id"]); ?>">编辑</a>
                            <a class="link-del" href="<?php echo U('Admin/goods/destory');?>/id/<?php echo ($vo["id"]); ?>">删除</a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
            </div>
        </form>
    </div>
</body>
</html>