Ứng dụng - Quản trị người dùng 
- PDO
- tích hợp chức năng đăng nhập ( session )
- tích hợp chức năng upload ảnh đại diện cho người dùng
- tích hợp chức năng flash message sau khi thêm người dùng , sửa người dùng ...
- tích hợp chức năng validate dữ liệu khi nhập thêm mới / sửa người dùng
- tích hợp chức năng phân trang 
- tích hợp chức năng tìm kiếm người dùng theo tên/email/số điện thoại 
- tích hợp chức năng bảo mật chống XSS và SQL Injection 

1 - xây dựng CSDL cho quan trị người dùng
+ UsersManageProject ( tên CSDL )
có bảng users 
  cột user_id ( khóa chính ) INT - auto_increment - primary key 
  cột user_name ( tên người dùng để đăng nhập ) varchar
  cột first_name ( varchar )
  cột last_name ( varchar )
  cột user_email ( email người dùng ) ( varchar )
  cột user_phone ( số điện thoại ) ( varchar )
  cột user_password ( varchar )
  cột user_avatar ( lưu đường dẫn ảnh đại diện ) ( varchar )
  cột user_birthday ( datetime )
  cột user_desc ( mô tả ) ( text )
  cột created ( thời gian tạo ) ( datetime )
  cột updated ( thời gian sửa ) ( datetime )
  

    
