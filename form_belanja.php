<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  table {
          width: 20%;
          border-collapse: collapse;
          margin: 10px;
        }
    
        th, td {
          border: 2px solid #ddd;
          padding: 10px;
          text-align: center;
          background-color: beige;
        }
    
        th {
          background-color: rgb(186, 122, 246);}
</style>

<form method="POST" action="hasil_belanja.php">
  <br>
  <h3>Belanja Online</h3>
  <div class="form-group row">
    <label for="pembeli" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="pembeli" name="pembeli" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="barang" id="barang_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="barang_0" class="custom-control-label">Televisi</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="barang" id="barang_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="barang_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="barang" id="barang_2" type="radio" class="custom-control-input" value="mesin_cuci"> 
        <label for="barang_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah Barang" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<table border="1">
            <thead>
                <tr>
                    <th colspan="2">Daftar Harga</th>
                    <!-- <th>2</th> -->
                </tr>
            </thead>
           <tbody>
                <tr>
		    <td><label for="name">Televisi :</label></td>
        <td><label for="name">Rp.4.200.000</label></td>  	                                    
                </tr>
                <tr>
	      <td><label for="address">Kulkas:</label></td>
		    <td><label for="address">Rp.3.100.000</label></td>         
                </tr>
                <tr>
		    <td><label for="telephone">Mesin Cuci:</label></td> 
        <td><label for="telephone">Rp.3.800.000</label></td> 		
           </tbody>
        </table>

       