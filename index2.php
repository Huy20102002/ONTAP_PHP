<?php
// Session
// session_start();
// if(isset($_SESSION['counter'])){
//     $_SESSION['counter']+=1;
// }else{
//     $_SESSION['counter']=1;
// }
// echo "Số lần truy cập" . $_SESSION['counter'] . 'Lần vào trang';

// Xóa session
// sử dụng unset để xóa session mong muốn
// Example: delete session['counter']
// unset($_SESSION['counter']);
// Sử dụng session_Destroy để xóa toàn bộ session
// session_destroy();

// Cookie
/*
Session và cookie: 2 cái này dùng để lưu trữ dữ liệu tạm thời để hệ thống có thể nhận diện và đưa ra các hành
động khác nhau,tuy cả hai có chung chức năng là lưu dữ liệu nhưng bên trong nó lại khác nhau
*/
// Sự khác biệt giữa session và cookie
// 1. Session: chỉ có thể tồn tại đến khi người dùng đóng trình duyệt, mỗi client sẽ có sessionId khác nhau nên không
// bao giờ xảy ra xung đột session. Session được lưu trong biến toàn cục $_SESSION
// 2. Cookie: Cookie thì được lưu trữ ở máy của client nên khi đóng trình duyệt thì cookie vẫn tồn tại, thời gian của cookie là do 
// người dùng set


