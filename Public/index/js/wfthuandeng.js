//全局变量
var index_ft=null;
var timer_ft=null;
var ftElement=new Object();
ftElement.block=document.getElementsByClassName("ft_Slide_block");
ftElement.control=document.getElementsByClassName('topicListSlide')[0].getElementsByTagName("li");
//全局变量结束
//加载完成执行函数
window.onload=function(){
	ftstartChange();
	ftClick();



	var pointer = document.getElementsByClassName("mainNav")[0];
	var dropdown = document.getElementsByClassName("dropdown")[0];
	var items = dropdown.getElementsByClassName("item");
	var color = document.getElementsByClassName("dropColor")[0];
	for(var i=0;i<items.length;i++){
		items[i].index=i;
		items[i].onmouseover = function(){
			color.style.top = 50*this.index+"px";
		}
	}
	pointer.onmouseover = function(){
		dropdown.style.height = 450+"px";
	}
	pointer.onmouseout = function(){
		dropdown.style.height = 0+"px";
	}
	var topListButton=document.getElementById("top_list_button");
	var topList=document.getElementById("top_nav");
	var listMask=document.getElementById("mask");
	topListButton.onclick=function(){
		topList.style.left=0+'px';
		listMask.style.zIndex='3';
		listMask.style.backgroundColor='rgba(0,0,0,0.32)';
	}
	listMask.onclick=function(){
		topList.style.left='-270px';
		listMask.style.zIndex='-1';
		listMask.style.backgroundColor='rgba(0,0,0,0)';
	}
}
function ftstartChange(){
	timer_ft=setInterval(function(){
		ftchangeStep();
	},3000);
}
function ftchangeStep(){
	index_ft++;
	if(index_ft>=ftElement.block.length){
		index_ft=0;
	}
	else if(index_ft<0){
		index_ft=4;
	}
	for(var i=0;i<ftElement.block.length;i++){
		ftElement.block[i].style.opacity='0';
		ftElement.block[i].style.filter='alpha(opacity=0)';
		ftElement.block[i].style.index='0';
		ftElement.control[i].style.backgroundColor='rgb(210,210,210)';
	}
	ftElement.block[index_ft].style.opacity='1';
	ftElement.block[index_ft].style.filter='alpha(opacity=100)';
	ftElement.block[index_ft].style.index='1';
	ftElement.control[index_ft].style.backgroundColor='rgb(78,168,233)'
}
function ftClick(){
	for(var i=0;i<ftElement.block.length;i++){
		ftElement.control[i].index=i;
		ftElement.control[i].addEventListener('click',function(e){
			clearInterval(timer_ft);
			index_ft=this.index-1;
			ftchangeStep();
			timer_ft=setInterval(function(){
				ftchangeStep();
			},1000);
		});
	}
}
