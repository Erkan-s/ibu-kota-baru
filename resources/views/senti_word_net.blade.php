@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Algoritma Lexicon Based</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kata</th>
                            <th>Nilai</th>
                            <th>Label</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $ctr = 0 ?>                                        
                    <?php foreach ($data[0] as $row) :?>
                        <tr>
                            <td><?= $row["text"]?></td>
                            <td><?= $row["nilai"]?></td>
                            <td><?= $row["label"]?></td>
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