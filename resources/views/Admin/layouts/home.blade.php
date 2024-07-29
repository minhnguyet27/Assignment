@extends('admin.layouts.app')
<body class="sb-nav-fixed">
{{-- header --}}
@include('admin.partials.header')
{{-- sideBar --}}
<div id="layoutSidenav">
    @include('admin.partials.sidebar')
   
   <div id="layoutSidenav_content">
    <main>
        @yield('content')
    </main>
   </div>
</div>
    {{-- content --}}
   
    {{-- footer --}}
   
</body>
 {{-- @include('admin.partials.footer') --}}


