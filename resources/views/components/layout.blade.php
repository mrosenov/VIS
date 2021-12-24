<!DOCTYPE html>
<html>
@include('components.head')
<body>
@include('components.navbar')
@include('components.header')

<div class="container" style="margin-top: 10px;">
    @yield('section')
</div>
<script src={{URL::asset('/js/jquery.min.js')}}></script>
<script src={{URL::asset('/js/bootstrap.bundle.min.js')}}></script>
<script src={{URL::asset('/js/custom.js')}}></script>
</body>
</html>
