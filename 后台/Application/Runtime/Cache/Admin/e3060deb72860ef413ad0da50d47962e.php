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
    <script src="/C2C/Public/admin/js/jquery.js"></script>
    <script src="/C2C/Public/admin/js/pintuer.js"></script>  
</head>
<body>
<form method="post" action="">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 招领物品</strong></div>
    <div class="padding border-bottom">
      <ul class="search">
        <li>
          <button type="button"  class="button border-green" id="checkall"><span class="icon-check"></span> 全选</button>
          <button type="submit" class="button border-red"><span class="icon-trash-o"></span> 批量删除</button>
        </li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th>排序</th>
        <th>ID</th>
        <th>物品名称</th>
        <th>拾主</th>
        <th>时间</th>
        <th>地点</th>
        <th>描述</th>      
        <th>操作</th>       
      </tr>  
       <?php if(is_array($pick)): $i = 0; $__LIST__ = $pick;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?><tr>
        <td><input type="checkbox" name="id[]" value="1" /></td>
        <td><?php echo ($p["id"]); ?></td>
        <td><?php echo ($p["name"]); ?></td>
        <td><?php echo ($p["picker"]); ?></td>
        <td><?php echo ($p["time"]); ?></td>
        <td><?php echo ($p["place"]); ?></td>
        <td><?php echo ($p["discribe"]); ?></td>
        <td>
          <a class="link-update" href="<?php echo U('Admin/LandP/pickedit');?>/id/<?php echo ($data["id"]); ?>">修改</a>
          <a class="link-del" href="<?php echo U('Admin/LandP/pickdestory');?>/id/<?php echo ($data["id"]); ?>">删除</a>
       </td>
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      <tr>
        <td colspan="10"><div class="pagelist"> <a href="">上一页</a> <span class="current">1</span><a href="">2</a><a href="">3</a><a href="">下一页</a><a href="">尾页</a> </div></td>
      </tr>
    </table>
  </div>
</form>
<script type="text/javascript">

function del(id){
  if(confirm("您确定要删除吗?")){
    
  }
}

$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
    if (this.checked) {
      this.checked = false;
    }
    else {
      this.checked = true;
    }
  });
})

function DelSelect(){
  var Checkbox=false;
   $("input[name='id[]']").each(function(){
    if (this.checked==true) {   
    Checkbox=true;  
    }
  });
  if (Checkbox){
    var t=confirm("您确认要删除选中的内容吗？");
    if (t==false) return false;     
  }
  else{
    alert("请选择您要删除的内容!");
    return false;
  }
}

</script>
</body></html>