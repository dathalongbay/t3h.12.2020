<?php

// ứng dụng của try catch
// dự đoán lỗi và ngoại lệ để chủ động ném ra ngoại lệ

// khi code thực thi chúng ta dùng try catch để bắt ngoại lệ
// nếu ngoại lệ không xảy ra thì ok chạy bình thường
// ngoại lệ xảy ra thì chúng ta sẽ đưa ra 1 hành động khác phù hợp


// kết nối CSDL abc .
// bình thường máy chủ CSDL abc hoạt động => chạy ok
// nếu quá tải truy  cập không connect được CSDL abc => gọi đến CSDL dự phòng
// hoặc chuyển hướng sang trang bảo trì hệ thống


// development => bật thông báo lỗi
// production => ẩn hết lỗi đi

