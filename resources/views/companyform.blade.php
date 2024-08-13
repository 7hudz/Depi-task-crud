<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>companies</title>
</head>
<body>
    <div class="container mt-5">
    <h2 class="mt-5">List of Companies</h2>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>CompanyName</th>
                <th>Country</th>
                <th>City</th>
                <th>Size</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($companies as $company)
                <tr>
                    <td>{{ $company->id }}</td>
                    <td>{{ $company->company_name }}</td>
                    <td>{{ $company->company_country }}</td>
                    <td>{{ $company->company_city }}</td>
                    <td>{{ $company->company_size }} {{ "employee" }}</td>
                    <td>{{ $company->created_at }}</td>
                    <td>{{ $company->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <section class="hero">
        <div class="container">
           
            <a href="{{ route('products') }}" class="btn btn-primary btn-lg">Add products</a>
        </div>
    </section>
</div>
</body>
</html>