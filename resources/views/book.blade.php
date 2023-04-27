<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script defer="true" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <div class="row p-2">
            <div class="col-6 d-flex justify-content-start">
                <h1>Book</h1>
            </div>
            <div class="col-6 d-flex justify-content-end gap-2">
                <button type="button" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger">Cancel</button>
            </div>
        </div>
        <div class="col-12">
            <form>
                <div class="row mb-3">
                    <label for="inputSKU" class="col-1 col-form-label">SKU</label>
                    <div class="col-6">
                        <input type="text" class="form-control" id="inputSKU">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputName" class="col-1 col-form-label">Name</label>
                    <div class="col-6">
                        <input type="text" class="form-control" id="inputName">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPrice" class="col-1 col-form-label">Price</label>
                    <div class="col-6">
                        <input type="number" step="0.01" class="form-control" id="inputPrice">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputWeight" class="col-1 col-form-label">Weight</label>
                    <div class="col-6">
                        <input type="number" step="0.01" class="form-control" id="inputWeight">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-1">
                        <label for="inputCover" class="col-1 col-form-label">Cover</label>
                    </div>
                    <div class="col-6">
                        <div class="input-group">
                            <label class="input-group-text" for="inputCover">Upload image here</label>
                            <input type="file" class="form-control" id="inputCover" accept="image/*"
                                style="display:none;">
                        </div>
                        {{-- <div class="mt-2">
                            <img src="https://via.placeholder.com/135x220" class="img-thumbnail" alt="Cover">
                        </div> --}}
                    </div>
                </div>
            </form>

            {{-- <form>
                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-3 d-flex flex-column">
                            <label for="skuInput" class="form-label">SKU</label>
                            <input type="text" class="form-control" id="skuInput">
                        </div>
                        <div class="mb-3">
                            <label for="nameInput" class="form-label">Name</label>
                            <input type="text" class="form-control" id="nameInput">
                        </div>
                        <div class="mb-3">
                            <label for="priceInput" class="form-label">Price</label>
                            <input type="text" class="form-control" id="priceInput">
                        </div>
                        <div class="mb-3">
                            <label for="weightInput" class="form-label">Weight</label>
                            <input type="text" class="form-control" id="weightInput">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="coverInput" class="form-label visually-hidden">Cover</label>
                            <div class="position-relative">
                                <input type="file" class="form-control" id="coverInput">
                                <div
                                    class="upload-cover-placeholder position-absolute top-50 start-50 translate-middle">
                                    <span class="text-center">Upload cover here</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form> --}}


        </div>
    </div>
</body>
<html>
