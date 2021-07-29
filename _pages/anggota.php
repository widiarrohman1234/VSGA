<?php
include"_lib\conn.php";

$query="select * from anggota";
$statement = $conn->prepare($query);
$statement->execute();
$data = $statement->fetchAll();

?>

<div class="card card-default">
    <div class="card-header">
        <a href="?page=anggota/tambah" class="btn btn-primary btn-sm float-right"> <i class="fa fa-plus"></i> Tambah</a>
        <div class="card-title">
        Tabel anggota
        </div>
    </div>
    <div class="card-body">
        <table class="table table-datatable table-bordered table-hover table-sm">
            <thead>
                <th width="5%">NO</th>
                <th width="10%">Aksi</th>
                <th>Nama</th>
                <th>Email</th>
            </thead>
            <tbody>
                <?php foreach($data as $key => $anggota):?>
                <tr>
                    <td><?php echo $key+1?></td>
                    <td>
                        <div class="btn btn-group">
                            <button type="button" class="btn btn-dark " data-toggle="modal" data-target="#info">
                                <i class="fa fa-info"></i>
                            </button>
                            <a href="?id=<?php echo $anggota['id']?>&page=anggota/ubah" class="btn btn-warning " > <i class="fa fa-edit"></i></a>
                            <a href="_lib/anggota_destroy.php?id=<?php echo $anggota['id']?>" class="btn btn-danger " onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')"> <i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                    <td><?php echo $anggota['nama']?></td>
                    <td><?php echo $anggota['email']?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
</div>


<!-- Modal Info -->
<div class="modal fade" id="info" tabindex="-1" role="dialog" aria-labelledby="infoTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Info Anggota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
        <label class="col-sm-4 col-form-label">Nama</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" >
            </div>
        </div>
        <br>
        <div class="form-group row">
        <label class="col-sm-4 col-form-label">Alamat</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" >
            </div>
        </div>
        <br>
        <div class="form-group row">
        <label class="col-sm-4 col-form-label">No Handphone</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" >
            </div>
        </div>
        <br>
        <div class="form-group row">
        <label class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" >
            </div>
        </div>
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
