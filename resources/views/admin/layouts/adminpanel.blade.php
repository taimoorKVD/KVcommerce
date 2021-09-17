<!DOCTYPE html>
<html lang="en">

<x-head></x-head>

<body class="skin-default fixed-layout">
    
    <x-pre-loader></x-pre-loader>
    
    <div id="main-wrapper">
        
        <x-top-header></x-top-header>
        
        <x-aside></x-aside>
        
        <div class="page-wrapper">
            <div class="container-fluid">
        
                <x-breadcrumb></x-breadcrumb>
            
                @yield('content')

                <x-right-sidebar></x-right-sidebar>

            </div>
        </div>
        
       <x-footer></x-footer>
        
    </div>
    
    <x-script></x-script>

    @stack('scripts')
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('.alert-danger').fadeOut('slow');
            },4000);
        });
    </script>
</body>
</html>