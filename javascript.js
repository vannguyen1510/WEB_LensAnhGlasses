// JavaScript Document

//-------------------------- HÀM SLIDE SHOW --------------------------------------------------

 //khai báo biến slideIndex đại diện cho slide hiện tại
  var slideIndex;
  // KHai bào hàm hiển thị slide
  function showSlides() {
	  "use strict";
	  var i;
      var slides = document.getElementsByClassName("showoff");
      var dots = document.getElementsByClassName("dot");
	 
		  for (i = 0; i < slides.length; i++) {
				  slides[i].style.display = "none"; 
				  slides[slideIndex].style.display = "block"; 
	  }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      //chuyển đến slide tiếp theo
      slideIndex++;
      //nếu đang ở slide cuối cùng thì chuyển về slide đầu
      if (slideIndex > slides.length - 1) {
        slideIndex = 0;
      }    
      //tự động chuyển đổi slide sau 5s
      setTimeout(showSlides, 5000);
	  
  }
  //mặc định hiển thị slide đầu tiên 
  showSlides(slideIndex = 0);
  //showSlides();
  function currentSlide(n) {
	  "use strict";
    showSlides(slideIndex = n);
  }

//----------------------------- HÀM BACK TO TOP ---------------------------------------------------
// HÀM: KHI MÀ KÉO CHUỘT XUỐNG 20PX TÍNH TỪ TOP THÌ SHƠW NÚT TOP RA
window.onscroll = function() {
	"use strict";
	scrollFunction();
};
	function scrollFunction() {
		"use strict";
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("myBtn").style.display = "block";
		} else {
			document.getElementById("myBtn").style.display = "none";
		}
}
// Khi mà người dùng nhấn vào nút thì sẽ cuộn lên đầu trang
	function topFunction() {
		"use strict";
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

//--------------------------------- HÀM CỐ ĐỊNH MENU KHI CUỘN CHUỘT -------------------------------------------

$(function(){
	"use strict";
	$(window).scroll(function(){
			if ($(this).scrollTop() > 200){
				$(".menu").css({"position":"fixed", "top": 0, "left": 0, "right":0});
			}
			else {
				$(".menu").css({"position":"relative", "top": 0, "left": 0, "right":0});
			}	
		});
});


//--------------------------------------------- SHOW HÀNG -----------------------------------------------


function showcollection(){
	
	var collection = document.getElementById('div-new-collection');
	collection.classList.add('show');
	collection.classList.remove('hidden');

	var seller = document.getElementById('div-best-seller');
	seller.classList.remove('show');
	seller.classList.add('hidden');

	var accesorize = document.getElementById('div-accesorize');
	accesorize.classList.remove('show');
	accesorize.classList.add('hidden');
}


function showbestseller(){
	
	var collection = document.getElementById('div-new-collection');
	collection.classList.remove('show');
	collection.classList.add('hidden');

	var seller = document.getElementById('div-best-seller');
	seller.classList.add('show');
	seller.classList.remove('hidden');

	var accesorize = document.getElementById('div-accesorize');
	accesorize.classList.remove('show');
	accesorize.classList.add('hidden');
}


function showaccesorize(){
	
	var collection = document.getElementById('div-new-collection');
	collection.classList.remove('show');
	collection.classList.add('hidden');

	var seller = document.getElementById('div-best-seller');
	seller.classList.remove('show');
	seller.classList.add('hidden');

	var accesorize = document.getElementById('div-accesorize');
	accesorize.classList.add('show');
	accesorize.classList.remove('hidden');
}





