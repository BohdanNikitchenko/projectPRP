window.onscroll = function() {
	var a=document.getElementById('toTop');
  	var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  	if(scrollTop>10){
		a.style.visibility='visible';
  	}
  	else{
  		a.style.visibility='hidden';
  	}
};
