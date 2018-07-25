      <div class="container">
        <div class="col-md-12">
			<h2 style="text-align:center; margin-buttom:10px"> Data Karyawan Opsigo </h2>
			<table id="table_id" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th> Id </th>
						<th> Nama </th>
						<th> Email </th>
						<th> Peran </th>
						<th> Status </th>
						<th style="width: 125px;"> Action</p> </th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$Id = 1;
					foreach ($data_karyawan as $karyawan){
						?>
						<tr>
							<td><?php echo $Id++;?></td>
							<td><?php echo $karyawan->Nama;?></td>
							<td><?php echo $karyawan->Email;?></td>
							<td><?php echo $karyawan->Peran;?></td>
							<td><?php echo $karyawan->Status;?></td>
							<td style="text-align:center;">
								<button class="btn btn-sm btn-primary" onclick="edit_karyawan(<?php echo $karyawan->Id;?>)"><i class="
								glyphicon glyphicon-pencil"></i></button>
								<button class="btn btn-sm btn-danger" onclick="delete_karyawan(<?php echo $karyawan->Id;?>)"><i class="
								glyphicon glyphicon-pencil"></i></button>
							</td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
        </div>
      </div>