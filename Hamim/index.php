<?php
include 'getData.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form PHP OOP</title>
</head>
<body>

<h2 style="text-align: center;">Input Data</h2>

<form method="POST" style="display: flex; flex-direction: column; justify-content:center; align-items:center; height: 200px; padding: 5px;">
<div style="display: flex; flex-direction: column; gap: 10px">
    <label >First Name:
    <input type="text" name="first_name" required><br/>
</label><br>

    <label>Last Name:
    <input type="text" name="last_name" required><br>
</label><br>

    <label>Phone Number:
    <input type="text" name="phone" required><br>
</label><br>

    <label>Address:
    <textarea name="address" required></textarea><br>
</label><br> 

    <button type="submit" style="padding: 10px; background-color: #007BFF; color: white; border-radius: 10px">Submit</button>
</div>
<hr>
</form>


<?php
if (!empty($result)) {
	    echo "<h3>Hasil:</h3>";
	    echo $result;
	}
?>
</body>
</html>
