
<h2><?= $list_informasi['kategori'];?></h2>


<div id="accordion" style="background-color: #FDFFD7;">


<!-- <?php 
//foreach ($list_informasi as $row) {
	$row->judul_informasi;
?> -->

<?php 
	$i = 1;
foreach ($list_informasi as $list) {
        if(isset($list['sub_informasi'])){
    
?>
	<div class="card-header" id="heading<?= $i;?>">
		<h5 class="mb-0">
			<button class="btn list-container" data-toggle="collapse" data-target="#collapse<?= $i;?>" aria-expanded="true" aria-controls="collapse<?= $i;?>">
				<?= $list['judul_informasi'];?>
			</button>
		</h5>
	</div>


	<div id="collapse<?= $i;?>" class="collapse" aria-labelledby="heading<?= $i;?>" data-parent="#accordion" style="border: 1px solid #0057A8;">
		<div class="card-body">
			<table class="table table-sm">
				<thead>
					<th width="5%">No</th>
					<th width="75%">Jenis</th>
					<th width="20%" class="text-center">Informasi / Dokumen</th>
				</thead>
				<tbody>
					<?php 
					$a=1;
					foreach ($list['sub_informasi'] as $subList) {
					?>
						<tr>
							<td><?= $a++; ?></td>
							<td><?= $subList['judul_informasi'] ?></td>
							<td class="text-center"><a href="<?= $subList['informasi_detail'] ?>" class="btn btn-info btn-sm"><?= $subList['jenis_detail'] ?></a></td>
						</tr>
					<?php 
					}

					?>
					
				</tbody>
			</table>
			<ul>
			</ul>
		</div>
	</div>
<?php 
					$i++;
}
}
?>

</div>

