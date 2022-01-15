-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 12, 2022 lúc 08:30 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ecommerces`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `product_id`, `user_id`, `quantity`, `created_at`) VALUES
(1, 2, 0, 2, '2021-12-23 06:47:31'),
(2, 1, 1, 1, '2021-12-24 06:47:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_name` varchar(50) NOT NULL,
  `post_description` varchar(1000) NOT NULL,
  `post_cate_id` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `img` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`post_id`, `post_name`, `post_description`, `post_cate_id`, `author`, `created_at`, `img`) VALUES
(1, 'HIGHLANDS COFFEE PHINDI - CÀ PHÊ PHIN THẾ HỆ MỚI!', '117893497_3384030921677728_5150032367808787141_o\r\nCùng ước muốn mang Cà Phê Phin Việt Nam đến gần hơn với người trẻ, Highlands Coffee đã ra mắt PhinDi - Một thế hệ Cà Phê Phin Việt Nam hoàn toàn mới, phục vụ cho thế hệ trẻ đầy nhiệt huyết, độc lập và sáng tạo. Vẫn mang trong mình tinh tuý chắt lọc từ Cà Phê Phin Việt Nam nhưng êm chất Phin, kết hợp độc đáo cùng những vị ngon từ Kem Sữa - Hạnh Nhân - Choco. PhinDi, Cà Phê Phin Thế Hệ Mới - Chất Phin Êm, Ngon Tròn Vị!PhinDi #Nhẹ_Caffeine là sự hoà quyện sáng tạo của Chất Phin Êm Highlands Coffee có trong bộ 3 Ngon Tròn Vị: PhinDi Kem Sữa, PhinDi Choco và PhinDi Hạnh Nhân.\r\n\r\n Ngon như vị Phin “gây nghiện” của Highlands Coffee, nay lại kết hợp cuốn hút với vị béo bồng bềnh xôm xốp của Kem Sữa, thơm ngon quấn mũi từ Choco và bùi bùi thanh thanh hương Hạnh Nhân.\r\n\r\nUống PhinDi là cuốn cuốn liền và chỉ muốn muốn hút hút cho hết ngay 3 vị siêu phẩm này thôi!\r\nPhinDi Kem Sữa - Cà phê Phin thế hệ mới với chất Phin êm hơn, kết hợp cùng Kem Sữa b', 3, 0, '2022-01-01 07:12:23', 'New_5.jpg'),
(2, 'HIGHLANDS COFFEE RA MẮT PHINDI HỒNG TRÀ MỚI', 'Lần đầu tiên Cà Phê Phin và Trà kết hợp trong cùng 1 thức uống. PhinDi Hồng Trà Mới đánh dấu sự kết hợp độc đáo tưởng như không hợp nhưng lại vô cùng hoà quyện.\r\n\r\nChất Phin quyện Trà của tân binh PhinDi Hồng Trà Mới hứa hẹn sẽ làm bạn mê mẩn ngay lần thử đầu tiên. Siêu phẩm PhinDi Hồng Trà Mới đã có mặt tại gần 400 quán trên toàn quốc, đến quán gần nhất và thử ngay thôi!\r\n\r\n', 3, 0, '2022-01-07 07:04:10', 'New_4.jpg'),
(3, 'ĐIỀU KHOẢN VÀ ĐIỀU KIỆN ÁP DỤNG CỦA ỨNG DỤNG HIGHL', ' \r\n\r\nVUI LÒNG ĐỌC NHỮNG ĐIỀU KHOẢN SỬ DỤNG NÀY CẨN THẬN.\r\n\r\nVIỆC TẢI XUỐNG, CÀI ĐẶT, TRUY CẬP HOẶC SỬ DỤNG ỨNG DỤNG DI ĐỘNG HIGHLANDS COFFEE NÀY (“ỨNG DỤNG”) CÓ NGHĨA LÀ BẠN ĐÃ ĐỒNG Ý CÁC ĐIỀU KHOẢN SỬ DỤNG (“ĐIỀU KHOẢN”) MÀ CÔNG TY CỔ PHẦN DỊCH VỤ CÀ PHÊ CAO NGUYÊN (“HIGHLANDS COFFEE”, “chúng tôi”, hoặc “của chúng tôi”) CÓ THỂ SỬA ĐỔI THEO TỪNG THỜI ĐIỂM, VÀ TRỞ THÀNH THỎA THUẬN RÀNG BUỘC GIỮA BẠN, VỚI TƯ CÁCH CÁ NHÂN HOẶC THAY MẶT MỘT TỔ CHỨC (“NGƯỜI DÙNG” HOẶC “BẠN”) VÀ HIGHLANDS COFFEE ĐIỀU CHỈNH VIỆC TRUY CẬP VÀO VÀ SỬ DỤNG ỨNG DỤNG. NẾU NGƯỜI DÙNG KHÔNG ĐỒNG Ý VỚI TẤT CẢ CÁC ĐIỀU KHOẢN NÀY, THÌ NGƯỜI DÙNG KHÔNG ĐƯỢC SỬ DỤNG ỨNG DỤNG VÀ PHẢI NGƯNG SỬ DỤNG NGAY LẬP TỨC.\r\n\r\nNHỮNG ĐIỀU KHOẢN NÀY BAO GỒM CÁC TUYÊN BỐ MIỄN TRỪ VÀ CÁC QUY ĐỊNH KHÁC VỀ GIỚI HẠN TRÁCH NHIỆM PHÁP LÝ CỦA CHÚNG TÔI ĐỐI VỚI NGƯỜI DÙNG.\r\n\r\n \r\n\r\nChúng tôi bảo lưu quyền, theo quyết định riêng của chúng tôi, để thực hiện các thay đổi hoặc sửa đổi các Điều khoản này bất cứ lúc nào và vì bất kỳ lý do gì. Các điều k', 3, 1, '2021-12-14 07:15:28', 'New_7.jpg'),
(4, 'HIGHLANDS COFFEE CHÍNH THỨC RA MẮT ỨNG DỤNG DI ĐỘN', 'Ứng dụng di động Highlands Coffee tích hợp nhiều tính năng tiện lợi và dễ sử dụng, đã chính thức trình làng và sẵn sàng phục vụ các “tín đồ” yêu mến Highlands Coffee.\r\n\r\nTải app và trải nghiệm order trên app Highlands Coffee nào các bạn ơi!\r\n\r\n#HighlandsCoffee #HighlandsCoffeeApp #HighlandsCoffeeLoyaltyClub\r\n\r\n--------------------\r\n\r\nTải ứng dụng Highlands Coffee ngay: https://hlcf.ee/hlapp1', 3, 0, '2022-01-01 07:17:50', 'New_2.jpg'),
(5, 'HIGHLANDS CẬP NHẬT GIÁ BÁN THEO CHÍNH SÁCH THUẾ GT', 'Căn cứ theo Nghị quyết 406/NQ-UBTVQH15 về miễn, giảm thuế trong năm 2021 của Ủy Ban Thường Vụ Quốc Hội, Highlands Coffee sẽ điều chỉnh thuế GTGT trên mỗi sản phẩm từ 10% xuống 7%.\r\n\r\n*Lưu ý: Hãy cập nhật phiên bản ứng dụng mới nhất để được cập nhật về giá đối với hình thức mua hàng qua Ứng Dụng Di Động Highlands Coffee bạn nhé\r\n\r\nThời gian áp dụng: 01/11/2021 – 31/12/2021', 3, 2, '2021-10-23 07:23:28', 'New_1.jpg'),
(6, 'HIGHLANDS COFFEE - TOP 50 THƯƠNG HIỆU NHÀ TUYỂN DỤ', ' \r\nSáng ngày 07/05/2020 vừa qua, Highlands Coffee đã vinh dự nhận giải thưởng vô cùng ý nghĩa được đánh giá dựa trên sự hài lòng và tín nhiệm cao của sinh viên Việt Nam. Cuộc khảo sát được thực hiện bởi Công ty Anphabe, Intage và SAC tổ chức với sự bình chọn của 23,212 ứng viên thuộc 10 khối ngành từ 93 trường Đại học lớn trên toàn quốc.\r\nThương hiệu Highlands Coffee® sinh ra từ niềm đam mê bất tận với hạt cà phê và lá trà đầy tự hào của Việt Nam. Qua một chặng đường dài, chúng tôi đã không ngừng mang đến những sản phẩm cà phê và trà thơm ngon, đậm đà trong không gian thoải mái và lịch sự với mức giá hợp lý. Những ly trà và cà phê của chúng tôi không chỉ đơn thuần là thức uống quen thuộc mà còn mang trên mình một sứ mệnh văn hóa phản ánh một phần nếp sống hiện đại của người Việt Nam, trở thành thương hiệu cà phê và trà luôn dẫn đầu tại Việt Nam và không ngừng vươn ra thế giới.\r\n\r\nHighlands Coffee luôn tìm kiếm những ứng cử viên tiềm năng có chung niềm đam mê và nỗ lực cùng chúng tôi vư', 3, 1, '2022-01-07 07:26:39', 'New_8.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_categories`
--

CREATE TABLE `post_categories` (
  `post_cate_id` int(11) NOT NULL,
  `post_cate_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post_categories`
--

INSERT INTO `post_categories` (`post_cate_id`, `post_cate_name`, `created_at`, `created_by`) VALUES
(1, 'Khuyến mãi', '2021-12-22 06:45:53', 2),
(2, 'Chi nhánh', '2021-12-15 06:45:53', 0),
(3, 'Tin tức và sự kiện', '2022-01-01 07:11:12', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `pro_cate_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `pro_cate_id`, `status`, `created_at`, `created_by`) VALUES
(1, 'Cf nóng', 3, 'sale 10%', '2021-12-21 06:44:11', 1),
(2, 'Bạc xỉu', 1, 'sale 2%', '2021-12-15 06:44:38', 1),
(3, 'Sữa dầm', 3, '', '2021-12-16 06:45:03', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_categories`
--

CREATE TABLE `product_categories` (
  `pro_cate_id` int(11) NOT NULL,
  `pro_cate_name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product_categories`
--

INSERT INTO `product_categories` (`pro_cate_id`, `pro_cate_name`, `created_at`, `created_by`) VALUES
(1, 'Cafe', '2021-12-28 06:42:39', 1),
(2, 'Hot Drink', '2021-12-23 06:42:39', 1),
(3, 'Cold Drink', '2021-12-16 06:43:29', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fullname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `fullname`) VALUES
(0, 'leminhtu@gmai.com', '123456', 'Le Minh Tu'),
(1, 'nguyenhuulevinh@gmail.com', '123456', 'Nguyen Huu Le Vinh'),
(2, 'nguyentuankhang@gmail.com', '123456', 'Nguyen Tuan Khang');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product` (`product_id`),
  ADD KEY `user` (`user_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `post category` (`post_cate_id`),
  ADD KEY `author` (`author`);

--
-- Chỉ mục cho bảng `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`post_cate_id`),
  ADD KEY `created by` (`created_by`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product category` (`pro_cate_id`),
  ADD KEY `created by user` (`created_by`);

--
-- Chỉ mục cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`pro_cate_id`),
  ADD KEY `created` (`created_by`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `post_cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `pro_cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `product` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `author` FOREIGN KEY (`author`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `post category` FOREIGN KEY (`post_cate_id`) REFERENCES `post_categories` (`post_cate_id`);

--
-- Các ràng buộc cho bảng `post_categories`
--
ALTER TABLE `post_categories`
  ADD CONSTRAINT `created by` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `created by user` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `product category` FOREIGN KEY (`pro_cate_id`) REFERENCES `product_categories` (`pro_cate_id`);

--
-- Các ràng buộc cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `created` FOREIGN KEY (`created_by`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
