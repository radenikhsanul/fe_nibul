<?php 
include 'header.php';
?>

<?php include("config.php"); ?>



        <div id="page-wrapper" >
            <div id="page-inner">
                 <div class="row">
                    <div class="col-md-6">
                     <h2>Data Kategori</h2>   
                     <a class="btn btn-info" role="button" data-toggle="modal" data-target="#myModal">Tambah</a>
                    </div>
                    <div class="col-md-6">
                    <form action="kategori.php" method="get">
	                    <div class="input-group col-md-5 col-md-offset-7">
                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
                            <input type="text" class="form-control" placeholder="Cari" aria-describedby="basic-addon1" name="cari"
                            value="<?php if(isset($_GET['cari'])) { echo $_GET['cari']; } ?>">	
	                    </div>
                    </form>
                    
                    </div>
                </div>             
                 <!-- /. ROW  -->
                  <hr />

                  <?php if(isset($_GET['status'])): ?>
                    <p>
                        <?php
                            if($_GET['status'] == 'sukses'){
                                echo "Data sukses ditambahkan";
                            } else {
                                echo "Data gagal ditambahkan";
                            }
                        ?>
                    </p>
                <?php endif; ?>
                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            if(isset($_GET['cari'])){
                                                $cari = $_GET['cari'];
                                                 $sql = "SELECT * FROM kategori where nama like '%".$cari."%'";
                                            }else{
                                                $sql = "SELECT * FROM kategori order by id_kategori ASC";
                                            }
                                            $query = mysqli_query($db, $sql);
                                            while($kategori = mysqli_fetch_array($query)){
                                                ?>
                                                <tr class='odd gradeX'>
                                                    <td><?php echo $kategori['id_kategori']; ?></td>
                                                    <td><?php echo $kategori['nama']; ?></td>

                                                    <td>
                                                         <a class='btn btn-success' href='#' role='button'><i style='font-size:16px' class='fa fa-edit '></i> Edit</a> 
                                                         <a class='btn btn-danger' href='hapusKategori.php?id=".$kategori['id_kategori']."' role='button'><i style='font-size:16px' class='fa fa-times '></i> Delete</a>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Kategori</h4>
			</div>
			<div class="modal-body">
				<form action="addKategori.php" method="post">
					<div class="form-group">
						<label>Nama Kategori</label>
						<input name="nama" type="text" class="form-control" placeholder="Nama Kategori">
					</div>													

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
				</div>
			</form>
		</div>
	</div>
</div>


                   
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
<?php 


include 'footer.php';
?>
