<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Create a New Product</h1>
    <form action="{{ route('products-form') }}" method="POST">
        @csrf  

        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" name="product_name" id="product_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="product_count">Product Count</label>
            <input type="number" name="product_count" id="product_count" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="product_city">Product City</label>
            <input type="text" name="product_city" id="product_city" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="product_manufacturer">Product Manufacturer</label>
            <input type="text" name="product_manufacturer" id="product_manufacturer" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="company_id">Company</label>
            <select name="company_id" id="company_id" class="form-control" required>
                <option value="">Select Company</option>
                @foreach($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="container">
           
            <a href="{{ route('productsshow') }}" type="submit" class="btn btn-primary btn-lg">Add New product</a>
        </div>
        
    </form>
</div>
</body>
</html>
