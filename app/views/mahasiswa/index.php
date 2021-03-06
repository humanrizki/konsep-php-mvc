<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash();?>
            
        </div>
    </div>
    <div class="row">
        <div class="col-6 ">
            
            <div class="w-100 clearfix">
            <h3 class="float-start">Daftar Mahasiswa</h3>
            <button type="button" class="btn btn-success float-end tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah data
            </button>
            </div>
            
            <?php $i = 1;?>
                <?php foreach($data['mhs'] as $mhs):?>
                    <ul class="list-group py-2 d-block">

                        <li class="list-group-item d-flex justify-content-between align-items-center shadow"><?= $mhs['nama'];?> 
                        <div class="isi"><a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id'];?>" class="btn btn-primary ">detail</a>
                        <a href="<?= BASEURL;?>/mahasiswa/ubah/<?= $mhs['id'];?>" class="btn btn-warning tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id'];?>">Rubah</a>
                        <a href="<?= BASEURL;?>/mahasiswa/<?= hash("sha256","hapus".uniqid($i++));?>/<?= $mhs['id'];?>" class="btn btn-danger " style="cursor: pointer;"  id="Hapus" data-id="<?= $mhs['id'];?>">Hapus</a></div></li>
                        
                    </ul>
                <?php endforeach;?>
            
        </div>
    </div>
</div>
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>  
            <div class="modal-body">
                <form action="<?= BASEURL;?>/mahasiswa/tambah" method="POST">
                <input type="hidden" name="id" id="id">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="example name" name="nama">
                    
                </div>
                <div class="mb-3">
                    <label for="nis" class="form-label">Nis</label>
                    <input type="number" class="form-control" id="nis" placeholder="example name" name="nis">
                    
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" class="form-control" id="kelas" placeholder="example name" name="kelas">
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary" >Tambahkan</button>
            </div>
                </form>
        </div>
    </div>
</div>