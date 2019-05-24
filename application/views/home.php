  <!-- Page Content -->
  <div class="container">

<?php  
 $sumber = 'http://papaside.com/data.php';
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);

 //echo $data[1]["nama_lokasi"];

 echo "<br/>";
 echo "<h2 align='center'>Prakiraan Cuaca di ".count($data)." Tempat Pada Hari ini</h2>";
 echo "<br/>";
?>
 <table class="table table-thead-dark">
  <tr>
   <th>Kota</th>
   <th>Siang</th>
   <th>Malam</th>
   <th>Dini Hari</th>
   <th>Suhu</th>
   <th>Kelembapan</th>
  </tr>
  <?php   
   for($a=0; $a < count($data); $a++)
   {
    print "<tr>";
    // penomeran otomatis
    // menayangkan 
    print "<td>".$data[$a]['Kota']."</td>";
    print "<td>".$data[$a]['siang']."</td>";
    print "<td>".$data[$a]['malam']."</td>";
    print "<td>".$data[$a]['dini_hari']."</td>";
    print "<td>".$data[$a]['suhu']."</td>";
    print "<td>".$data[$a]['Kelembapan']."</td>";
    print "</tr>";
   }
  ?>
 </table>
</body>
</html>

</div>
  <!-- /.container -->