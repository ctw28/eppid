<div class="card border-light bg-primary mb-3">
  	<div class="card-header"><?= $kategori;?></div>
	<div class="list-group">
	<?php 
		$i = 1;
		foreach ($list_informasi as $list) {
	?>

		<div class="list-group-item list-group-item-action flex-column align-items-start">
		    <div class="d-flex w-100 justify-content-between">
		      	<h5 class="mb-2 h5 list-item-primary-text mt-2"><?= $i?>. <?= $list['judul_informasi'];?>
			<!-- </div> -->	
				<?php
				if(isset($list['info'])){
					foreach ($list['info'] as $info) {
						$icon = 'fa-download';
						$label = 'badge-warning';
						if($info['jenis_detail']=='url'){
							$icon = 'fa-eye';
							$label = 'badge-success';
						}
						?>
							<a class="badge <?= $label ?>" href="<?= $info['informasi_detail'] ?>"><i class="fa <?= $icon ?>"></i> <?= $info['jenis_detail']?></a>
						<?php
					}
				}
			echo "</h5></div>";
		if(isset($list['sub_informasi'])){					
		?>
			<table class="table table-sm sub-info-table">
				<thead>
					<tr>
					<th class="text-center">No</th>
					<th style="width: 80%">Jenis</th>
					<th class="text-center">Informasi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$a=1;
						foreach ($list['sub_informasi'] as $subList) {
						?>
							<tr>
								<td class="text-center"><?= $a++; ?></td>
								<td><?= $subList['judul_informasi'] ?></td>
								<td class="text-center">
								<?php 
								foreach ($subList['detail'] as $detail) {

									$label = 'badge-warning';
									if($detail['jenis_detail']=='url')
										$label = 'badge-success';

								?>
									<a class="badge <?= $label ?>" href="<?= $detail['informasi_detail'] ?>"><?= $detail['jenis_detail'] ?></a>
								<?php 
								}
								?>
								</td>
							</tr>
						<?php 
						}
						?>
				</tbody>
			</table>
			<?php
			}
			?>

		</div>

	<?php
		$i++;
		}			
	?>

	</div>
</div>


