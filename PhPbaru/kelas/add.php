<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Data Kelas</div>
                <div class ="col-4">
                    <a href="?m=kelas&sm=add" class="btn btn-primary float-end">kembali</a>
                </div>
            </div>   
            
            <div class ="card-body">
                <form action="?m=kelas&sm=save" method="post">
                    <div class="mb-2 row">
                       <input type="text" class="form-control" name="garde" placeholder="Nama Kelas" required autofocus>
                    </div>
                    <div class="mb-2 row">
                       <input type="text" class="form-control" name="room" placeholder="Ruang Kelas">
                    </div>
                    <div class="mb-2 row">
                       <input type="text" class="form-control" name="capatity" placeholder="kapsitas ruangkelas">
                    </div>
                    <div class="mb-2 row">
                       <input type="number" class="form-control" name="fill" placeholder="Jumlah siswa (Terisi)">
                    </div>
                    <div class="mb-2 row">
                       <input type="reset" class="btn btn-warning">
                       <input type="submit" value="simpan" class="btn btn-primary" name="save">
                    </div>

                        
                </div>
            </div>
        </div>
    </div>
</div>