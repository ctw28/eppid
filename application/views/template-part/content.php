
<!-- 	<h2><?= $list_informasi['kategori'];?></h2>
 -->
	<div id="accordion" style="background-color: #FDFFD7;">

	<?php 
		$i = 1;
		foreach ($list_informasi as $list) {
	?>
		<div class="card-header" id="heading<?= $i;?>">
			<h5 class="mb-0">
				<button class="btn list-container" data-toggle="collapse" data-target="#collapse<?= $i;?>" aria-expanded="true" aria-controls="collapse<?= $i;?>">
					<?= $i?>. 
					<?= $list['judul_informasi'];?>
				</button>
			</h5>
		</div>

		<div id="collapse<?= $i;?>" class="collapse" aria-labelledby="heading<?= $i;?>" data-parent="#accordion" style="border: 1px solid #0057A8;">
			<div class="card-body">
<?php
						if(isset($list['sub_informasi'])){					
?>
				<table class="table table-sm">
					<thead>
						<th width="5%">No</th>
						<th width="80%">Jenis</th>
					</thead>
					<tbody>
						<?php 
						$a=1;
							foreach ($list['sub_informasi'] as $subList) {
							?>
								<tr>
									<td><?= $a++; ?></td>
									<td><?= $subList['judul_informasi'] ?>
									<?php 
									foreach ($subList['detail'] as $detail) {
									?>
									<a style="margin: 0 20px" href="<?= $detail['informasi_detail'] ?>"><?= $detail['jenis_detail'] ?> </a>
									<?php 
									}
									?>
									</td>
								</tr>
							<?php 
							}
						}
						else {
							echo "No Data";
						}
						?>
						
					</tbody>
				</table>
			</div>
		</div>
	<?php 
			$i++;
		
	}
	?>

	</div>

