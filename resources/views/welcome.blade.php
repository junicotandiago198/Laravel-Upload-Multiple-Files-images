@extends('layout')
@section('content')
    <div class="row justify-content-between">
        <div class="col-md-5">
            <h3>Add a Product</h3>
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-4">
                    <label for="title">Product Title:</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter product title">
                    <span class="text-danger">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group mt-4">
                    <label for="price">Product Price:</label>
                    <input type="number" step="any" min="1" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="Enter product price">
                    <span class="text-danger">
                        @error('price')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="files" class="form-label mt-4">Upload Product Images:</label>
                    <input type="file" name="imagaes[]" id="" class="form-control" accept="images/*" multiple>
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Save Product</button>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <h3>Products</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product Title</th>
                        <th>Price</th>
                        <th>Total Image</th>
                        <th>View Image</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1; @endphp
                    @forelse ($products as $product)
                        <tr>
                            <td>{{ $i++; }}</td>
                            <td>{{ $product->title }}</td>
                            <td>${{ $product->price }}</td>
                            <td>10</td>
                            <td>
                                <a href="#" class="btn btn-outline-dark">View</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No products yet!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection