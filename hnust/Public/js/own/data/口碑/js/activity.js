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

 function initBrand(pos){
 	  if(pos==0){
 	  	myChart.setoption(nowbrand.getshop(0));
 	  }else if(pos==1){
 	  	myChart.setoption(nowbrand.gettb(0));
 	  }else if(pos==2){
 	  	myChart.setoption(nowbrand.ciyun);
 	  }else if(pos==3){
 	  	myChart.setoption(nowbrand.onsale);
 	  }else myChart.setoption(nowbrand.star);
 }
 function changeBrand(){
 	myecharts=getDOM('myecharts');
    myChart=echarts.init(myecharts);
 	initBrand(pos);
     for(var i=0,len=Li.length;i<len;i++)
     {
     	(function(index){
 	   addEvent(Li[i],"click",function(){
 	   	if(index==1){
            shopplatform.style.display="block";
            tbplatform.style.display="none";
 	   	}else if(index==2){
 	   		shopplatform.style.display="none";
            tbplatform.style.display="block";
 	   	}else {shopplatform.style.display="none";
            tbplatform.style.display="none";}
 	   	pos=index;
 	   	res.innerHTML=temple;
 	   	myecharts=getDOM('myecharts');
 	   	myChart=echarts.init(myecharts);
 	   	initBrand(index);
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
// var cmp=getDOM("tocmp");
// var Dl=getDOM(".item");
// var hide=getDOM("hidecmp");
var pos=0;
var temple=getTemples(res);
var shopplatform=getDOM('shopplatform');
var tbplatform=getDOM('tbplatform');
var shopselect=getDOM('shopselect');
var tbselect=getDOM('tbselect');
var json,brandname,brand,nowbrand,myecharts,myChart;
// 当后台响应时候的事件
addEvent(xhr,"readystatechange",function(){
     if(xhr.readyState==4&&xhr.status==200)
     {
       json=JSON.parse(xhr.responseText);
       brandname=json[0];
       brand=json[1];
       temp=[];
       for(i=0,len=brandname.length;i<len;i++){
       	if(nowbrand)
       		delete nowbrand;
       var subbrand=brand[brandname[0]];
       	nowbrand = new Brand(brandname[0],subbrand[0],subbrand[1],subbrand[2],subbrand[3],subbrand[4]);
          var op=document.createElement('option');
          op.value=op.text=brandname[i];
          temp.push(op);
       }
       mainselect.innerHTML=temp.join(' ');
       changeBrand();
   }
});

// 点击不同项目的时候向后台请求不同的数据
addEvent(mainselect,"change",function(){
    xhr.open("get","search.php?q="+select.value,true);
    xhr.send(null);
});
addEvent(shopselect,"change",function(){
      myChart.setoption(nowbrand.getshop(shopselect.value));
});
addEvent(tbselect,"change",function(){
      myChart.setoption(nowbrand.gettb(shopselect.value));
});
addEvent(subselect,"change",function(){
      if(nowbrand)
      	delete nowbrand;
      var subbrand=brand[subselect.value];
      nowbrand=new (subselect.value,subbrand[0],subbrand[1],subbrand[2],subbrand[3],subbrand[4]);
      changeBrand();
});
// addEvent(hide,"click",function(){
//      var cmpcontent=getDOM("cmpcontent");
// 	 cmpcontent.className="cmp";
// });
// addEvent(cmp,"click",function(){
// 	 var cmpcontent=getDOM("cmpcontent");
// 	 cmpcontent.className=cmpcontent.className+" active";
//      var img=document.createElement('img');
//      img.src="img/"+select.value+".jpg";
// });

function init(){
	 xhr.open("get","search.php?q="+mainselect.value,true);
	 xhr.send(null);
 }
 window.onload=function(){
 	init();
 	// var op=document.createElement('option');
  // op.value='kkk';
  // op.text="wodetian";
        // 指定图表的配置项和数据
  option = {
    title : {
        text: '某站点用户访问来源',
        subtext: '纯属虚构',
        x:'center'
    },
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        orient: 'vertical',
        left: 'left',
        data: ['直接访问','邮件营销','联盟广告','视频广告','搜索引擎']
    },
    series : [
        {
            name: '访问来源',
            type: 'pie',
            radius : '55%',
            center: ['50%', '60%'],
            data:[
                {value:335, name:'直接访问'},
                {value:310, name:'邮件营销'},
                {value:234, name:'联盟广告'},
                {value:135, name:'视频广告'},
                {value:1548, name:'搜索引擎'}
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
};
        // 使用刚指定的配置项和数据显示图表。
        // myChart.setOption(option);
     //init();
 }