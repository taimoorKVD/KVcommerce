@extends('admin.layouts.adminpanel')

@section('content')

    <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table product-overview">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Created at</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($products->count() > 0)
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $product->name }}</td>
                                            <td>
                                                <img src="{{ asset('storage/product/'. $product->image) }}" alt="{{ $product->image }}" width="80">
                                            </td>
                                            <td>{{ $product->price }}</td>
                                            <td>
                                                <span class="label label-success">Available</span>
                                            </td>
                                            <td>{{ $product->created_at->diffForHumans() }}</td>
                                            <td>
                                                <a href="{{ route('admin.products.edit', $product) }}" class="text-inverse p-r-10" data-toggle="tooltip" title="" data-original-title="Edit">
                                                    <i class="ti-marker-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="text-inverse delete-product" title="" data-toggle="tooltip" data-original-title="Delete" data-id="{{ $product->id }}">
                                                    <i class="ti-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr class="text-center">
                                        <td colspan="100%">No product found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    {{ $products->links("pagination::bootstrap-4") }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        @if(Session::has('success'))
            $.toast({
                heading: 'Success!',
                text: '{{ session("success") }}',
                position: 'top-right',
                loaderBg:'#ff6849',
                icon: 'success',
                hideAfter: 3000,
                stack: 6
            });
        @endif

        $(".delete-product").click(function () {
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you really want to delete this product",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "{{ url('admin/products') }}/"+$(this).data('id'),
                        type: "DELETE",
                        data: {
                            _token: "{{ csrf_token() }}"
                        },
                        success:function(resp) {
                            if(resp.status) {
                                $.toast({
                                    heading: 'Success!',
                                    text: resp.msg,
                                    position: 'top-right',
                                    loaderBg:'#ff6849',
                                    icon: 'success',
                                    hideAfter: 3000,
                                    stack: 6
                                });
                            }
                        }
                    });
                }
            })
        });
    </script>
@endpush
