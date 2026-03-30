<?php
$namaDepan    = "";
$namaBelakang = "";
$noHP         = "";
$alamat       = "";
$sudahSubmit  = false;

if (isset($_POST["submit"])) {
    $namaDepan    = isset($_POST["nama_depan"])    ? $_POST["nama_depan"]    : "";
    $namaBelakang = isset($_POST["nama_belakang"]) ? $_POST["nama_belakang"] : "";
    $noHP         = isset($_POST["no_hp"])         ? $_POST["no_hp"]         : "";
    $alamat       = isset($_POST["alamat"])        ? $_POST["alamat"]        : "";
    $sudahSubmit  = true;
}

if (isset($_GET["reset"])) {
    $sudahSubmit = false;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Biodata</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #f0f2f5;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            padding: 50px 20px;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            width: 100%;
            max-width: 480px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 24px;
            color: #333;
            font-size: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-size: 13px;
            color: #555;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 9px 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            margin-bottom: 16px;
            outline: none;
        }

        input[type="text"]:focus,
        textarea:focus {
            border-color: #7aabf5;
        }

        textarea {
            height: 90px;
            resize: none;
        }

        .baris {
            display: flex;
            gap: 12px;
        }

        .baris div {
            flex: 1;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #5a9bf5;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #3a7fd4;
        }

        .hasil {
            margin-top: 24px;
            padding: 16px;
            background-color: #f8f9ff;
            border-left: 4px solid #5a9bf5;
            border-radius: 4px;
        }

        .hasil p {
            font-size: 14px;
            color: #333;
            margin-bottom: 6px;
        }

        .hasil p span {
            font-weight: bold;
        }

        .link-reset {
            display: inline-block;
            margin-top: 10px;
            font-size: 12px;
            color: #888;
            text-decoration: none;
        }

        .link-reset:hover {
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Biodata</h2>

    <form method="POST" action="">

        <div class="baris">
            <div>
                <label>Nama Depan</label>
                <input type="text" name="nama_depan" placeholder="Rifqi" value="<?php echo $namaDepan; ?>">
            </div>
            <div>
                <label>Nama Belakang</label>
                <input type="text" name="nama_belakang" placeholder="Ardhian" value="<?php echo $namaBelakang; ?>">
            </div>
        </div>

        <label>No HP</label>
        <input type="text" name="no_hp" placeholder="08xxxxxxxxxx" value="<?php echo $noHP; ?>">

        <label>Alamat</label>
        <textarea name="alamat" placeholder="Masukkan alamat lengkap..."><?php echo $alamat; ?></textarea>

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php if ($sudahSubmit): ?>
    <div class="hasil">
        <p>Hi, my name is <span><?php echo $namaDepan . " " . $namaBelakang; ?></span></p>
        <p>Phone Number : <span><?php echo $noHP; ?></span></p>
        <p>Address : <span><?php echo $alamat; ?></span></p>
        <a class="link-reset" href="?reset=1">Reset</a>
    </div>
    <?php endif; ?>

</div>

</body>
</html>