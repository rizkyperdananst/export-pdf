<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Cetak Data User</title>
</head>
<body>
     {{-- <a href="{{ route('printpdf') }}" target="_blank">Cetak Data User</a> --}}
     <table border  ="1px solid black" cellpadding="10" cellspacing="0">
          <thead>
               <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Password</th>
               </tr>
          </thead>
          <tbody>
               @foreach ($users as $u)
               <tr>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->password }}</td>
              </tr>
               @endforeach
          </tbody>
     </table>
</body>
</html>