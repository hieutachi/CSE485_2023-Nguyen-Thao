<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<?php
    include('search.php');
    if (isset($_GET['song'])) {
        $song = $_GET['song'];
    } else {
        $song = 'default'; 
    }

    switch ($song) {
        case 'noitinhyeubatdau':
            $songTitle = "Nơi tình yêu bắt đầu";
            $songGenre = "Nhạc trữ tình";
            $songSummary = "Bài hát 'Nơi tình yêu bắt đầu' khắc họa khoảnh khắc đầu tiên của tình yêu, nơi mà mọi cảm xúc ngọt ngào và trong sáng đều được nhen nhóm. Hình ảnh những buổi chiều tà, tiếng chim hót, và những ánh mắt ngập tràn yêu thương tạo nên bức tranh đẹp đẽ của tình yêu mới chớm.";
            $songContent = "Hành trình khám phá cảm xúc, từ những ánh mắt đầu tiên, nụ cười ngại ngùng cho đến những giây phút hạnh phúc bên nhau. Mỗi giai điệu của bài hát như một ký ức sống động, dẫn dắt người nghe trở về những ngày tháng ngọt ngào nhất.";
            $songAuthor = "Bùi Anh";
            $songImage = "images/songs/noitinhyeubatdau.jpg";
            break;

        default:
            $songTitle = "Không tìm thấy bài hát";
            $songGenre = "";
            $songSummary = "";
            $songContent = "";
            $songAuthor = "";
            $songImage = "images/default.jpg"; 
            break;
    }
?>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="my-logo">
                    <a class="navbar-brand" href="#">
                        <img src="images/logo2.png" alt="" class="img-fluid">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="./login.php">Đăng nhập</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Nội dung cần tìm" aria-label="Search" name="query">
                    <button class="btn btn-outline-success" type="submit">Tìm</button>
                </form>
                </div>
            </div>
        </nav>

    </header>
    <main class="container mt-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
       
                <div class="row mb-5">
                    <div class="col-sm-4">
                        <img src="images/songs/noitinhyeubatdau.jpg" class="img-fluid" alt="...">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="card-title mb-2">
                            <a href="" class="text-decoration-none"><?php echo $songTitle; ?></a>
                        </h5>
                        <p class="card-text"><span class=" fw-bold">Bài hát: </span><?php echo $songTitle; ?></p>
                        <p class="card-text"><span class=" fw-bold">Thể loại: </span><?php echo $songGenre; ?></p>
                        <p class="card-text"><span class=" fw-bold">Tóm tắt: </span><?php echo $songSummary; ?></p>
                        <p class="card-text"><span class=" fw-bold">Nội dung: </span><?php echo $songContent; ?></p>
                        <p class="card-text"><span class=" fw-bold">Tác giả: </span><?php echo $songAuthor; ?></p>

                    </div>          
        </div>
    </main>
    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>