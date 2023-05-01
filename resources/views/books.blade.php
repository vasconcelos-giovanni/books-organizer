<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="container">
                        <div class="row p-2">
                            <div class="col-12 d-flex justify-content-end gap-2">
                                <button type="button" class="btn btn-outline-primary"><a
                                        href="{{ route('books.create') }}" class="text-reset"
                                        style="text-decoration:none;">Add book</a></button>
                                <button type="button" class="btn btn-outline-danger" id="mass-delete-btn">Mass
                                    delete</button>
                            </div>
                        </div>
                        <div class="row">
                            <form method="POST" action="{{ route('books.destroy') }}"
                                class="col-12 d-flex justify-content-around flex-wrap gap-4" id="delete-books-form">
                                @csrf
                                @foreach ($books as $book)
                                    <div class="col-3 book d-flex flex-column">
                                        <div class="book-item d-flex align-items-start">
                                            <input type="checkbox" class="delete-checkbox form-check-input me-1"
                                                name="ids[]" value="{{ $book->id }}" />
                                            <a class="text-reset" href="{{ route('books.edit', $book) }}"><img
                                                    class="rounded img-thumbnail"
                                                    src="{{ $book->cover != null ? asset('storage/uploads/' . $book->cover) : 'https://via.placeholder.com/135x220' }}"
                                                    alt="Book Cover" width="135" height="220" /></a>
                                        </div>
                                        <div>
                                            <ul class="book-details list-unstyled mb-0 ms-3">
                                                <li><strong>SKU:</strong> {{ $book->sku }}</li>
                                                <li><strong>Name:</strong> {{ $book->name }}</li>
                                                <li><strong>Price:</strong> R${{ $book->price }}</li>
                                                <li><strong>Weight:</strong> {{ $book->weight }}g</li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
