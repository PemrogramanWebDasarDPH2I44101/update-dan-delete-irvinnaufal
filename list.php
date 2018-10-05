<?php
require_once("db.php");
?>
<!DOCTYPE html>
<head>
    <title>LIST</title>
</head>
<body>
    <table>
        <tr align="left">
            <th>Nim</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Aksi</th>
        </tr>
       <?php
            $sql = "SELECT * FROM siswa";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($result);
            if ($row > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row["nim"];
                    echo "<tr>";
                    echo "<td>" . $row["nim"] . "</td>";
                    echo "<td>" . $row["nama"] . "</td>";
                    echo "<td>" . $row["tgl_lahir"] . "</td>";
                    echo "<td>" . "<a href ='formupdate.php?nim = $id'>Update</a> | <a href='delete.php?nim = $id'>Delete</a>" . "</td>";
                    echo "</tr>";
                }
            }else {
                echo "<tr><td colspan='4' align='center'>0 results.</td></tr>";
            }
        ?>

    </table>
</body>
</html>
