
<h2><?php
// echo $list_informasi->nama_kategori;
foreach ($list_informasi as $row) {
	echo $row->nama_kategori;
}
?></h2>


<div id="accordion" style="background-color: #FDFFD7;">


<!-- <?php 
//foreach ($list_informasi as $row) {
	$row->judul_informasi;
?> -->

	<div class="card-header" id="headingOne">
		<h5 class="mb-0">
			<button class="btn list-container" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				1. Informasi tentang Profil BWS Sulawesi IV Kendari
			</button>
		</h5>
	</div>

	<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="border: 1px solid #0057A8;">
		<div class="card-body">
			<table class="table table-sm">
				<thead>
					<th width="5%">No</th>
					<th width="75%">Jenis</th>
					<th width="20%" class="text-center">Informasi / Dokumen</th>
				</thead>
				<tbody>
					<?php 
					$i=1;
					foreach ($list_informasi as $row) {
					?>
						<tr>
							<td><?= $i++; ?></td>
							<td><?= $row->judul_informasi ?></td>
							<td class="text-center"><a href="<?= $row->informasi_detail ?>" class="btn btn-info btn-sm"><?= $row->jenis_detail ?></a></td>
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
<!-- <?php 
	// }
?> -->

	<div class="card-header" id="headingTwo">
		<h5 class="mb-0">
			<button class="btn list-container collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				2. Ringkasan informasi tentang program dan/atau kegiatan yang sedang dijalankan dalam lingkup BWS Sulawesi IV Kendari
			</button>
		</h5>
	</div>
	<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
		<div class="card-body">
			Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		</div>
	</div>
	<div class="card-header" id="headingThree">
		<h5 class="mb-0">
			<button class="btn list-container collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				3. ringkasan  informasi  tentang  kinerja  dalam  lingkup  BWS Sulawesi IV Kendari
			</button>
		</h5>
	</div>
	<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
		<div class="card-body">
			Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		</div>
	</div>
</div>
</div>

