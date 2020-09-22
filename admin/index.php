<?php 
include 'header.php';
?>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Profil Admin</h2>   
                        <h5>Welcome Ade Syahreza , Love to see you back. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div>
                    <form class="form-horizontal" action="/action_page.php">

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="username">Username:</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="username" placeholder="Masukkan Username">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Nama:</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="name" placeholder="Masukkan Nama">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Email:</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="tlp">Nomor Telepon:</label>
                            <div class="col-sm-10">
                              <input type="tel" class="form-control" id="tlp" placeholder="Masukkan Nomor Telepon" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{3}">
                            </div>
                        </div>

                        <div class="form-group">
                                            <label class="control-label col-sm-2">Jenis Kelamin:</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked />Laki - Laki
                                                </label>
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"/>Perempuan
                                                </label>
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"/>Lainnya
                                                </label>
                                            </div>
                                        </div>

                        <div class="form-group">
                                            <label class="control-label col-sm-2">Tanggal Lahir:</label>
                                              <div class="col-sm-10">
                              <input type="date" class="form-control" id="date">
                            </div>
                                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-2">
                              <div class="checkbox">
                                <label><input type="checkbox"> Ingat Saya</label>
                              </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-2">
                              <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
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