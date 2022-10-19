<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>

<?php
$Navn = 'Abdul';
$Alder = 22;
?>

<table style="width:50%;">

<tr>
    <th> Navn </th>
    <th> Alder </th>
</tr>
<td> <?php echo $Navn ?> </td>
<td> <?php echo $Alder ?> </td>
</table> 

<br>

<table>
    <ul>
        <li><?php echo $Navn;?></li>
        <li><?php echo $Alder;?></li>
    </ul>

    <ol>
        <li><?php echo $Navn;?></li>
        <li><?php echo $Alder;?></li>
    </ol>

<p>
My name is <?php echo $Navn ?> and i am <?php echo $Alder ?> years old
</p>

</table>
</html>


