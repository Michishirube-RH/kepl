<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h2>Nilai Mahasiswa</h2>
        {{-- @if (($total_nilai>=0) and ($total_nilai <56))
            <div class="alert alert-danger"> selamat anda tidak lulus</div>
        @elseif (($total_nilai>=55) and ($total_nilai <100))
            <div class="alert alert-success"> selamat anda  lulus</div>
        @endif
        <table class="table table-bordered table-striped">
            <tr class="text-md-center">
                <th>Nama</th>
                <th>NIM</th>
                <th>Total Nilai</th>
            </tr>
            <tr>
                <td>{{ $nama }}</td>
                <td>{{ $nim }}</td>
                <td>{{ $total_nilai }}</td>
            </tr>
        </table> --}}
        @switch($total_nilai)
            @case(0)
            <div class="alert alert-danger">Sangat Jelek</div>
            @break
            @case(70)
            <div class="alert alert-primary">Lumayan Jelek</div>
            @break
            @case(100)
            <div class="alert alert-success">Sangat Bagus</div>
            @break
            @default
            <div class="alert alert-warning"> Nilai tidak valid</div>

        @endswitch
        <table class="table table-bordered table-striped">
            <tr class="text-md-center">
                <th>Nama</th>
                <th>NIM</th>
                <th>Total Nilai</th>
            </tr>
            <tr>
                <td>{{ $nama }}</td>
                <td>{{ $nim }}</td>
                <td>{{ $total_nilai }}</td>
            </tr>
        </table>

        </div>
    </div>
</html>
        
        
        
        

        



