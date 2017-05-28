</head>
<body>
<div class="table-responsive">
	<div class="col-md-8">



	<table class="table">
		<thead>
			<!-- <th></th> -->
			<th>id</th>
			<th>title_caption</th>
			<th>isi_caption</th>
			<th>gambar</th>
			<th>action</th>
		</thead>
		<tbody>
		<?php
		foreach ($gambar as $item) : ?>
			<tr>
			<!-- <td><input type="checkbox" name="barang[]" value="<?php echo $item['kode_barang']?>"></td> -->
				<td><?php echo $item['id']; ?></td>
				<td><?php echo $item['title_caption']; ?></td>
				<td><?php echo $item['isi_caption']; ?></td>
				<td><img src="<?php echo base_url($item['gambar']); ?>" height="42" width = "42"/></td>
				<!-- <td><img src="<?php echo base_url($item['image']); ?>" height="42" width="42" /> </td> -->
				<td>
					<a href="<?php echo base_url()."admin/home_update/".$item['id']; ?>"><button>Edit</button></a> ||
					<a href="<?php echo base_url()."admin/home_delete/".$item['id']; ?>"><button>Remove</button></a>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
 </div>
</div>
<!-- <input type="submit" value="Delete"> -->
<!-- </form> -->
<!-- <a href="<?php echo site_url()."/C_admin/create" ?>">insert new</a> -->
<!-- <a href="<?php echo site_url()."/C_admin/update" ?>">update</a> -->
