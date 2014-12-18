<table id="mytable" class="table">
  <tr>
  	<th>no</th>
  	<th>nama</th>
  	<th>harga</th>
  </tr>
<?php 
	$sql = "SELECT * FROM `tes1`";
	$query = mysql_query($sql);
	$no = 1;
	while($d = mysql_fetch_array($query)){
		echo "<tr>
				<td>$no</td>
				<td>$d[nama]</td>
				<td>$d[harga]</td>
			  </tr>";
		$no++;
	}
?>  
  <tr>
    <td colspan="2">Total</td>
    <td>Rp <span class="total"></span></td>
  </tr>
</table>
<script>
	$(document).ready(function(){
		
		var total = 0;
		$("#mytable tr").not(":last").each(function() {
		  $this = $(this);
		  var value = parseInt($this.find('td:last').html(),10);
		  total = total+value;
		});
		console.log("Totalnya : "+total);
		$(".total").html(""+total);
	});
</script>