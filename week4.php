<?php
// --- Logic ---
$show_table = false;
$show_sum = false;
$mult_number = '';
$num1 = '';
$num2 = '';
$sum = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['show_table']) && $_POST['multiplication_number'] !== '') {
        $mult_number = intval($_POST['multiplication_number']);
        $show_table = true;
    }

    if (isset($_POST['add_numbers']) && $_POST['number1'] !== '' && $_POST['number2'] !== '') {
        $num1 = floatval($_POST['number1']);
        $num2 = floatval($_POST['number2']);
        $sum = $num1 + $num2;
        $show_sum = true;
    }
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>PHP Week 4</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 700px;
            margin: 20px auto;
            padding: 10px;
            background: #f7f7f7;
            color: #333;
        }
        h1, h2 {
            color: #0056b3;
        }
        .box {
            background: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0,0,0,0.08);
            margin-bottom: 20px;
        }
        .result {
            background: #e8f0fe;
            padding: 12px;
            border-radius: 6px;
            margin-top: 10px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            margin-top: 12px;
            padding: 10px 18px;
            border: none;
            background: #007bff;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <h1>เว็บไซต์ PHP - สัปดาห์ 4</h1>

    <div class="box">
        <h2>1) สูตรคูณของเลข</h2>
        <form method="post">
            <label for="multiplication_number">ป้อนตัวเลขเพื่อแสดงสูตรคูณ:</label>
            <input type="number" id="multiplication_number" name="multiplication_number"
                   min="0" value="<?php echo $show_table ? htmlspecialchars($mult_number) : ''; ?>" required>
            <input type="submit" name="show_table" value="แสดงสูตรคูณ">
        </form>
        <?php if ($show_table): ?>
        <div class="result">
            <strong>สูตรคูณของ <?php echo htmlspecialchars($mult_number); ?></strong><br>
            <pre><?php
                for ($i = 1; $i <= 12; $i++) {
                    echo sprintf('%d x %d = %d', $mult_number, $i, $mult_number * $i) . "\n";
                }
            ?></pre>
        </div>
        <?php endif; ?>
    </div>

    <div class="box">
        <h2>2) บวกเลข 2 ตัว</h2>
        <form method="post">
            <label for="number1">ตัวเลขตัวที่ 1:</label>
            <input type="number" id="number1" name="number1"
                   value="<?php echo $show_sum ? htmlspecialchars($num1) : ''; ?>" required>
            <label for="number2">ตัวเลขตัวที่ 2:</label>
            <input type="number" id="number2" name="number2"
                   value="<?php echo $show_sum ? htmlspecialchars($num2) : ''; ?>" required>
            <input type="submit" name="add_numbers" value="คำนวณผลบวก">
        </form>
        <?php if ($show_sum): ?>
        <div class="result">
            ผลรวมของ <?php echo htmlspecialchars($num1); ?> + <?php echo htmlspecialchars($num2); ?>
            = <strong><?php echo htmlspecialchars($sum); ?></strong>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>