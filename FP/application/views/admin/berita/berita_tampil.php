<!-- <form method="post" action="<?php echo base_url().'index.php/c_admin/berita_hapus'?>"> -->
</head>
<body>
<div class="table-responsive">
	<div class="col-md-8">



	<table class="table">
		<thead>
			<!-- <th></th> -->
			<th>id_berita</th>
			<th>penulis</th>
			<th>judul</th>
			<th>tanggal</th>
			<th>gambar</th>
			<th>action</th>
		</thead>
		<tbody>
		<?php
		foreach ($berita as $berita_item) : ?>
			<tr>
			<!-- <td><input type="checkbox" name="barang[]" value="<?php echo $berita_item['kode_barang']?>"></td> -->
				<td><?php echo $berita_item['id_berita']; ?></td>
				<td><?php echo $berita_item['penulis']; ?></td>
				<td><?php echo $berita_item['judul']; ?></td>
				<td>
					<?php $tanggal = DateTime::createFromFormat('Y-m-d', $berita_item['tanggal'])->format('d-M-Y');
								echo $tanggal; ?>
				</td>
				<td><img src="<?php echo base_url($berita_item['gambar']); ?>" height="42" width = "42"/></td>
				<!-- <td><img src="<?php echo base_url($berita_item['image']); ?>" height="42" width="42" /> </td> -->
				<td>
					<a href="<?php echo site_url()."admin/berita_update/".$berita_item['id_berita']; ?>"><button>Edit</button></a> ||
					<a href="<?php echo site_url()."admin/delete/".$berita_item['id_berita']; ?>"><button>Delete</button></a>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
 </div>
</div>
<!-- <input type="submit" value="Delete"> -->
<!-- </form> -->
<a href="<?php echo site_url()."admin/create" ?>">insert new</a>
