/*导航*/
var sideSlipe=new Object();
sideSlipe.clbutton=document.getElementById("top_nav_button");
sideSlipe.side=document.getElementById("top_nav");
sideSlipe.mask=document.getElementById("top_nav_mask");
/*三列幻灯*/
var slWindow=new Object();
slWindow.list=document.getElementById("slSlide_content").getElementsByTagName('nav')[0];
slWindow.win=document.getElementById("slSlide_content");
slWindow.child=slWindow.win.getElementsByTagName('a');
var slBtn=new Object();
slBtn.left=document.getElementById("slSlide_buttonLeft");
slBtn.right=document.getElementById("slSlide_buttonRight");
var timer_sl=null;
if(isIE()){
    slWindow.width=parseInt(getComputedStyle(slWindow.win,false)['width']);
    slWindow.width=parseInt(getComputedStyle(slWindow.win,false)['width']);
}
else{
    slWindow.width=parseInt(getStyle(slWindow.win,'width'));
}
/*首页幻灯*/
var threeSlide=new Object();
threeSlide.left=document.getElementsByClassName("top_button_window")[0].getElementsByTagName('ul')[0];
threeSlide.leftButton=document.getElementById("top_slide_projector_buttonLeft");
threeSlide.middle=document.getElementById("top_slide_projector_content");
if(isIE()){
	threeSlide.middle.width=parseInt(getComputedStyle(threeSlide.middle,false)['width']);
}
else{
	threeSlide.middle.width=parseInt(getStyle(threeSlide.middle,'width'));
}
threeSlide.rightButton=document.getElementById("top_slide_projector_buttonRight");
threeSlide.right=document.getElementsByClassName("top_button_window")[1].getElementsByTagName('ul')[0];
threeSlide.midText=document.getElementById("top_slide_projector_content").getElementsByTagName('figure');
threeSlide.midImg=document.getElementsByClassName('slfloat_img');
threeSlide.lengths=document.getElementsByClassName('top_slide_block').length;
var timer_ib=null;
var index_ib=1;
/*微访谈幻灯*/
var index_ft=null;
var timer_ft=null;
var ftElement=new Object();
ftElement.block=document.getElementsByClassName("ft_Slide_block");
ftElement.control=document.getElementById('ftSlide').getElementsByTagName("li");
//全局变量结束
//加载完成执行函数

/*三列幻灯*/
//加载完成执行函数
window.onload=function(){
	/*导航*/
	topSideSlip();
	/*三列幻灯*/
	//初始化group
	initializeGroup();	
	//将flex组添加到数组中
	slstartChange();
	slBtn.right.addEventListener('click',function(event){
		clickRight();
	});
	slBtn.left.addEventListener('click',function(event){
		clickLeft();
	});
	
	/*首页幻灯*/
	ibsetPrivate();
	threeSlide.rightButton.addEventListener('click',function(){
		ibrightButton();
	});
	threeSlide.leftButton.addEventListener('click',function(){
		ibleftButton();
	})
	/*微访谈幻灯*/
	ftstartChange();
	ftClick();
}
/*导航*/
//首页头部导航点击
function topSideSlip(){
	sideSlipe.clbutton.addEventListener('click',function(){
		sideSlipe.side.style.left=0+'px';
		sideSlipe.mask.style.zIndex='1';
		sideSlipe.mask.style.backgroundColor='rgba(0,0,0,0.32)';
	})
	sideSlipe.mask.addEventListener('click',function(){
		sideSlipe.side.style.left=-270+'px';
		sideSlipe.mask.style.zIndex='-1';
		sideSlipe.mask.style.backgroundColor='rgba(0,0,0,0)';
	})
}
/*三列幻灯*/
function slstartChange(){
	timer_sl=setInterval(function(){
		slchangeStep()
	},3000);
}
function slchangeStep(){
	addTransition(slWindow.list,'all','0.5s','ease-in-out','');
	slWindow.list.style.transform='translateX('+(-slWindow.width)+'px)';
	setTimeout(function(){
		removeTransition(slWindow.list);
		slWindow.list.style.transform='translateX('+0+'px)';
		for(var i=0;i<slWindow.child.length;i++){
			var childGroup=parseInt(getStyle(slWindow.child[i],'webkitBoxOrdinalGroup'))||parseInt(getStyle(slWindow.child[i],'order'));
			if(childGroup-3<=0){
				slWindow.child[i].style.webkitBoxOrdinalGroup=childGroup+4;
				slWindow.child[i].style.MozBoxOrdinalGroup=childGroup+4;
				slWindow.child[i].style.webkitBoxFlexGroup=childGroup+4;
				slWindow.child[i].style.order=childGroup+4;
				slWindow.child[i].style.msFlexOrder=childGroup+4;
			}
			else{
				slWindow.child[i].style.webkitBoxOrdinalGroup=childGroup-3;
				slWindow.child[i].style.MozBoxOrdinalGroup=childGroup-3;
				slWindow.child[i].style.webkitBoxFlexGroup=childGroup-3;
				slWindow.child[i].style.order=childGroup-3;
				slWindow.child[i].style.msFlexOrder=childGroup-3;
			}
		}
	},500);
}
function initializeGroup(){
	for(var i=0;i<slWindow.child.length;i++){
		slWindow.child[i].index=i;
		slWindow.child[i].style.MozBoxOrdinalGroup=i+1;
		slWindow.child[i].style.webkitBoxOrdinalGroup=i+1;
		slWindow.child[i].style.webkitBoxFlexGroup=i+1;
		slWindow.child[i].style.order=i+1;
		slWindow.child[i].style.msFlexOrder=i+1;
	}
}
function clickRight(){
	clearInterval(timer_sl);
	timer_sl=null;
	slchangeStep();
	slstartChange();
}
function clickLeft(){
	clearInterval(timer_sl);
	slWindow.list.style.transform='translateX('+(-parseInt(getStyle(slWindow.win,'width')))+'px)';
	for(var i=0;i<slWindow.child.length;i++){
		var childGroup=parseInt(getStyle(slWindow.child[i],'webkitBoxOrdinalGroup'));
		if(childGroup>=5){
			slWindow.child[i].style.webkitBoxOrdinalGroup=childGroup-4;
			slWindow.child[i].style.MozBoxOrdinalGroup=childGroup-4;
			slWindow.child[i].style.webkitBoxFlexGroup=childGroup-4;
			slWindow.child[i].style.order=childGroup-4;
			slWindow.child[i].style.msFlexOrder=childGroup-4;
		}
		else{
			slWindow.child[i].style.webkitBoxOrdinalGroup=childGroup+3;
			slWindow.child[i].style.MozBoxOrdinalGroup=childGroup+3;
			slWindow.child[i].style.webkitBoxFlexGroup=childGroup+3;
			slWindow.child[i].style.order=childGroup+3;
			slWindow.child[i].style.msFlexOrder=childGroup+3;
		}
	}
	addTransition(slWindow.list,'all','0.5s','ease-in-out','');
	slWindow.list.style.transform='translateX('+0+'px)';
	setTimeout(function(){
		removeTransition(slWindow.list);
	},500);
	slstartChange();
}


/*首页幻灯*/
function ibsetPrivate(){
	for(var i=0;i<threeSlide.lengths;i++){
		threeSlide.midText[i].style.transform='translateX('+60+'px)';
		threeSlide.midImg[i].style.transform='translateX('+60+'px)';
		threeSlide.midText[i].style.opacity='0';
		threeSlide.midImg[i].style.opacity='0';
	}
	threeSlide.midText[1].style.transform='translateX('+0+'px)';
	threeSlide.midImg[1].style.transform='translateX('+0+'px)';
	threeSlide.midText[1].style.opacity='1';
	threeSlide.midImg[1].style.opacity='1';
	addTransition(threeSlide.middle,'all','0.5s','ease','');
	addTransition(threeSlide.left,'all','0.5s','ease','');
	addTransition(threeSlide.right,'all','0.5s','ease','');
	threeSlide.middle.style.transform='translateX(-'+(threeSlide.middle.width/threeSlide.lengths)*index_ib+'px)';
	threeSlide.left.style.transform='translateX(-'+100*index_ib+'px)';
	threeSlide.right.style.transform='translateX(-'+100*index_ib+'px)';
	ibstartMove();
}
function ibstartMove(){
	timer_ib=setInterval(function(){
		index_ib++;
		ibmoveStep();
	},5000)
}
function ibmoveStep(){
	addTransition(threeSlide.middle,'all','0.5s','ease','');
	addTransition(threeSlide.left,'all','0.5s','ease','');
	addTransition(threeSlide.right,'all','0.5s','ease','');
	console.log(index_ib)
	for(var i=0;i<threeSlide.lengths;i++){
		threeSlide.midText[i].style.transform='translateX('+60+'px)';
		threeSlide.midImg[i].style.transform='translateX('+60+'px)';
		threeSlide.midText[i].style.opacity='0';
		threeSlide.midImg[i].style.opacity='0';
	}
	threeSlide.midText[index_ib].style.transform='translateX('+0+'px)';
	threeSlide.midImg[index_ib].style.transform='translateX('+0+'px)';
	threeSlide.midText[index_ib].style.opacity='1';
	threeSlide.midImg[index_ib].style.opacity='1';
	
	threeSlide.middle.style.transform='translateX(-'+(threeSlide.middle.width/threeSlide.lengths)*index_ib+'px)';
	threeSlide.left.style.transform='translateX(-'+100*index_ib+'px)';
	threeSlide.right.style.transform='translateX(-'+100*index_ib+'px)';
	if(index_ib==(threeSlide.lengths-1)){
		setTimeout(function(){
			removeTransition(threeSlide.middle);
			removeTransition(threeSlide.left);
			removeTransition(threeSlide.right);
			index_ib=1;
			threeSlide.middle.style.transform='translateX(-'+(threeSlide.middle.width/threeSlide.lengths)*index_ib+'px)';	
			threeSlide.left.style.transform='translateX(-'+100*index_ib+'px)';
			threeSlide.right.style.transform='translateX(-'+100*index_ib+'px)';
			threeSlide.midText[1].style.transform='translateX('+0+'px)';
			threeSlide.midImg[1].style.transform='translateX('+0+'px)';
			threeSlide.midText[1].style.opacity='1';
			threeSlide.midImg[1].style.opacity='1';
		},500)
		
	}
}
function ibrightButton(){
	clearInterval(timer_ib);
	timer_ib=null;
	index_ib++;
	ibmoveStep();
	ibstartMove();
}
function ibleftButton(){
	clearInterval(timer_ib);
	timer_ib=null;
	index_ib--;
	for(var i=0;i<threeSlide.lengths;i++){
		threeSlide.midText[i].style.transform='translateX('+60+'px)';
		threeSlide.midImg[i].style.transform='translateX('+60+'px)';
		threeSlide.midText[i].style.opacity='0';
		threeSlide.midImg[i].style.opacity='0';
	}
	threeSlide.midText[index_ib].style.transform='translateX('+0+'px)';
	threeSlide.midImg[index_ib].style.transform='translateX('+0+'px)';
	threeSlide.midText[index_ib].style.opacity='1';
	threeSlide.midImg[index_ib].style.opacity='1';
	if(index_ib==0){
		threeSlide.middle.style.transform='translateX(-'+(threeSlide.middle.width/threeSlide.lengths)*index_ib+'px)';
		threeSlide.left.style.transform='translateX(-'+100*index_ib+'px)';
		threeSlide.right.style.transform='translateX(-'+100*index_ib+'px)';
		setTimeout(function(){
			removeTransition(threeSlide.middle);
			removeTransition(threeSlide.left);
			removeTransition(threeSlide.right);
			index_ib=(threeSlide.lengths-2);
			threeSlide.middle.style.transform='translateX(-'+(threeSlide.middle.width/threeSlide.lengths)*index_ib+'px)';	
			threeSlide.left.style.transform='translateX(-'+100*index_ib+'px)';
			threeSlide.right.style.transform='translateX(-'+100*index_ib+'px)';
			threeSlide.midText[threeSlide.lengths-2].style.transform='translateX('+0+'px)';
			threeSlide.midImg[threeSlide.lengths-2].style.transform='translateX('+0+'px)';
			threeSlide.midText[threeSlide.lengths-2].style.opacity='1';
			threeSlide.midImg[threeSlide.lengths-2].style.opacity='1';	
		},500)
	}
	else{
		addTransition(threeSlide.middle,'all','0.5s','ease','');
		addTransition(threeSlide.left,'all','0.5s','ease','');
		addTransition(threeSlide.right,'all','0.5s','ease','');
		threeSlide.middle.style.transform='translateX(-'+(threeSlide.middle.width/threeSlide.lengths)*index_ib+'px)';
		threeSlide.left.style.transform='translateX(-'+100*index_ib+'px)';
		threeSlide.right.style.transform='translateX(-'+100*index_ib+'px)';
	}
	ibstartMove();
}
/*微访谈幻灯*/
function ftstartChange(){
	timer_ft=setInterval(function(){
		ftchangeStep();
	},1000);
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