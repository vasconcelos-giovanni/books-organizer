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
                <h1>Books</h1>
            </div>
            <div class="col-6 d-flex justify-content-end gap-2">
                <button type="button" class="btn btn-primary">Add book</button>
                <button type="button" class="btn btn-danger">Mass delete</button>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-around flex-wrap gap-4">

                <div class="col-3 book d-flex flex-column">
                    <div class="book-item d-flex align-items-start">
                        <input type="checkbox" class="form-check-input me-1">
                        <img class="rounded"
                            src="https://m.media-amazon.com/images/I/612kTfFHHBL._AC_UY327_FMwebp_QL65_.jpg"
                            alt="Book Cover" width="135" height="220">
                    </div>
                    <div>
                        <ul class="book-details list-unstyled mb-0 ms-3">
                            <li><strong>SKU:</strong> SKU123456</li>
                            <li><strong>Name:</strong> Book Title</li>
                            <li><strong>Price:</strong> $19.99</li>
                            <li><strong>Weight:</strong> 2 lbs</li>
                        </ul>
                    </div>
                </div>
                <div class="col-3 book d-flex flex-column">
                    <div class="book-item d-flex align-items-start">
                        <input type="checkbox" class="form-check-input me-1">
                        <img class="rounded"
                            src="https://m.media-amazon.com/images/I/612kTfFHHBL._AC_UY327_FMwebp_QL65_.jpg"
                            alt="Book Cover" width="135" height="220">
                    </div>
                    <div>
                        <ul class="book-details list-unstyled mb-0 ms-3">
                            <li><strong>SKU:</strong> SKU123456</li>
                            <li><strong>Name:</strong> Book Title</li>
                            <li><strong>Price:</strong> $19.99</li>
                            <li><strong>Weight:</strong> 2 lbs</li>
                        </ul>
                    </div>
                </div>
                <div class="col-3 book d-flex flex-column">
                    <div class="book-item d-flex align-items-start">
                        <input type="checkbox" class="form-check-input me-1">
                        <img class="rounded"
                            src="https://m.media-amazon.com/images/I/612kTfFHHBL._AC_UY327_FMwebp_QL65_.jpg"
                            alt="Book Cover" width="135" height="220">
                    </div>
                    <div>
                        <ul class="book-details list-unstyled mb-0 ms-3">
                            <li><strong>SKU:</strong> SKU123456</li>
                            <li><strong>Name:</strong> Book Title</li>
                            <li><strong>Price:</strong> $19.99</li>
                            <li><strong>Weight:</strong> 2 lbs</li>
                        </ul>
                    </div>
                </div>
                <div class="col-3 book d-flex flex-column">
                    <div class="book-item d-flex align-items-start">
                        <input type="checkbox" class="form-check-input me-1">
                        <img class="rounded"
                            src="https://m.media-amazon.com/images/I/612kTfFHHBL._AC_UY327_FMwebp_QL65_.jpg"
                            alt="Book Cover" width="135" height="220">
                    </div>
                    <div>
                        <ul class="book-details list-unstyled mb-0 ms-3">
                            <li><strong>SKU:</strong> SKU123456</li>
                            <li><strong>Name:</strong> Book Title</li>
                            <li><strong>Price:</strong> $19.99</li>
                            <li><strong>Weight:</strong> 2 lbs</li>
                        </ul>
                    </div>
                </div>
                <div class="col-3 book d-flex flex-column">
                    <div class="book-item d-flex align-items-start">
                        <input type="checkbox" class="form-check-input me-1">
                        <img class="rounded"
                            src="https://m.media-amazon.com/images/I/612kTfFHHBL._AC_UY327_FMwebp_QL65_.jpg"
                            alt="Book Cover" width="135" height="220">
                    </div>
                    <div>
                        <ul class="book-details list-unstyled mb-0 ms-3">
                            <li><strong>SKU:</strong> SKU123456</li>
                            <li><strong>Name:</strong> Book Title</li>
                            <li><strong>Price:</strong> $19.99</li>
                            <li><strong>Weight:</strong> 2 lbs</li>
                        </ul>
                    </div>
                </div>
                <div class="col-3 book d-flex flex-column">
                    <div class="book-item d-flex align-items-start">
                        <input type="checkbox" class="form-check-input me-1">
                        <img class="rounded"
                            src="https://m.media-amazon.com/images/I/612kTfFHHBL._AC_UY327_FMwebp_QL65_.jpg"
                            alt="Book Cover" width="135" height="220">
                    </div>
                    <div>
                        <ul class="book-details list-unstyled mb-0 ms-3">
                            <li><strong>SKU:</strong> SKU123456</li>
                            <li><strong>Name:</strong> Book Title</li>
                            <li><strong>Price:</strong> $19.99</li>
                            <li><strong>Weight:</strong> 2 lbs</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
<html>
