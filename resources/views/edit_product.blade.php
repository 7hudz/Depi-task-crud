<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Edit Product</title>
</head>
<body>
<div class="container mt-5">
    <h2>Edit Product</h2>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('POST') <!-- Use POST method for update -->
        
        <div class="form-group">
            <label for="product_name">Product Name:</label>
            <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $product->product_name }}" required>
        </div>
        
        <div class="form-group">
            <label for="product_count">Product Count:</label>
            <input type="number" class="form-control" id="product_count" name="product_count" value="{{ $product->product_count }}" required>
        </div>
        
        <div class="form-group">
            <label for="product_city">Product City:</label>
            <input type="text" class="form-control" id="product_city" name="product_city" value="{{ $product->product_city }}" required>
        </div>
        
        <div class="form-group">
            <label for="product_manufacturer">Product Manufacturer:</label>
            <input type="text" class="form-control" id="product_manufacturer" name="product_manufacturer" value="{{ $product->product_manufacturer }}" required>
        </div>
        
        <div class="form-group">
            <label for="company_id">Company:</label>
            <select class="form-control" id="company_id" name="company_id" required>
                @foreach($companies as $company)
                    <option value="{{ $company->id }}" {{ $product->company_id == $company->id ? 'selected' : '' }}>{{ $company->company_name }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Update Product</button>
        </div>
    </form>      
</div>
</body>
</html>
