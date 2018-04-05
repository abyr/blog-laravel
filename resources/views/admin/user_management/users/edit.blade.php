@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

    @component('admin.components.breadcrumb')
        @slot('title') Edit user @endslot
        @slot('parent') Main @endslot
        @slot('active') user @endslot
    @endcomponent

<hr>

<form class="form-horizontal" action="{{route('admin.user_management.user.update', $user )}}" method="post">
    {{ method_field('PUT')}}
    {{ csrf_field() }}

    @include('admin.user_management.users.partials.form')
</form>

</div>

@endsection
