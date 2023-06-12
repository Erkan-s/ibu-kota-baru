@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Penyesuaian Data Twitter</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kata</th>
                            <th>Alih Bahasa</th>
                            <th>Tokenization</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $ctr = 0 ?>                                        
                    <?php foreach ($data[0] as $row) :?>
                        <?php 
                            $token = implode(" | ", $row["tokenization"]);
                        ?>
                        <tr>
                            <td><?= $row["kata"]    ?></td>
                            <td><?= $row["alih_bahasa"] ?></td>
                            <td><?= $token ?></td>
                        </tr>
                        <?php $ctr++ ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection