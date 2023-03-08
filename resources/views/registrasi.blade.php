{{-- @dd($mahasiswas); --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nama </th>
            <th scope="col">NRP</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Kelamin</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->nrp }}</td>
                    <td>{{ $mahasiswa->jurusan }}</td>
                    <td>{{ $mahasiswa->jenis_kelamin }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>