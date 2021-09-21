@extends('admin.layouts.adminpanel')

@section('content')

    <div class="row d-flex justify-content-center">
        <div class="col-8">

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-rounded">
                        {{ $error }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endforeach
            @endif


            <div class="card card-body">
                <h4 class="card-title">Create new product</h4>
                <form method="post" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="price">Price <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="price" name="price" placeholder="Enter price">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control resize-none" id="description" name="description" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image <span class="text-danger">*</span></label>
                        <input type="file" name="image" id="image" class="dropify" data-max-file-size="2M"/>
                    </div>
                    <div class="d-flex justify-content-center">
                    <a href="" class="btn btn-dark">Refresh</a>
                    <button type="submit" class="btn btn-success ml-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>
@endpush
