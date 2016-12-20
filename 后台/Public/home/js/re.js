/* 
* @Author: anchen
* @Date:   2016-11-29 09:12:44
* @Last Modified by:   anchen
* @Last Modified time: 2016-11-29 15:11:25
*/
//弹框效果
function showDiv(){
 var winWidth;
 var winHeight;
    if (document.body && document.body.clientHeight && document.body.clientWidth)
        {
            winHeight = document.body.clientHeight;
            winWidth = document.body.clientWidth;
        }
    document.getElementById('show').style.display="block";
    document.getElementById('show_win').style.display="block";
    document.getElementById('show').style.width=winWidth+"px";
    document.getElementById('show').style.height=winHeight+"px";
}
function showDiv1(){
 var win1Width;
 var win1Height;
    if (document.body && document.body.clientHeight && document.body.clientWidth)
        {
            win1Height = document.body.clientHeight;
            win1Width = document.body.clientWidth;
        }
    document.getElementById('show1').style.display="block";
    document.getElementById('show_win1').style.display="block";
    document.getElementById('show1').style.width=win1Width+"px";
    document.getElementById('show1').style.height=win1Height+"px";
}


$(document).ready(function () {
   function validateForm(){
     if(checkUserName()&&checkPassword()&&checkRepassword()&&checkHobby()&&checkStatus()){
         alert("恭喜您！注册成功！");
     }
}
});

//验证用户名（为3~16个字符，且不能包含”@”和”#”字符）
function checkUserName(){
    var bt=document.getElementById("user-name").value.trim();

    var name=document.getElementById("user-name").value.trim();
    var nameRegex=/^[^@#]{3,16}$/;
    if(bt == ""){
        document.getElementById("nameInfo").innerHTML="用户名不能为空";
    }
    else if(!nameRegex.test(name)){
        document.getElementById("nameInfo").innerHTML="用户名长度为3~16个字符";
    }else{
        document.getElementById("nameInfo").innerHTML="";
        return true;
    }

}
//验证密码（长度在8个字符到16个字符）
function checkPassword(){
    var bt1=document.getElementById("password").value.trim();
    var password=document.getElementById("password").value.trim();

    var passwordRegex=/^[0-9A-Za-z_]\w{5,15}$/;
    if(bt1 == ""){
        document.getElementById("passwordInfo").innerHTML="密码不能为空";
    }
    else if(!passwordRegex.test(password)){
        document.getElementById("passwordInfo").innerHTML="密码长度为6~16个字符";
    }else{
        document.getElementById("passwordInfo").innerHTML="";
        return true;
    }
}

//验证校验密码（和上面密码必须一致）
function checkRepassword(){
    var repassword=document.getElementById("repassword").value.trim();
    //校验密码和上面密码必须一致
    if(repassword!=password){
        document.getElementById("repasswordInfo").innerHTML="两次输入的密码不一致哦！";
    }else if(repassword==password){
        document.getElementById("repasswordInfo").innerHTML="";
    }
}
//验证学校必填
// function checkSchool(){
//     var school =document.getElementById("school").value.trim();
//     //校验密码和上面密码必须一致
//     if(school == ""){
//         document.getElementById("schoolInfo").innerHTML="不能为空哦！";
//     }else if(repassword==password){
//         document.getElementById("schoolInfo").innerHTML="";
//     }
// }
//验证email不为空
function checkEmail(){
    var email =document.getElementById("email").value.trim();
    var pattern = /^([\.a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/; 
    //校验密码和上面密码必须一致
    if(email == ""){
        document.getElementById("emailInfo").innerHTML="邮箱不能为空";
    }else if (!pattern.test(email)) {  
        document.getElementById("emailInfo").innerHTML = "请输入正确格式的email"
    }
    else{
        document.getElementById("emailInfo").innerHTML="";
        return true;
    }
}

/*function emailCheck(obj, labelName) {  
    var objName = eval("document.all."+obj);  
    var pattern = /^([\.a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/;  
    if (!pattern.test(objName.value)) {  
        alert("请输入正确的邮箱地址。");  
        objName.focus();  
        return false;  
    }  
    return true;  
}*/


// provinceArray = new Array("河北师范大学","河北科技大学","河北经贸大学","河北医科大学","河北政法学院","河北师范大学汇华学院","河北地质大学","石家庄铁道学院","石家庄学院");  
  
// //定义 城市 数据数组  
// cityArray = new Array();   
// cityArray[0] = new Array("河北师范大学","商学院|软件学院|法政学院|教育学院|文学院|历史文化学院|外国语学院|音乐学院|数学与信息科学学院|美术与设计学院|新闻传播学院|物理科学与信息工程学院|化学与材料科学学院|生命科学学院|资源与环境科学学院");   
// cityArray[1] = new Array("河北科技大学","材料科学与工程学院|化学与制药工程学院|经济管理学院|环境科学与工程学院|理学院|文法学院|外国语学院|机械电子工程学院|电气工程学院|信息科学与工程学院|纺织服装学院|建筑工程学院|艺术学院|影视学院");   
// cityArray[2] = new Array("河北经贸大学","法学|电气信息|轻工纺织食品类|生物工程|管理学|工商管理类管理学|公共管理类|经济学类");   
// cityArray[3] = new Array("河北医科大学","预防医学|临床医学|麻醉学|医学影像学|医学检验|口腔医学|中医学|针灸推拿学|中西医临床医学|法医学|护理学|药学类|中药学");   
// cityArray[4] = new Array("河北政法学院","管理系|国际法商系|财经系|园林系|计算机系|会计系|外语系|电子商务系|法律系|国际经济与贸易|法律文秘|社区管理与服务|人力资源管理|物业管理");   
// cityArray[5] = new Array("河北师范大学汇华学院","数学与应用数学|网络工程|通信工程|计算机科学与技术|物联网工程|汉语言文学|新闻学|历史学|秘书学|对外汉语学|物理学|化学|生物科学|地理科学|资源环境与城乡规划管理|科学教育|法学|心理学|会计学|人力资源管理|国际经济与贸易|旅游管理|学前教育|特殊教育");   
// cityArray[6] = new Array("河北地质大学","经贸学院|法政学院|会计学院|商学院|管理科学与工程学院|艺术设计学院|外国语学院|信息工程学院|勘查技术与工程|资源学院|土地资源与城乡规划学院|水资源与环境学院|宝石与材料工艺学院|数理学院|国际教育学院");   
// cityArray[7] = new Array("石家庄铁道学院","土木类|机械类|电气与电子类|交通类|经管类|英语系|数学力学系|人文类|计算机类|材料类|建筑与艺术类");   
// cityArray[8] = new Array("石家庄学院","物理学|化工学院|英语系|计算机系|文传系|政法系|经济管理专业");   
// cityArray[9] = new Array("其它","");  
  
// window.onload=function initProvince(){  
//     document.all.selProvince.length = 0 ;   
//     for(i=0; i<provinceArray.length; i++){  
//        document.all.selProvince.options[i] = new Option(provinceArray[i],provinceArray[i]);  
//     }  
//     getCity(document.all.selProvince.options[0].value)  
// }  
 
// function getCity(currProvince)  
// {  
//     //当前 所选择 的 省  
//     var currProvincecurrProvince = currProvince;  
//     var i,j,k;  
//     //清空 城市 下拉选单  
//     document.all.selCity.length = 0 ;   
//     for (i = 0 ;i <cityArray.length;i++)  
//       {     
//           //得到 当前省 在 城市数组中的位置  
//           if(cityArray[i][0]==currProvince)  
//             {     
//                 //得到 当前省 所辖制的 地市  
//                 tmpcityArray = cityArray[i][1].split("|")  
//                   for(j=0;j<tmpcityArray.length;j++)  
//                   {  
//                     //填充 城市 下拉选单  
//                     document.all.selCity.options[document.all.selCity.length] = new Option(tmpcityArray[j],tmpcityArray[j]);   
//                   }  
//             }   
//       }   
// } 
