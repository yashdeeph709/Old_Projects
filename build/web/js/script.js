function loadXMLDoc()
{
console.log('load called');
var xmlhttp;
if(window.XMLHttpRequest){
 xmlhttp=new XMLHttpRequest();
}else{
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
var ename=document.getElementById("ename").value;
var designation=document.getElementById("desig").value;
var department=document.getElementById("dept").value;
var basic=document.getElementById("basic").value;
var hra=document.getElementById("hra").value;
var ma=document.getElementById("medall").value;
var speall=document.getElementById("speall").value;
var conv=document.getElementById("conv").value;
var perf=document.getElementById("perf").value;
if(!isNaN(ename) || !isNaN(designation)){
alert("Enter non-numerical data in name and designation fields");
return;
}
if(isNaN(basic) || isNaN(hra) || isNaN(ma) || isNaN(speall) || isNaN(conv) || isNaN(perf)){
alert("Enter numerical data in salary fields");
return;
}
console.log(ename+designation+department+basic+hra+ma+speall+conv+perf);


xmlhttp.onreadystatechange=function()
{
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
       document.getElementById('notice').innerHTML=xmlhttp.responseText;
       $('#myModal').modal();
    }
}
xmlhttp.open("GET","addEmp?ename="+ename+"&desig="+designation+"&dept="+department+"&basic="+basic+"&hra="+hra+"&ma="+ma+"&speall="+speall
        +"&conv="+conv+"&perf="+perf,true);
xmlhttp.send();
}




