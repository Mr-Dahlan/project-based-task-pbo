<?php
$namaDepan    = "";
$namaBelakang = "";
$noHP         = "";
$alamat       = "";
$sudahSubmit  = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaDepan    = isset($_POST["nama_depan"])    ? $_POST["nama_depan"]    : "";
    $namaBelakang = isset($_POST["nama_belakang"]) ? $_POST["nama_belakang"] : "";
    $noHP         = isset($_POST["no_hp"])         ? $_POST["no_hp"]         : "";
    $alamat       = isset($_POST["alamat"])        ? $_POST["alamat"]        : "";
    $sudahSubmit  = true;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Biodata</title>
    <style>
        body {
            max-width: 600px;
            margin: 40px auto;
            padding: 0 20px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 20px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
        }

        .tombol-submit {
            display: block;
            margin: 0 auto;
            background-color: #000000;
            color: white;
            font-size: 14px;
            cursor: pointer;
        }

        .tombol-submit:hover {
            background-color: #fc4747;
        }

        .hasil {
            margin-top: 30px;
        }

        .hasil p {
            margin: 6px 0;
        }

        .tombol-reset {
            background: none;
            cursor: pointer;
            font-size: 20px;

        }

        .tombol-reset:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <form method="POST" action="">
        <input type="text" name="nama_depan"    placeholder="Nama Depan"    value="<?php echo $namaDepan; ?>"    required>
        <input type="text" name="nama_belakang" placeholder="Nama Belakang" value="<?php echo $namaBelakang; ?>" required>
        <input type="text" name="no_hp"         placeholder="No HP"         value="<?php echo $noHP; ?>"         required>
        <textarea name="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea>

        <button type="submit" class="tombol-submit">Submit</button>
    </form>

    <?php if ($sudahSubmit): ?>
    <div class="hasil">
        <p>Halooo gess nama aku  <?php echo $namaDepan; ?> <?php echo $namaBelakang; ?></p>
        <p>Nomor Aku  <?php echo $noHP; ?></p>
        <p>Dan alamat aku  <?php echo $alamat; ?></p>

        <form method="GET" action="">
            <button type="submit" class="tombol-reset">Reset</button>
        </form>
    </div>
    <?php endif; ?>

</body>
</html>