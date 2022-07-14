<?php
// PHP có 4 loại vòng lặp là while,do while,for và foreach
// For and foreach

// 1 For:

$arr = ['ReactJS', 'Angular', 'VueJS'];
echo "Vòng lặp For";
echo "<br>";
for ($i = 0; $i < count($arr); $i++) {
    echo "<br>";
    echo $arr[$i];
    echo "<br>";
}
// 2 Foreach: 
echo "<br>";
$arr = ['PHP', 'Ruby', 'Java'];
echo "Vòng lặp Foreach";
echo "<br>";
foreach ($arr as $ar) {
    echo "<br>";
    echo $ar;
}
// Sự khác biệt giữa 2 vòng lặp là:
// -Vòng lặp for sẽ phải có điều kiện để thực thi (điều kiện thực thi của vòng lặp for phải là số),và bước nhảy
// -Vòng lặp foreach sẽ lặp mảng hoặc object, không cần biết sô lượng phần tử trong mảng
// while and do while
echo "<br>";
echo "Vòng lặp while";
echo "<br>";

$i = 1; // biến dùng để lặp
// Nếu i<= 10 thì mới lặp
while($i<=10){
    echo $i;
    // Tăng giá trị lên
    $i++;  
}
// Do while
echo "<br>";
echo "Vòng lặp do while";
echo "<br>";
$l = 1;
do {
    echo $l;
    $l++;
} while ($l <= 10);

// Sự khác biệt giữa 2 vòng lặp là:
//  vòng lặp while sẽ chạy trước xong mới kiểm tra điều kiện nếu điều kiện đúng sẽ chạy tiếp còn nếu sai thì dừng
// Còn vòng lặp do while sẽ lặp 1 lần rồi mới kiểm tra điều kiện thực hiện do xong mới kiểm tra điều kiện while . 