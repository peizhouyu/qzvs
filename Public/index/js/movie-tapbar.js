window.onload=function(){
	a=document.getElementById('movie-list');	
	b=document.getElementById('movie-tile');
	a.onclick=function(){
		removeLinkStyle("/qzvs/Public/index/css/movie-tapbar.css");
	}
	b.onclick=function(){
		includeLinkStyle("/qzvs/Public/index/css/movie-tapbar.css");
	}
	function includeLinkStyle(url) {
	var link = document.createElement("link");
	link.rel = "stylesheet";
	link.type = "text/css";
	link.href = url;
	document.getElementsByTagName("head")[0].appendChild(link);
	}
	function removeLinkStyle(url){
	var link = document.getElementsByTagName("link");
	link.rel = "stylesheet";
	link.type = "text/css";
	link.href = url;
	document.getElementsByTagName("head")[0].removeChild(document.getElementsByTagName("head")[0].lastChild);
	}


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