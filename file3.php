<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Rumus Bangun Daaar</title>
</head>

<body>
    <h1> Bangun Datar Persegi</h1>

    <form method="post">
        <table>
            <tr>
                <td>Sisi 1</td>
                <td>
                    <input type="text" name="sisi1" required>
                </td>
            </tr>
            <tr>
                <td>Sisi 2</td>
                <td>
                    <input type="text" name="sisi2" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Hitung">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $sisi1 = $_POST['sisi1'];
        $sisi2 = $_POST['sisi2'];

        $luaspersegi = $sisi1 * $sisi2;
        echo 'Hasil perhitungan luas persegi';
        echo '<br> Diketahui ';
        echo '<br> Sisi Pertama ' . $sisi1;
        echo '<br> Sisi Kedua ' . $sisi2;

        echo '<br> Maka luasnya ' . $luaspersegi;
    }
    ?>
</body>

</html>