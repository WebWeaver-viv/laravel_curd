<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <div class="bg-dark py-3">
        <h3 class="text-white text-center">Products List And Create</h3>
    </div>
    <div class="container">
      <div class="row justify-content-center mt-4">
        <div class="col-md-10 d-flex justify-content-end">
            <a href="{{ route('products.index') }}" class="btn btn-dark me-4">back</a>
            <a href="{{ url('/') }}" class="btn btn-dark">Home</a>

        </div>

    </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Create Product</h3>
                    </div>
                    <form enctype="multipart/form-data" action={{route('products.store')}} method="post">
                      @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label h5">Name</label>
                                <input  value="{{old('name')}}" type="text" class=" @error('name') is-invalid  @enderror form-control form-control-lg" id="name" name="name" placeholder="Name">
                                @error('name')
                                    <p class="invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="sku" class="form-label h5">SKU</label>
                                <input  value="{{old('sku')}}" type="text" class=" @error('sku') is-invalid  @enderror form-control form-control-lg" id="sku" name="sku" placeholder="Sku">
                                @error('sku')
                                <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label h5">Price</label>
                                <input  value="{{old('price')}}" type="text" class=" @error('price') is-invalid  @enderror form-control form-control-lg" id="price" name="price" placeholder="Price">
                                @error('price')
                                <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label h5">Description</label>
                                <textarea  value="{{old('description')}}" name="description" id="description" class="form-control" rows="5" placeholder="Description"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label h5">Image</label>
                                <input value="{{old('image')}}" type="file" class="form-control form-control-lg" id="image" name="image">
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-lg btn-primary">Submit</button
                             <button type="submit" class="btn btn-lg btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
