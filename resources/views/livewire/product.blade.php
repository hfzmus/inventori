<div>
    <div class="d-flex justify-content-between mt-5">
        <h2>Inventori Semasa</h2>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Create Product</button>
    </div>

    <div class="my-3">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('success') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger" role="alert">
                {{ session()->get('error') }}
            </div>
        @endif
        @if ($updateProduct)
            @include('livewire.update')
        @else
            @include('livewire.create')
        @endif
    </div>



    <table class="table table-bordered table-hover mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Part Number</th>
                <th scope="col">Starting</th>
                <th scope="col">Received</th>
                <th scope="col">Shipped</th>
                <th scope="col">On Hand</th>
                <th scope="col">Min Stock</th>
            </tr>
        </thead>
        <tbody>
            @if (count($products) > 0)
                @foreach ($products as $product)
                    <tr>
                        <td>
                            {{ $product->name }}
                        </td>
                        <td>
                            {{ $product->part_number }}
                        </td>
                        <td>
                            {{ $product->starting }}
                        </td>
                        <td>
                            {{ $product->received }}
                        </td>
                        <td>
                            {{ $product->shipped }}
                        </td>
                        <td>
                            {{ $product->on_hand }}
                        </td>
                        <td>
                            {{ $product->min_stock }}
                        </td>
                        <td>
                            <button wire:click="edit({{ $product->id }})" class="btn btn-warning btn-sm">Edit</button>
                            <button onclick="deleteCategory({{ $product->id }})"
                                class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="8" align="center">
                        No Products Found.
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
