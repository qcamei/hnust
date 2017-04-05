var option = [
{
    title : {
        text: '论坛口碑',
        x:'center'
    },
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        orient: 'vertical',
        left: 'left',
        data: ['惊','哀','惧','恶','怒','好','乐']
    },
    series : [
        {
            name: '访问来源',
            type: 'pie',
            center: ['50%', '60%'],
            data:[
            ],
            itemStyle: {
                emphasis: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            }
        }
    ]
},
{
    color: ['#3398DB'],
    tooltip : {
        trigger: 'axis',
        axisPointer : {            // 坐标轴指示器，坐标轴触发有效
            type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
        }
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    xAxis : [
        {
            type : 'category',
            data: ['惊','哀','惧','恶','怒','好','乐'],
            axisTick: {
                alignWithLabel: true
            }
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'直接访问',
            type:'bar',
            barWidth: '60%',
            data:[10, 52, 200, 334, 390, 330, 220]
        }
    ]
},
{
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        // data: ['特仑苏','金典','新养道','恶','怒','好']
      },
    toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            data: ['第一周','第二周','第三周','第四周']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : []
},
{
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        data: ['惊','哀','惧','恶','怒','好','乐']
      },
    toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            data: ['一月','二月','三月','四月','五月','六月','七月']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : []
},
{
    tooltip : {
        trigger: 'axis'
    },
    legend: {
        // data: ['惊','哀','惧','恶','怒','好','乐']
      },
    toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            data: ['一月','二月','三月','四月','五月','六月','七月']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : []
}
];

function getDOM(id){
	if(id[0]=='.')
		return document.getElementsByClassName(id.substring(1));
	return document.getElementById(id);
}
function getTemples(element){
	if(element){
	  var temp="";
	  temp=element.innerHTML;
	  return temp.replace(/^\s*/g,"");
	}
}
function appenTemple(element,temple,len){
	 var  data=[];
     for(var i=0;i<len;i++)
          data.push(temple.replace(/\{index\}/,i));
     element.innerHTML=data.join(" ");
}
function addEvent(element,type,fn){
	if(element.addEventLister)
	{
		 element.addEventLister(type,fn,false);
	}else if(element.attachEvent){
		 element.attachEvent("on"+type,fn);
	}else element["on"+type]=fn;
}
function craetXHR(){
 	   if(window.XMLHttpRequest){
 	   	return new XMLHttpRequest();
 	   }else {
 	   return new ActiveXObject("Microsoft.XMTHTTP"); 
 	    }
 }
function addClass(element,classname){
  if(element.className==classname)
    return ;
  else {
    if(!element.className.match(new RegExp('(\\s|^)' + classname + '(\\s|$)')))
        element.className=element.className+" "+classname;
  }
}
function removeClass(element,classname){
  if(element.className==classname)
    element.className='' ;
  else {
    if(element.className.match(new RegExp('(\\s|^)' + classname + '(\\s|$)')))
        element.className=element.className.replace(new RegExp('(\\s|^)' + classname + '(\\s|$)'),'');
  }
}

function addclick(element){
   element.on("click",function(params){
       if(params.componentType==='series'){
             removeClass(commentshow,"active");
            setTimeout(function(){addClass(commentshow,"active")},1000);
          getDOM('title').innerHTML=params.name;
       }
   });
}
 function initBrand(pos,value){
 	  if(pos==0){
 	  	myChart.setOption({
        series:[{
          type: 'pie',
          data: value,
        }
        ]
      });
 	  }else if(pos==1){
 	  	myChart.setOption({
        series:[{
          type:'bar',
          data:value
        }]
      });
 	  }else if(pos==2||pos==4){
 	  	myChart.setOption({
        series:[{
          type:'line',
          data:value
        }]
      });
 	  }else myChart.setOption({
        series:[{
            name:'惊',
            type:'line',
            stack: '总量',
            data:[120, 132, 101, 134, 90, 230, 210]
        },
        {
            name:'哀',
            type:'line',
            stack: '总量',
            data:[220, 182, 191, 234, 290, 330, 310]
        },
        {
            name:'惧',
            type:'line',
            stack: '总量',
            data:[150, 232, 201, 154, 190, 330, 410]
        },
        {
            name:'恶',
            type:'line',
            stack: '总量',
            data:[320, 332, 301, 334, 390, 330, 320]
        },
        {
            name:'好',
            type:'line',
            stack: '总量',
            data:[820, 932, 901, 934, 1290, 1330, 1320]
        },
        {
            name:'乐',
            type:'line',
            stack: '总量',
            data:[820, 932, 901, 934, 1290, 1330, 1320]
        }
        ]
      });
    addclick(myChart);
 }
 function getValue(index){
   if(index==0)
      return nowbrand.getshop(0);
   else if(index==1)
    return nowbrand.getshop(0);
   else if(index==2)
    return nowbrand.gettb(0);
  else if(index==4)
    return nowbrand.onsale;
   return nowbrand.star;
 }
 function changeBrand(){
      res.innerHTML="";
      for(var j=0;j<item[pos]['count'];j++){
          var div=document.createElement('div');
          div.style.display='inline-block';
          div.style.width=item[pos]['width'];
          div.style.height=item[pos]['height']+'px';
          div.id='myecharts_'+j;
          res.appendChild(div);
      if(pos==3)
        createCloud();
      else{
          myChart=echarts.init(div);
          var p=item[pos]['data'][j];
          myChart.setOption(option[p]);
          initBrand(p,getValue(pos));
        }
       }
        shopplatform.style.display="none";
        tbplatform.style.display="none";
        kbplatform.style.display="none";
        otherplatform.style.display="none";
        allplatform.style.display="none";
        if(pos==0){
          allplatform.style.display="block";
        }
       else if(pos==1){
            shopplatform.style.display="block";
      }else if(pos==2){
            tbplatform.style.display="block";
      }else if(pos==5){
            kbplatform.style.display="block";
      }else otherplatform.style.display="block";
      score.innerHTML=item[pos]['content'];
     for(var i=0,len=Li.length;i<len;i++)
     {
     	(function(index){
 	   addEvent(Li[i],"click",function(){
           shopplatform.style.display="none";
           tbplatform.style.display="none";
           kbplatform.style.display="none";
           otherplatform.style.display="none";
 	         allplatform.style.display="none";
        if(index==0){
          allplatform.style.display="block";
        }
       else if(index==1){
            shopplatform.style.display="block";
      }else if(index==2){
            tbplatform.style.display="block";
      }else if(index==5){
            kbplatform.style.display="block";
      }else otherplatform.style.display="block";
      res.innerHTML="";
       for(var j=0;j<item[index]['count'];j++){
          var div=document.createElement('div');
          div.style.display='inline-block';
          div.style.width=item[index]['width'];
          div.style.height=item[index]['height']+'px';
          div.id='myecharts_'+j;
          res.appendChild(div);
           if(index==3){
           createCloud();
          }
         else{
          myChart=echarts.init(div);
          var p=item[index]['data'][j];
          myChart.setOption(option[p]);
          initBrand(p,getValue(index));
        }
      }
      score.innerHTML=item[index]['content'];
 	   	pos=index;
 	   });
 	})(i);
   }
 }
 function Brand(name,shop,tb,ciyun,onsale,star){
 	this.name=name;
 	this.shop=shop;
 	this.tb=tb;
 	this.ciyun=ciyun;
 	this.onsale=onsale;
 	this.star=star;
 }

 Brand.prototype={
     getshop:function (id){
          return this.shop[id];
     },
     gettb:function (id){
     	return this.tb[id];
     }
 };
var res=getDOM("resultset");
var Li=getDOM("list").getElementsByTagName('li');
var xhr=craetXHR();
var mainselect=getDOM("mainselect");
var subselect=getDOM("subselect");
var pos=0;
var temple=getTemples(res);
var allplatform=getDOM('allplatform');
var shopplatform=getDOM('shopplatform');
var tbplatform=getDOM('tbplatform');
var kbplatform=getDOM('kbplatform');
var otherplatform=getDOM('otherplatform');
var shopselect=getDOM('shopselect');
var tbselect=getDOM('tbselect');
var kbselect=getDOM('kbselect');
var commentshow=getDOM("commentshow");
var score=getDOM('score');
var hide=getDOM('hide');
var json,brandname,brand,nowbrand,myecharts,myChart;
var item=[
{
  width:'100%',
  height:600,
  count:1,
  content:"",
  data:[3]
},
{
  width:'50%',
  height:600,
  count:2,
  content:"综合情感分：",
  data:[0,1]
},
{
  width:'50%',
  height:600,
  count:2,
  content:"综合情感分：",
  data:[0,1]
},
{
  width:'100%',
  height:600,
  count:1,
  content:"",
  data:[]
},
{
  width:'100%',
  height:600,
  count:1,
  content:"",
  data:[2]
},
{
  width:'100%',
  height:400,
  count:3,
  content:"代言人：",
  data:[1,3,4]
}
];
// 当后台响应时候的事件
addEvent(xhr,"readystatechange",function(){
     if(xhr.readyState==4&&xhr.status==200)
     {
       json=JSON.parse(xhr.responseText);
       brandname=json[0];
       brand=json[1];
       subselect.innerHTML='';
       for(i=0,len=brandname.length;i<len;i++){
       	if(nowbrand)
       		delete nowbrand;
       var subbrand=brand[brandname[i]];
       	nowbrand = new Brand(brandname[i],subbrand[0],subbrand[1],subbrand[2],subbrand[3],subbrand[4]);
          var op=document.createElement('option');
          op.value=op.text=brandname[i];
          subselect.appendChild(op);
       }
       changeBrand();
   }
});

// 点击不同项目的时候向后台请求不同的数据
addEvent(mainselect,"change",function(){
    xhr.open("get","search.php?q="+mainselect.value,true);
    xhr.send(null);
});
addEvent(shopselect,"change",function(){
     for(var j=0;j<item[0]['count'];j++){
          myChart=echarts.init(getDOM('myecharts_'+j));
          var p=item[0]['data'][j];
          myChart.setOption(option[p]);
          initBrand(p,nowbrand.getshop(shopselect.value));
          addclick(myChart);
      }
});
addEvent(tbselect,"change",function(){
       for(var j=0;j<item[1]['count'];j++){
          myChart=echarts.init(getDOM('myecharts_'+j));
          var p=item[1]['data'][j];
          myChart.setOption(option[p]);
          initBrand(p,nowbrand.getshop(tbselect.value));
          addclick(myChart);
        }
     
});
addEvent(subselect,"change",function(){
      if(nowbrand)
      	delete nowbrand;
      var subbrand=brand[subselect.value];
      nowbrand=new Brand(subselect.value,subbrand[0],subbrand[1],subbrand[2],subbrand[3],subbrand[4]);
      changeBrand();
});
addEvent(hide,"click",function(){
  removeClass(commentshow,"active");
})
function init(){
	 xhr.open("get","search.php?q="+mainselect.value,true);
	 xhr.send(null);
 }

window.onload=function(){
  init();
   $('.selectpicker').selectpicker();
 }


 
