<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Data Barang</h1>

        <!-- Bagian Search -->
        <nav class="navbar navbar-light mb-3">
            <form class="form-inline" action="{{ url('/barang/search') }}" method="GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>

        <table class="table table-bordered table-striped mx-auto">
            <thead class="thead-dark">
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Foto</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($barangs as $barang)
                <tr>
                    <td>{{ $barang->nama }}</td>
                    <td>{{ $barang->harga }}</td>
                    <td>
                        @if ($barang->foto)
                            <img src="data:image/png;base64,{{ base64_encode($barang->foto) }}" alt="Foto Barang" style="max-width: 100px;">
                        @else
                            No Photo
                        @endif
                    </td>
                    <td>{{ $barang->deskripsi }}</td>
                    <td align="center">
                        <a href="{{ route('barang.detail', $barang->id) }}" class="btn btn-warning">Detail</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $barangs->links() }}
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<style>
</style>
