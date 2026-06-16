<?php
// หน้าแนะนำตัวอย่างง่าย
$name = "กนกวรรณ ทองแกมแก้ว";
$age = 19;
$hobby = "ฟังเพลง";
$quote = "สวัสดีค่ะ ยินดีที่ได้รู้จักนะคะ!";
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แนะนำตัว - <?php echo $name; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d18ecc;
            color: #ffffff;
            padding: 2rem;
        }
        .card {
            max-width: 650px;
            margin: 0 auto;
            background: #be0082;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
            padding: 2rem;
        }
        h1 {
            color: #f4f7bb;
        }
        p {
            line-height: 1.7;
        }
        .highlight {
            color: #ffffff;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1><?php echo $quote; ?></h1>
        <p>สวัสดีค่ะ ฉันชื่อ <span class="highlight"><?php echo $name; ?></span>.</p>
        <p> </span> ฉันชอบ <span class="highlight"><?php echo $hobby; ?></span>.</p>
        <p>ฉันอายุ <span class="highlight"><?php echo $age; ?></span> ปี </p>
        <p>ยินดีที่ไดรู้จักค่ะ!</p>
    </div>
</body>
</html>