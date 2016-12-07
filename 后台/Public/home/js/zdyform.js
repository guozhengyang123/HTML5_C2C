//分类ajax

function Write_Select(SiteId,table)
 {
  var s="";
  for(i=2;i<10;i++)
   {
     s+="<select name=\"s_sort\" id=\"s_sort\" onchange=\"c_sort("+SiteId+","+i+",'"+table+"')\" style=\"display:none\"></select> ";
   }
  document.write(s);
 }

function c_sort(SiteId,level,The_Table) //ajax获取分类
 {
   var s_objs=document.getElementsByName("s_sort");
   for(i=0;i<s_objs.length;i++)
     {
      if(i<=(level-1)){continue;}
      s_objs[i].options.length=0;
      s_objs[i].style.display="none";
     }
   var obj=s_objs[level-1];
   if(Sort_Type=="all")
     {
      if(obj.value=="")
       document.getElementById("sort").value=s_objs[level-2].value;
      else
       document.getElementById("sort").value=obj.value;
     }
   else
     {
      document.getElementById("sort").value="0";
     }
   if(obj.value!="0" && obj.value!="")
    {
      if(document.forms[The_Table]!=null)
       {
        var posttype=document.forms[The_Table].post;
        if(posttype!=null && typeof(load_form_structure)=="function")
        {
         load_form_structure(obj.value,posttype.value,The_Table);
        }
       }
      var R=Math.random();
      var x=new PAAjax();
      x.setarg("get",false);
      x.send("/e/aspx/get_sort.aspx","siteid="+SiteId+"&table="+The_Table+"&sortid="+obj.value+"&from=member&r="+R,function(v){insert_sort(v,level)});
    }
  c_sort_callback(The_Table);//改变触发
 }

function c_sort_callback(The_Table)
 {

 }

function insert_sort(v,level) //ajax获取分类回调
 {
   var s_objs=document.getElementsByName("s_sort");
   if(IsNum(v))
    {
      document.getElementById("sort").value=v;
    }
   else
    {
      var obj=s_objs[level];
      obj.style.display="";
      var A_v=v.split(',,');
      var item;
      if(Sort_Type=="all")
       {
         item=new Option("---所有子分类---","");
       }
      else
       {
         item=new Option("---请选择---","0");
       }
      obj.options.add(item);
      for(i=0;i<A_v.length;i++)
       {
        if(A_v[i]==""){continue;}
        item=new Option((A_v[i].split(','))[1],(A_v[i].split(','))[0]);
        obj.options.add(item);
       }
   }
 }

function Load_Sort(SiteId,Sorts,table) //初始分类，Sorts为parent_ids加current_sortid
   {
    var s_objs=document.getElementsByName("s_sort");
    if(s_objs.length==0){return;}
    var A_Sorts=Sorts.split(",");
    Sorts="";
   for(i=0;i<A_Sorts.length;i++)
    {
     if(A_Sorts[i]=="" || A_Sorts[i]=="0"){continue;}
     Sorts+=A_Sorts[i]+",";
    }
   A_Sorts=Sorts.split(",");
   for(k=0;k<A_Sorts.length;k++)
   {
     if(A_Sorts[k]!="")
      { 
        s_objs[k].value=A_Sorts[k];
        c_sort(SiteId,k+1,table);
      }
   }
 }

//分类ajax

function Check_ZdyForm(formName,PostType)
  {
   var FckMaxlength=0;         //编辑器中允许最大html长度,0则不限制
   var interval=0;             //表示连续发布时间间隔分钟数，0则不限制
   var interval_type="alladd"  // alladd表示所有发布表(不包括会员注册)统一验证时间间隔，留空则表单分开验证。
   var CookieName,CookieValue;
   if(PostType==null){PostType="add";}
   if(interval_type=="alladd"){CookieName="alladd"}else{CookieName=formName;}
   if(formName!="pa_member")
    {
      if(interval>0 && PostType=="add")
      {
       CookieValue=GetCookie(CookieName);
       if(CookieValue=="1")
       {
         alert(interval+"分钟内只能连续发布一次，请稍后再试!");
         return;
       }
      } 
    }
   var Names=document.forms[formName].mustname.value;
   var Fields=document.forms[formName].mustfield.value;
   var Fieldtype=document.forms[formName].musttype.value;
   var Obj_Sort=document.forms[formName].sort;
   if(Obj_Sort!=null && Fields.indexOf(",sort,")<0)
    {
      if(Obj_Sort.value=="0" || Obj_Sort.value=="")
       {
        if(Obj_Sort.value=="0")
         {
          alert("请选择分类!");
         }
        else
         {
          alert("分类必须选择最终类别!");
         }

         if(Obj_Sort.tagName.toLowerCase()=="select")
         {
          Obj_Sort.focus();
         }
        else
         { 
           var s_objs=document.getElementsByName("s_sort");
           for(i=0;i<s_objs.length;i++)
           {
            if(s_objs[s_objs.length-i-1].style.display=="")
             {
               s_objs[s_objs.length-i-1].focus();
               break;
             }
           }
         }
        return false;
       }
    }
   var J_start="";
   var Js_end="";
   var ANames,AFields,AFieldtype,Obj;
    if(Fields!="")
     {
       ANames=Names.split(',');
       AFields=Fields.split(',');
       AFieldtype=Fieldtype.split(',');
       for(i=0;i<AFields.length-1;i++)
        {
          if(AFields[i]==""){continue;}
          Obj=document.forms[formName][AFields[i]];
          if(Obj==null){continue;}
          switch(AFieldtype[i])
           {
             case "select":
                J_start="请选择";
                Js_end="!";
             break;

             case "file":
                J_start="请上传";
                Js_end="!";
             break;

             case "image":
                J_start="请上传";
                Js_end="!";
             break;

             case "text":
                J_start="请填写";
                Js_end="!";
             break;

             case "textarea":
                J_start="请填写";
                Js_end="!";
             break;

             default:
                J_start="";
                Js_end="不能为空!";
             break;
           }
           if(AFieldtype[i]=="radio" || AFieldtype[i]=="checkbox")
             {
                J_start="请选择";
                Js_end="";
                if(!IsChecked(Obj))
                  {
                      alert(J_start+ANames[i]+Js_end);
                      return false;
                  }
             }
           else if(AFieldtype[i]=="images" || AFieldtype[i]=="files")
            {
              if(Obj.value=="0")
               {
                 alert(J_start+ANames[i]+Js_end); 
                 return false;
               }
            }
           else if(AFieldtype[i]=="editor") 
            {
              var editorobj=eval("KE_"+AFields[i]);
              if(editorobj!=null)
              {
              var fcklength=editorobj.count("text");
              if(fcklength==0)
               {
                 alert(J_start+ANames[i]+Js_end); 
                 editorobj.focus();
                 return false;
               }
              else if(FckMaxlength>0)
               {
                 if(fcklength>FckMaxlength)
                  {
                    alert(ANames[i]+"太长，请简化或删除部分内容!");
                    return false;
                  }
               }
             }
            }
           else
             {
                if(Trim(Obj.value)=="" && Obj.style.display!="none")
                {
                 alert(J_start+ANames[i]+Js_end); 
                 Obj.focus();
                 return false;
                }
            }
        }
     }

   var objyzm=document.forms[formName].vcode;
   if(objyzm!=null && Trim(objyzm.value)=="")
    {
      alert("请填写验证码!"); 
      objyzm.focus();
      return false;
    }
   if(formName!="pa_member")
    {
     if(interval>0 && PostType=="add"){SetCookie(CookieName,"1",interval);}
    }
   if(eval(formName+"_zdycheck()"))
    {
     document.forms[formName].submit();
    }
   else
    {
     return false;
    }
  }