<?php 
include 'header.php';
?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-8">
                     <h2>Data Produk</h2>   
                     <a class="btn btn-primary" href="#" role="button">Tambah</a>
                    </div>
                    <div class="col-md-4">
                    <input class="form-control float-right" 
                    type="search" placeholder="Search" aria-label="Search">
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div>
                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Produk</th>
                                            <th>Kategori</th>
                                            <th>Toko</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>Dress</td>
                                            <td>Fashion</td>
                                            <td>Putra Jaya</td>
                                            <td>500000</td>
                                            <td>10</td>
                                            <td>Baju</td>
                                            <td>
                                              <a class="btn btn-success" href="#" role="button"><i style='font-size:16px' class="fa fa-edit fa-3x"></i> Edit</a>
                                              <a class="btn btn-danger" href="#" role="button"><i style='font-size:16px' class="fa fa-times fa-3x"></i> Delete</a>
                                            </td>
                                        </tr>
                                     
                                        
                                    </tbody>
                                </table>
                            </div>
                </div>
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
<?php 
include 'footer.php';
?>
