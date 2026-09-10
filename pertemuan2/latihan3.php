<!DOCTYPE html>
<html>
<head>
    <title>Latihan 3 - Kalkulator Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        .header-label {
            font-weight: bold;
            color: red;
            display: inline-block;
            width: 150px;
            text-align: center;
        }
        .form-container {
            margin-top: 5px;
        }
        input[type="number"], select {
            padding: 2px;
        }
        .hasil {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <!-- Label Header -->
    <div>
        <span class="header-label">Nilai I</span>
        <span style="display: inline-block; width: 35px;"></span>
        <span class="header-label">Nilai II</span>
    </div>

    <!-- Form Input -->
    <div class="form-container">
        <form action="" method="POST">
            <input type="number" name="nilai1" step="any" required value="<?php echo isset($_POST['nilai1']) ? $_POST['nilai1'] : ''; ?>">
            
            <select name="operator">
                <option value="+" <?php if(isset($_POST['operator']) && $_POST['operator'] == '+') echo 'selected'; ?>>+</option>
                <option value="-" <?php if(isset($_POST['operator']) && $_POST['operator'] == '-') echo 'selected'; ?>>-</option>
                <option value="*" <?php if(isset($_POST['operator']) && $_POST['operator'] == '*') echo 'selected'; ?>>*</option>
                <option value="/" <?php if(isset($_POST['operator']) && $_POST['operator'] == '/') echo 'selected'; ?>>/</option>
            </select>
            
            <input type="number" name="nilai2" step="any" required value="<?php echo isset($_POST['nilai2']) ? $_POST['nilai2'] : ''; ?>">
            
            <input type="submit" name="submit" value="submit">
        </form>
    </div>

    <!-- Proses dan Tampilan Hasil (di halaman yang sama) -->
    <?php
    if (isset($_POST['submit'])) {
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $operator = $_POST['operator'];
        $hasil = 0;
        $error = "";

        switch ($operator) {
            case '+':
                $hasil = $nilai1 + $nilai2;
                break;
            case '-':
                $hasil = $nilai1 - $nilai2;
                break;
            case '*':
                $hasil = $nilai1 * $nilai2;
                break;
            case '/':
                if ($nilai2 != 0) {
                    $hasil = $nilai1 / $nilai2;
                } else {
                    $error = "Tidak bisa membagi dengan angka nol (0)!";
                }
                break;
        }

        echo "<div class='hasil'>";
        if ($error != "") {
            echo "<span style='color: red;'>Error: $error</span>";
        } else {
            echo "Hasil: $nilai1 $operator $nilai2 = <strong>$hasil</strong>";
        }
        echo "</div>";
    }
    ?>

</body>
</html>