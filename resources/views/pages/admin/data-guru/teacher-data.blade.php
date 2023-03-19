<!DOCTYPE html>
<html>

<head>
    <title>Data Guru SMK YAPPIKA SERPONG</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    {{-- <img src="{{ asset('template/frontend/assets/images/logo-smk-yappika-serpong.png') }}"
        alt="logo-smk-yappika-serpong" /> --}}
    <center>
        <h4 style="margin-bottom: 30px">DATA GURU SMK YAPPIKA SERPONG</h4>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Institusi</th>
                <th>Program Studi</th>
                <th>Tahun Lulus</th>
                <th>Mata Pelajaran</th>
                <th>Kelas Ajar</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($teacher as $p)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $p->fullname }}</td>
                    <td>{{ $p->email }}</td>
                    <td>{{ $p->institution }}</td>
                    <td>{{ $p->study_program }}</td>
                    <td>{{ $p->graduation_year }}</td>
                    <td>{{ $p->subjects }}</td>
                    <td>{{ $p->teaching_class }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
