//获取样式函数
function getStyle(obj,attr){
	if(obj.currentStyle){
		return obj.currentStyle[attr];
	}
	else{
		return getComputedStyle(obj,false)[attr];
	}
}
//添加动画函数
function addTransition(obj,son,lay,type,delay){
	obj.style.transition=son+' '+lay+' '+type+' '+delay;
	obj.style.webkitTransition=son+' '+lay+' '+type+' '+delay;
	obj.style.MozTransition=son+' '+lay+' '+type+' '+delay;
	obj.style.msTransition=son+' '+lay+' '+type+' '+delay;
}
//删除动画效果
function removeTransition(obj){
	obj.style.transition='';
	obj.style.webkitTransition='';
	obj.style.MozTransition='';
	obj.style.msTransition='';
}
function isIE() { //ie?  
    if (!!window.ActiveXObject || "ActiveXObject" in window)  
        return true;  
    else  
        return false;  
}  