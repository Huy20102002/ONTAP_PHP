
<?php
// Ôn tập:
// Câu 1: PHP có mấy cách khai báo.
// Trả lời: PHP có 4 cách khai báo tuy nhiên chỉ có 2 cách là chính thống và không ảnh hưởng đến việc update
// sau này: cách 1: <?php ? >
// Cách 2: <script language="PHP"></script> cũng được xem là cách chính thống và không ảnh hưởng đến việc update

// 2 cách còn lại: <? ? >,<% %> hai cách này thì cần phải setting mới cài đặt được

// Câu 2:Phân biệt $_POST và $_GET in php ?
// Thì cả 2 cái đều dùng để gửi dữ liệu lên server
// $_GET: gửi dữ liệu thông qua url,nên thông tin dữ liệu hiển thị lên url vì thế bảo mật kém,dữ liệu bị giới hạn 1024 kí tự
// $_POST: gửi dữ liệu thông qua HTTP Header vì thế nó có tính bảo mật cao hơn so với GET,dữ liệu của nó không bị
// giới hạn

// Tuy nhiên tốc độ thực thi của POST châm hơn GET

// Câu 3: mảng là gì, có mấy loại mảng
// Mảng là một biến chưa nhiều phần tử,từ đó ta có thể dễ dàng lưu trữ ,xắp xếp,hay xóa bỏ phần tử
// Một cách dễ dàng, mảng bao gồm 2 thành phần chính là key và value,key dùng để truy cập vào phần tử
// của mảng qua đó ta có thể gán,hay lấy giá trị của phần tử 1 cách dễ dàng
// Có 3 loại mảng chính là: mảng tuần tự: mảng này có key tự động tăng dần
//  bắt đầu từ số 0,mảng không tuần tự:là mảng mà mình phải tự định nghĩa các key bằng chữ cái hoặc kí tự,
//mảng đa chiều: là mảng chứ ít nhất  1 mảng khác trong nó

// Câu 4: khái niệm lập trình hướng đối tượng.
// OOP viết tắt của object-oriented programming .nó là một loại ngôn ngữ lập trình tập trung vào đối tượng của nhiệm
// vụ,với tất cả các tài nguyên,chức năng nhằm tạo ra và phát triển hơn nữa.

// câu 5: so sánh hàm required và include thông qua cách chúng xử lý các vấn đề phát sinh trong code
// lệnh include không phải là lệnh ưu tiên cao nhất,vì vậy nếu việc thực thi đoạn mã không thành công tại điểm
// có include nó sẽ chỉ gửi cảnh báo và tiếp tục chạy
// đối với require,câu chuyện lại hoàn toàn khác.nếu có lỗi ở đâu đó ,mã sẽ gặp nghiêm trọng và sự cố.

// câu 6: nêu khái niệm về mô hình mvc là gì ?
// Mô hình mvc gồm 3 lớp chính : Model,view,controller
// Lớp model sẽ chịu tránh nhiệm quản lí dữ liệu,giao tiếp với cơ sở dữ liệu,chịu tránh nhiệm lưu trữ
// và truy vấn dữ liệu
// view lớp này chính là giao diện của ứng dụng,chịu trách nhiệm biểu diễn dữ liệu của ứng dụng thành các
// dạng nhìn thấy được
// controller lớp này đóng vai trò quản lí và điều phối hoạt động của ứng dụng. tầng này sẽ nhận request từ
// client ,điều phối các model và view để có thể cho ra output thích hợp và trả về kết quả cho người dùng
// Ưu điểm của mô hình mvc: tách biệt các model và view tạo sự linh hoạt khi thay đổi ứng dụng,quá trình
// phát triển nhanh chóng,dễ bảo trì.


/*
Câu 7: Các mức truy cập private protected và public
- private:  đây là thành phần chỉ dành cho nội bộ của lớp,nghĩa là chúng ta không thể truy xuất
tới các thành phần private ở lớp con hoặc ở bên ngoài lớp

- protected: chỉ cho phép truy xuất nội bộ trong lớp đó và lớp kế thừa, riêng ở bên ngoài lớp sẽ không truy 
xuất được, mức protected thường được dùng cho những phương thức và thuộc tính có khả năng bị lớp con định nghĩa lại

- public: đây là mức truy cập thoáng nhất vì ta có thể truy cập tới các phương thức và thuộc tính ở bất cứ đâu
dù trong nội bộ,hoặc lớp con hay cả bên ngoài lớp đều truy cập được.
*/
