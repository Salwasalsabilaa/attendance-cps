<!DOCTYPE html>
<html>
    

<head>
    <title>Laporan Kehadiran Peserta kerja Praktik</title>
    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    
    <center>
        <h4 class="center-text">Laporan Kehadiran Peserta Kerja Praktik</h4>
        <h5 class="center-text">Cirebon Power Services</h5>
    </center>
    <br>


    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Attandance Date</th>
                <th>Attendance Time</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($attendances as $attendance)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $attendance->user->name }}</td>
                    <td>{{ $attendance->user->email }}</td>
                    <td>{{ $attendance->created_at->format('D, d F Y') }}</td>
                    <td>{{ $attendance->created_at->format('H : i : s') }}</td>
                    <td>{{ $attendance->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>