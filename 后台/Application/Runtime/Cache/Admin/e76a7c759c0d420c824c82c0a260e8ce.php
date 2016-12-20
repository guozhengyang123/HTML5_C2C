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
<link rel="stylesheet" href="/xxx/Public/admin/css/table.css">

<script src="/xxx/Public/admin/js/jquery.js"></script>
<script src="/xxx/Public/admin/js/pintuer.js"></script>
<script src="/xxx/Public/admin/js/jquery.2.1.4-min.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
  <div class="body-content">
   <form action="<?php echo U('Admin/Goods/store');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
      <table class="insert-tab" width="100%">
          <tbody>
              <tr>
                  <th><i class="require-red">*</i>标题：</th>
                  <td><input name="name" class="common-text required" style="width: 20%;" /></td>
              </tr>
              
              <tr>
                  <th width="120"><i class="require-red">*</i>分类：</th>
                  <td>
                    
                      <select name="" id="cattype">
                        <option>请选择父类别</option>
                        <?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><option value="<?php echo ($val["id"]); ?>"><?php echo ($val["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
            
                    <select name="cid" id="catchild">
                        <option>请选择子类别</option>
                    </select>

                  </td>
              </tr>

              <tr>
                  <th><i class="require-red">*</i>数量：</th>
                  <td><input name="quantity" class="common-text required" style="width: 20%;" /></td>
              </tr>
              <tr>
                  <th><i class="require-red">*</i>原价：</th>
                  <td><input name="price" class="common-text required" style="width: 20%;" /></td>
              </tr>
              <tr>
                  <th><i class="require-red">*</i>售价：</th>
                  <td><input name="secprice" class="common-text required" style="width: 20%;" /></td>
              </tr>
              <tr>
                  <th><i class="require-red">*</i>新旧程度：</th>
                  <td>
                    <select  name="condition" class="required">
                      <option value="1">1成新</option>
                      <option value="2">2成新</option>
                      <option value="3">3成新</option>
                      <option value="4">4成新</option>
                      <option value="5">5成新</option>
                      <option value="6">6成新</option>
                      <option value="7">7成新</option>
                      <option value="8">8成新</option>
                      <option value="9">9成新</option>
                      <option value="10">10成新</option>
                    </select>
                  </td>
              </tr>
              <tr>
                  <th><i class="require-red">*</i>描述：</th>
                  <td><input name="intro" class="common-text required" style="width: 70%;" /></td>
              </tr>
              <tr>
                  <th><i class="require-red">*</i>图片：</th>
                  <td>
                    <input name="picture" type="file">
                  </td>
              </tr>
              <tr>
                  <th><i class="require-red">*</i>上传用户：</th>
                  <td><input name="username" class="common-text required" style="width: 70%;" /></td>
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

<script type="text/javascript">
console.log("1314");
$("#cattype").change(function(){
    var catid = $(this).val(); //获取切换的类别的id
    console.log(catid);
    $.ajax({
        url :"<?php echo U('admin/Goods/gett');?>",
        data:{"name":catid},
        type:'POST',
        dataType:"json",       
        // error:function(){
        //     console.log(<?php echo U("home/Publish/get");?>);
        // },

        success:function(data){
            $('#catchild option[value!=""]').remove(); //清空option 每次改变option的时候载入新的数据
        //alert(data.length);
            if(data==''){
                vals="<option value='data[i].id'>"+"请选择子类别"+"</option>";
                $(vals).appendTo("#catchild");
            }else{
                for(var i=0;i<data.length;i++){
                    var vals='';
                    vals+="<option value="+data[i].id+">"+data[i].name+"</option>";
                    $(vals).appendTo("#catchild");
                }
            }

            console.log(data);    
           
               
        
        }
    });
});
</script>

</body></html>