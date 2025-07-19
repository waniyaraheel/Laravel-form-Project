<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .btncustom {
            display: block;
            margin: 20px auto 40px auto;
            width: fit-content;
            padding: 10px 25px;
            font-weight: 500;
        }

        .table-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .table thead {
            background-color: #0d6efd;
            color: white;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        h1 {
            font-weight: 600;
            color: #333;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4">📋 Country & City Data</h1>

        <a href="{{ route('form') }}" class="btn btn-primary btncustom">+ Add New Data</a>

        
        <div class="table-container">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Country</th>
                        <th scope="col">City</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($countries as $country)
                        <tr>
                            <th scope="row">{{ $country->id }}</th>
                            <td>{{ $country->title }}</td>
                            <td>{{ $country->city }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center text-danger">No data available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
