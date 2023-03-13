var app = angular.module('myApp',[]);
app.controller('myController', function($scope) {
	$scope.abm = "Thông tin cá nhân";
	$scope.updateInfo = "Sinh nhật : 26/9/1998";
	$scope.verify = "Verify";
	$scope.des = "Description about me !";
	$scope.cv = "Sở thích - Trạng thái";
	$scope.job1 = "- Đam mê tìm tòi những thứ mới mẻ ";
	$scope.job2 = "- Chưa có người yêu và đang tìm kiếm đối tượng";
	$scope.contact = "Thông tin liên lạc";
	$scope.contact1 = "Facebook :https://www.facebook.com/Thetam1998/";
	$scope.contact2 = "Email: Thetam1998@gmail.com";
	$scope.contactmi = " LIÊN HỆ TÔI";
	$scope.ifyou = "Nếu bạn đang quan tâm , hãy nhắn tin với mình nhé";
	$scope.modal1 = "Facebook";
	$scope.modal2 = "Zalo";
	$scope.modal3 = "SnapChat";
	$scope.modal4 = "Email";
	$scope.modal5 = "Sms";
	$scope.linkfb = "https://www.facebook.com/Thetam1998/";
	$scope.linkzl = "";
	$scope.linksc = "";
	$scope.linkgm = "thetam1998@gmail.com";
	$scope.phonenumber = "0386829919 - Viettell";
	$scope.email = "thetam1998@gmail.com";
	$scope.title2 = "Hành trình của tôi";
	$scope.contentStory1 = "- Chào các bạn mình tên là Tâm , Sinh viên trường Cao Đẳng FPT polytechnic tại Hà Nội , Sinh ra và lớn lên tại mảnh đất Thanh Hóa , năm 2018 mình từng là chiến sỹ thông tin của bộ tư lệnh thông tin 141 đóng quân tại Ninh Bình , từng chiến đấu và bảo vệ tổ quốc , kết thúc khóa huấn luyện 2 năm mình trở về và đăng ký học trường FPT và hiện tại là sinh viên năm 2 của trường....";
	$scope.contentStory2 = "- Mục tiêu mà tôi luôn phấn đấu trong những năm qua là ra được trường , học tập hoàn thành các môn học , kiếm được việc làm và ra trường có sẵn người yêu để cưới haha !";
	$scope.storytitle1 = "Thông tin cá nhân";
	$scope.storytitle2 = "Lời hứa của tôi với bản thân và mọi người trong hai năm qua ...";
	$scope.nothinglikeus = "Thank for watching";
	$scope.thankall = "Cảm ơn mọi người đã quan tâm";
	$scope.au = "Lmint";
	$scope.phone = false;
	$scope.reverse = function () {
		$scope.phone= !$scope.phone;
	}
	$scope.gmail = false;
	$scope.reverse2 = function () {
		$scope.gmail= !$scope.gmail;
	};
});