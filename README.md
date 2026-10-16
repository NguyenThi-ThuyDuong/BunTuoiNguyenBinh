# Website Thương Mại & Giới Thiệu Doanh Nghiệp - Bún Tươi Nguyễn Bính

Website dự án tham khảo từ trang chính thức của thương hiệu **Bún Tươi Nguyễn Bính**, kết hợp giải pháp thương mại điện tử giới thiệu sản phẩm, dịch vụ cung ứng thực phẩm sạch và hệ thống quản trị nội dung toàn diện **CMS SOTA**.

---

## 📌 1. Mô tả dự án

Dự án được xây dựng nhằm mục đích:
- Quảng bá và giới thiệu thương hiệu bún tươi sạch truyền thống 100% không chất bảo quản của Nghệ nhân - Doanh nhân Nguyễn Thị Bính.
- Trưng bày và quản lý danh mục sản phẩm phong phú: bún tươi sợi trung, bún bò sợi to, bánh phở tươi, mì quảng, bánh hỏi, bún gạo lứt, bún khô xuất khẩu...
- Cung cấp dịch vụ cung ứng bún tươi, bánh phở cho các chuỗi nhà hàng, khách sạn, bếp ăn tập thể và suất ăn công nghiệp.
- Cho phép khách hàng đặt hàng trực tuyến, lựa chọn ngày giao và khung giờ giao hàng linh hoạt.
- Hệ thống quản trị nội dung **CMS SOTA** giúp quản lý đơn hàng, danh mục sản phẩm, bài viết tin tức, thông tin tuyển dụng, chính sách và cấu hình công ty một cách trực quan, linh hoạt và đồng bộ.
- Thực hiện dự án thức tập làm quen quy trình tiếp xúc quản trị trang website thực chiến.a

---

## 🛠️ 2. Công nghệ & Công cụ thực hiện

### Backend
- **Ngôn ngữ**: PHP (phiên bản 7.4 - 8.2) theo kiến trúc MVC linh hoạt.
- **Cơ sở dữ liệu**: MySQL / MariaDB (UTF-8 MB4 Unicode).
- **Thư viện lõi**:
  - `AltoRouter`: Điều hướng URL chuẩn SEO, thân thiện.
  - `PDODb`: Xử lý truy vấn CSDL an toàn, chống SQL Injection.
  - `FileCache`: Tối ưu tốc độ tải trang bằng cơ chế cache tệp tin.
  - `PhpMailer`: Hỗ trợ gửi email thông báo đơn hàng và liên hệ.
  - `MobileDetect`: Tự động nhận diện và tối ưu giao diện trên thiết bị di động.

### Frontend
- **HTML5 & CSS3**: Thiết kế hiện đại, tương thích chuẩn W3C.
- **CSS Frameworks**: Tailwind CSS, Bootstrap 4.
- **JavaScript & Thư viện UI**:
  - **jQuery 3.x**: Xử lý logic và tương tác người dùng.
  - **Swiper Slider & Owl Carousel & Slick Slider**: Hiệu ứng trình diễn slide banner, sản phẩm nổi bật và quy trình sản xuất.
  - **Fancybox 3**: Xem video nhà máy và phóng to hình ảnh sản phẩm sắc nét.
  - **GSAP & AOS (Animate on Scroll)**: Hiệu ứng chuyển động mượt mà khi cuộn trang.
  - **FontAwesome 5 Pro**: Hệ thống biểu tượng giao diện trực quan.

### Quản trị CMS SOTA
- Giao diện Admin tinh gọn, dễ sử dụng có tham khảo mã nguồn SoTa.
- Trình soạn thảo văn bản CKEditor & quản lý tệp tin ElFinder.
- Quản lý đa cấp danh mục sản phẩm, quản lý đơn hàng chuyên nghiệp.
- Quản lý các thành phần dữ liệu và nội dung cho các trang như tuyển dụng, thông tin,...

---

## 🚀 3. Hướng dẫn cài đặt & Chạy dự án

### Yêu cầu môi trường
- Máy chủ web: **Apache** hoặc **Nginx** (khuyên dùng môi trường **Laragon** hoặc **XAMPP** trên Windows).
- Phiên bản **PHP >= 7.4** (hỗ trợ tốt trên PHP 8.0, 8.1, 8.2).
- Tiện ích mở rộng PHP bắt buộc: `pdo_mysql`, `curl`, `mbstring`, `gd`, `openssl`.

### Các bước cài đặt chi tiết

#### Bước 1: Tải mã nguồn về máy
```bash
git clone https://github.com/NguyenThi-ThuyDuong/BunTuoiNguyenBinh.git
cd BunTuoiNguyenBinh
```

#### Bước 2: Thiết lập cơ sở dữ liệu
1. Mở công cụ quản lý cơ sở dữ liệu (**phpMyAdmin** hoặc **HeidiSQL** / **Navicat**).
2. Tạo một database mới với tên: `buntuoi_nguyenbinh` và bảng mã `utf8mb4_unicode_ci`.
3. Nhập (Import) file cơ sở dữ liệu của dự án vào database vừa tạo.

#### Bước 3: Cấu hình kết nối hệ thống
Mở tệp tin `libraries/config.php` và điều chỉnh các thông số phù hợp với môi trường máy của bạn:

```php
$config['database'] = array(
    'server-name' => $_SERVER["SERVER_NAME"],
    'url' => '/',
    'type' => 'mysql',
    'host' => 'localhost',
    'user' => 'root',        // Tên tài khoản MySQL
    'pass' => '',            // Mật khẩu MySQL (để trống nếu dùng Laragon/XAMPP mặc định)
    'dbname' => 'buntuoi_nguyenbinh', // Tên CSDL đã tạo ở Bước 2
    'port' => 3306,
    'prefix' => 'table_',
    'charset' => 'utf8mb4'
);
```

#### Bước 4: Khởi chạy dự án
* **Cách 1: Sử dụng Laragon / XAMPP**:
  - Đặt thư mục dự án vào thư mục gốc của web server (ví dụ: `C:/laragon/www/BunTuoiNguyenBinh` hoặc `C:/xampp/htdocs/BunTuoiNguyenBinh`).
  - Truy cập trình duyệt qua địa chỉ: `http://localhost/BunTuoiNguyenBinh/` (hoặc `http://buntuoi_nguyenbinh.test` nếu dùng Virtual Host của Laragon).

* **Cách 2: Chạy trực tiếp bằng PHP Built-in Server**:
  Mở terminal tại thư mục gốc của dự án và chạy lệnh:
  ```bash
  php -S 127.0.0.1:8000
  ```
  Sau đó mở trình duyệt và truy cập: `http://127.0.0.1:8000/`.

---

## 🔐 4. Thông tin quản trị hệ thống (Admin SOTA)

- **Đường dẫn trang quản trị**: `http://localhost/BunTuoiNguyenBinh/sota/` (hoặc `http://127.0.0.1:8000/sota/`).
- **Tên đăng nhập**: `admin`
- **Mật khẩu**: `admin`

---

## 📂 5. Cấu trúc thư mục chính của dự án

```text
├── assets/             # Chứa toàn bộ CSS, JS, fonts, thư viện frontend (Swiper, Bootstrap, Slick...)
├── libraries/          # Lớp thư viện backend, router, config CSDL, class xử lý
├── sources/            # Controller xử lý nghiệp vụ từng trang (index, product, news, order...)
├── templates/          # Giao diện hiển thị (View) phân chia theo trang và layout
│   ├── index/          # Giao diện Trang chủ
│   ├── product/        # Giao diện Danh mục và Chi tiết sản phẩm
│   ├── order/          # Giao diện Giỏ hàng & Đặt hàng
│   ├── static/         # Giao diện các Trang tĩnh (Giới thiệu, Footer...)
│   └── layout/         # Header, Menu, Footer, Modal, Bổ trợ
├── sota/               # Toàn bộ hệ thống quản trị CMS SOTA dành cho Admin
├── upload/             # Thư mục lưu trữ hình ảnh sản phẩm, bài viết, banner
└── index.php           # Tệp điều hướng chính của toàn bộ website
```

---

## 📄 6. Giấy phép
Dự án được phát triển phục vụ mục đích học tập, nghiên cứu và triển khai ứng dụng thực tế theo đơn vị thực tập.
