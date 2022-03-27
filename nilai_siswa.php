<DOCTYPE html>
    <head>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="text" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="text1" name="text1" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <select id="select" name="select" class="custom-select">
        <option value="rabbit">80</option>
        <option value="duck">70</option>
        <option value="fish">60</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="select1" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="select1" name="select1" class="custom-select">
        <option value="rabbit">DDP</option>
        <option value="duck">Basis Data</option>
        <option value="fish">Pemrograman Web</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>


// cetak nilai uts

$proses = $_POST['proses'];
echo $proses;
if(!empty($proses)){
    $_nama = $_POST['nama'];
    $_nilai_uts = $_POST['nilai_uts'];
    $_nilai_uas = $_POST['nilai_uas'];
    $_matakuliah = $_POST['matkul'];
    $_ipk= $_POST['ipk'];

    if($_berat > 70){
        echo 'Berat Belum Ideal';
    }else{
        echo 'Berat Ideal';
    }