<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="./css/sub-menu.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="header_row">
                <div class="logo">
                    <img src="./img/logo.png" alt="">
                </div>
                <div class="header_search">
                    <div class="header_search_col">
                        <img id="free" src="./img/viman.png">
                        <div class="header_search_col-text">
                            <h3>GIAO HÀNG MIỄN PHÍ</h3>
                            <p>FREESHIP MỌI ĐƠN HÀNG TỪ 80K, ÁP DỤNG CHO TẤT CẢ TỪ HÀ NỘI, HCM, VÀ CÁC TỈNH THÀNH.</p>
                        </div>
                    </div>
                    <?php include "./header_search.php" ?>
                </div>
            </div>
        </div>
        <div class="navbar">
            <ul class="main-menu">
                <li><a href="./index.php">DANH MỤC SẢN PHẨM</a></li>
                <li><a href="./likepro.php">SẢN PHẨM BÁN CHẠY</a></li>
                <li><a href="./introduce.php">GIỚI THIỆU</a></li>
                <li><a href="./news.php">TIN TỨC</a></li>
                <li><a href="./contact.php">LIÊN HỆ</a></li>
                <li><a href="./gio_hang.php">GIỎ HÀNG</a></li>
            </ul>
        </div>
        <div class="banner">
            <div class="banner_row">
                <div class="banner_row_col">
                    <img src="../assets/img/0.png" id="image" alt="">
                </div>
                <div class="banner_row_col">
                    <div class="banner_row_col1_row">
                        <a href="">
                            <img src="../view/img/banner-right-1.png" alt="">
                        </a>
                    </div>
                    <div class="banner_row_col1_row">
                        <a href="">
                            <img src="../view/img/banner-right-2.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <script src="../assets/js/slideshows.js"></script>
        <div class="main">
            <div class="main_text">
                <h3>HÔM NAY CÓ GÌ HOT??</h3>
            </div>
            <?php
            $connection = new PDO("mysql:host=127.0.0.1;dbname=baileyshop;charset=utf8", "root", "");
            $query = "SELECT * FROM products WHERE 1 ORDER BY created_at DESC LIMIT 0,4";
            $stmt = $connection->prepare($query);
            $stmt->execute();
            $products = $stmt->fetchAll();
            // var_dump($products);
            // die;
            ?>
            <div id="main_row">
                <?php foreach ($products as $product) : ?>
                    <div class="main_row_col">
                        <a href="./view/detail-pro.php?id=<?php echo $product["id"] ?>">
                            <img src="../admin/img/<?php echo $product["image"] ?>" alt="">
                        </a>
                        <span>Giá: <?php echo $product["price"] ?>đ</span>
                        <h4><?php echo $product["name"] ?></h4>
                    </div>
                <?php endforeach ?>
            </div>
            <section class="banner_center">
                <div class="banners_center1">
                    <a href="">
                        <img src="./img/banner-center-1.png" alt="">
                    </a>
                </div>
                <div class="banners_center2">
                    <div class="banners_center2_row">
                        <a href="">
                            <img src="./img/banner-center-3.png" alt="">
                        </a>
                    </div>
                    <div class="banners_center2_row1">
                        <a href="">
                            <img src="./img/banner-center-4.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="banners_center3">
                    <a href="">
                        <img src="./img/banner-center-2.png" alt="">
                    </a>
                </div>
            </section>
            <div class="main_text">
                <h3>SẢN PHẨM MỚI</h3>
            </div>
            <?php
            $connection = new PDO("mysql:host=127.0.0.1;dbname=baileyshop;charset=utf8", "root", "");
            $query = "SELECT * FROM products WHERE 1 ORDER BY view DESC LIMIT 0,8";
            $stmt = $connection->prepare($query);
            $stmt->execute();
            $product = $stmt->fetchAll();
            // var_dump($product);
            // die;
            ?>
            <div id="main_row" style="height: 100%;">
                <?php foreach ($product as $item) : ?>
                    <div class="main_row_col">
                        <a href="./view/detail-pro.php?id=<?php echo $item["id"] ?>">
                            <img src="../admin/img/<?php echo $item["image"] ?>" alt="">
                        </a>
                        <span>Giá: <?php echo $item["price"] ?>đ</span>
                        <h4><?php echo $item["name"] ?></h4>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="footer">
            <div class="footer_row">
                <div class="footer_row_col">
                    <h5>VỀ CHÚNG TÔI</h5>
                    <p>Câu chuyện thương hiệu</p>
                    <p>Quy định & hình thức thanh toán</p>
                    <p>Chính sách bảo mật thông tin</p>

                </div>
                <div class="footer_row_col">
                    <h5>HỖ TRỢ</h5>
                    <p>Chính sách tích lũy điểm</p>
                    <p>Hướng dẫn mua hàng và hướng dẫn giao hàng</p>
                    <p>Chính sách đổi trả</p>
                </div>
                <div class="footer_row_col">
                    <h5>HỢP TÁC KINH DOANH</h5>
                    <p>Chính sách bán sỉ</p>
                    <p>HOTLINE</p>
                    <p>0976890027</p>
                </div>
            </div>
            <div class="footer_roW">
                <div class="footer_row_colum">
                    <h3>Công ty TNHH Bán lẻ Bailey</h3>
                    <p>Tòa nhà FPT Polytechnic, P. Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội</p>
                </div>
            </div>
        </div>
    </div>

    <script src="../view/js/validate-form.js"></script>
</body>

</html>