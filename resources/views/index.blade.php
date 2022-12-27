<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AgenX-Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <div class="container-sm mt-5 mb-5 bg-primary-subtle border border-primary-subtle rounded-3" style="height: 500px">
        <div class="row">
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                  <a class="navbar-brand">Agen-X Ticketing</a>
                  <a href="{{ route('postlogout') }}">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Log Out
                  </button></a>



                </div>
              </nav>

            <div class="container mt-3">
                <div class="inline">
                    <form class="form-inline" method="GET" action="/caritiket">
                        <input style="width: 40%" type="seacrh" name="search" class="form-control float-right" placeholder="Cari dengan Nama"> <button type="submit" class="btn btn-info">
                            Cari
                        </button>

                        </form>
                </div>



                <div class="card-body mx-auto">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nomor tiket</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nomor Telfon</th>
                            <th scope="col">Status</th>
                            <th scope="col" width="200px">Action</th>
                          </tr>
                        </thead>
                        @foreach ($tes as $no => $data)
                        <tbody>
                            <tr>
                            <td>{{ $tes->firstItem()+$no }}</td>
                            <td>{{ $data->id_tiket }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->no_telfon }}</td>
                            <td>
                                @if ($data->status==1)
                                    Sudah Cek In
                                @else
                                <a href="{{ route('tiket.check',$data->id_tiket) }}" class="btn btn-success btn-rounded waves-effect remove-user">
                                    Click Her to Check in
                                </button>
                                @endif
                                </td>



                            <td>
                                <a href="{{ route('hapus',$data->id_tiket) }}" class="btn btn-outline-danger btn-rounded waves-effect remove-user">
                                    Delete
                                </button>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>

                      </table>

                  </div>

            </div>
            {{ $tes->links() }}
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>
