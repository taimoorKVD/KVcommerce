<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">
            {{ ucfirst(request()->segment(2)) }}
        </h4>
    </div>
    @if(request()->segment(2) != 'dashboard')
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">
                        Home
                    </a>
                </li>
                <li class="breadcrumb-item active">
                    {{ ucfirst(empty(request()->segment(3))  ? 'Listing' : request()->segment(3)) }}
                </li>
            </ol>
            {{-- <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button> --}}
        </div>
    </div>
    @endif
</div>