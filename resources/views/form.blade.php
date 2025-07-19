<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Form</title>

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <style>
        body {
            background-color: #f5f7fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .form-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-top: 80px;
        }

        .form-title {
            font-weight: bold;
            margin-bottom: 30px;
        }

        .btn-submit {
            width: 100%;
            font-weight: bold;
        }

        .show-data-btn {
            position: absolute;
            top: 30px;
            right: 40px;
        }

        @media (max-width: 768px) {
            .show-data-btn {
                position: static;
                margin-bottom: 20px;
                display: block;
                text-align: right;
            }
        }
    </style>
</head>
<body>

<div class="container position-relative">
    
    
    <div class="show-data-btn">
        <a href="{{ route('listdata') }}" class="btn btn-primary">Show Data</a>
         

    </div>

    
    <div class="form-container mx-auto w-100" style="max-width: 500px;">
        <h2 class="text-center text-primary form-title">Create Form in Laravel</h2>

        
        <form action="{{ route('create') }}" method="POST">
            @csrf

            
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="Enter country title" value="{{ old('title') }}">
                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" id="city" name="city" class="form-control" placeholder="Enter city name" value="{{ old('city') }}">
                @error('city')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

        
            
            <button type="submit" class="btn btn-success btn-submit">Submit</button>
            
        </form>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
