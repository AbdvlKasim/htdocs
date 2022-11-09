<table border="1">
    <tr>
        <th> Filename </th>
        <th> File type </th>
        <th> File size </th>
    </tr>


    <?php
    $dir = "./";

    $fh  = opendir($dir);

    //itearate directory
    while ($file = readdir($fh)) {
        echo "<tr>";
        echo "<td>" . $file . "</td>";
        echo "<td>" . filetype($dir . $file) . "</td>";
        echo "<td>" . filesize($dir . $file) . "</td>";
        echo "</tr>";
    }

    closedir($fh);
    ?>

</table>

</body>

</html>