<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            
                <?php foreach($data['mhs'] as $mhs):?>
                    <ul class="list-group py-2">

                        <li class="list-group-item d-flex justify-content-between align-items-center shadow"><?= $mhs['nama'];?> <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id'];?>" class="btn btn-primary ">detail</a></li>
                    </ul>
                <?php endforeach;?>
            
        </div>
    </div>
</div>