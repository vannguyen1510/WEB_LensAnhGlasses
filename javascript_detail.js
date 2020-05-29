// JavaScript Document

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
