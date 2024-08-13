<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companies</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Companies</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h2>Create a New Company</h2>
    <form action="{{ route('companies-form') }}" method="POST">
        @csrf  

        <div class="form-group">
            <label for="company_name">Company Name</label>
            <input type="text" name="company_name" id="company_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="company_country">Company Country</label>
            <input type="text" name="company_country" id="company_country" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="company_city">Company City</label>
            <input type="text" name="company_city" id="company_city" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="company_size">Company Size</label>
            <input type="number" name="company_size" id="company_size" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Company</button>
    </form>

</div>
</body>
</html>
