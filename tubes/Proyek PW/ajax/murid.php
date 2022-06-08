
<?php 

require '../functions/functionss.php';
$keyword = $_GET["keyword"];

$query = "SELECT * FROM murid
            WHERE nama LIKE '%$keyword%'
            OR id_murid LIKE '%$keyword%'
            OR email LIKE '%$keyword%'
            OR sekolah LIKE '%$keyword%'
            OR alamat LIKE '%$keyword%'
";
$murid = query($query);







?>

            <table class="table table-hover table-borderless tt">
              <thead class="table-c rounded-top ">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">ID Murid</th>
                  <th scope="col">Foto Profil</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat Domisili</th>
                  <th scope="col">Email</th>
                  <th scope="col">Kelas</th>
                  <th scope="col">Asal Sekolah</th>
                  <th scope="col">Umur</th>
                  
                </tr>
              </thead>
              <tbody >
              <?php $i = 1; foreach($murid as $mrd) : ?>
                <tr>
                  <a href="">
                  <th scope="row" class="align-middle text-center"><?= $i++; ?></th>
                  <td class="align-middle text-center"><?= $mrd["id_murid"]; ?></td>
                  <td class="align-middle ">
                    <a href="ubah.php?id_murid=<?= $mrd["id_murid"] ?>">
                      <img src="img/<?= $mrd["foto_profil"]; ?>" height="50" class="rounded-1">

                    </a>
                    
                  </td>
                  <td class="align-middle"><?= $mrd["nama"]; ?></td>
                  <td class="align-middle"><?= $mrd["alamat"]; ?></td>
                  <td class="align-middle"><?= $mrd["email"]; ?></td>
                  <td class="align-middle"><?= $mrd["kelas"]; ?></td>
                  <td class="align-middle"><?= $mrd["sekolah"]; ?></td>
                  <td class="align-middle"><?= $mrd["umur"]; ?></td>

                  </a>
                  
                  
                </tr>
                <?php endforeach; ?>
                
              </tbody>

                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                  <a type="button" class="btn btn-primary" href="tambah.php">+ Data</a>
                  <div class="btn-group tombol-i" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Urut Semua Berdasarkan
                    </button>
                    <form method="get">
                      <ul class="dropdown-menu aksi" aria-labelledby="btnGroupDrop1">
                        
                        
                        <button class="dropdown-item aksi" type="submit" name="A-Z">Nama A-Z</button>
                        <button class="dropdown-item aksi" type="submit" name="Z-A">Nama Z-A</button>
                        <button class="dropdown-item aksi" type="submit" name="1-9">Umur 1-9</button>
                        <button class="dropdown-item aksi" type="submit" name="9-1">Umur 9-1</button>
                        
                      </ul>
                    </form>

                    <button id="btnGroupDrop2" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Kelas 7
                    </button>
                    <form method="get">
                      <ul class="dropdown-menu aksi" aria-labelledby="btnGroupDrop2">
                        
                        
                        <button class="dropdown-item aksi" type="submit" name="7A-Z">Nama A-Z</button>
                        <button class="dropdown-item aksi" type="submit" name="7Z-A">Nama Z-A</button>
                        <button class="dropdown-item aksi" type="submit" name="71-9">Umur 1-9</button>
                        <button class="dropdown-item aksi" type="submit" name="79-1">Umur 9-1</button>
                        
                      </ul>
                    </form>

                    <button id="btnGroupDrop3" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Kelas 8
                    </button>
                    <form method="get">
                      <ul class="dropdown-menu aksi" aria-labelledby="btnGroupDrop3">
                        
                        
                        <button class="dropdown-item aksi" type="submit" name="8A-Z">Nama A-Z</button>
                        <button class="dropdown-item aksi" type="submit" name="8Z-A">Nama Z-A</button>
                        <button class="dropdown-item aksi" type="submit" name="81-9">Umur 1-9</button>
                        <button class="dropdown-item aksi" type="submit" name="89-1">Umur 9-1</button>
                        
                      </ul>
                    </form>

                    <button id="btnGroupDrop3" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Kelas 9
                    </button>
                    <form method="get">
                      <ul class="dropdown-menu aksi" aria-labelledby="btnGroupDrop3">
                        
                        
                        <button class="dropdown-item aksi" type="submit" name="9A-Z">Nama A-Z</button>
                        <button class="dropdown-item aksi" type="submit" name="9Z-A">Nama Z-A</button>
                        <button class="dropdown-item aksi" type="submit" name="91-9">Umur 1-9</button>
                        <button class="dropdown-item aksi" type="submit" name="99-1">Umur 9-1</button>
                        
                      </ul>
                    </form>
                  </div>

                  
                  
                  
                  
                </div>
                
              
              <br>
            </table>