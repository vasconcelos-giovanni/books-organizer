<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(isset($book) ? 'Edit book' : 'Add book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <div class="row p-2">
                            <div class="col-12 d-flex justify-content-end gap-2">
                                <button type="submit" class="btn btn-outline-primary" id="save-btn">Save</button>
                                <button type="button" class="btn btn-outline-danger" id="cancel-btn"><a href="{{ url('/') }}" class="text-reset" style="text-decoration:none;">Cancel</a></button>
                            </div>
                        </div>
                        <div class="col-22">
                            <form method="POST" action="{{ isset($book) ? route('books.update', $book->id) : route('books.store') }}" id="book-form" enctype="multipart/form-data">
                                @csrf
                                @if (isset($book))
                                @method('PUT')
                                @endif
                                <div class="row mb-3">
                                    <label for="inputSKU" class="col-2 col-form-label"><strong>SKU</strong></label>
                                    <div class="col-6">
                                        <input required="true" type="text" class="form-control" id="inputSKU" name="sku" value="{{ isset($book) ? $book->sku : '' }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputName" class="col-2 col-form-label"><strong>Name</strong></label>
                                    <div class="col-6">
                                        <input required="true" type="text" class="form-control" id="inputName" name="name" value="{{ isset($book) ? $book->name : '' }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPrice" class="col-2 col-form-label"><strong>Price
                                            ($)</strong></label>
                                    <div class="col-6">
                                        <input required="true" type="number" step="0.01" class="form-control" id="inputPrice" name="price" value="{{ isset($book) ? $book->price : '' }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputWeight" class="col-2 col-form-label"><strong>Weight
                                            (g)</strong></label>
                                    <div class="col-6">
                                        <input required="true" type="number" class="form-control" id="inputWeight" name="weight" value="{{ isset($book) ? $book->weight : '' }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2">
                                        <label for="inputCover" class="col-2 col-form-label"><strong>Cover</strong></label>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group">
                                            <label class="input-group-text" for="inputCover">Upload cover
                                                here</strong></label>
                                            {{-- <label class="input-group-text"
                                for="inputCover">{{ isset($book) || $book->cover != null ? 'Clique para trocar capa' : 'Clique para inserir capa' }}</strong></label> --}}
                                            <input type="file" class="form-control-file" id="inputCover" accept="image/*" style="display:none;" name="cover">
                                        </div>
                                        {{-- <div class="mt-2">
                            <img src="https://via.placeholder.com/135x220" class="img-thumbnail" alt="Cover">
                        </div> --}}
                                        {{-- <img class="mt-2 rounded img-thumbnail"
                            src="{{ isset($book) ? $book->cover != null ? asset('storage/uploads/' . $book->cover) : 'https://via.placeholder.com/135x220' }}"
                                        alt="Book Cover" width="135" height="220" /> --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>