@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

    @component('admin.components.breadcrumb')
        @slot('title') Users @endslot
        @slot('parent') Main @endslot
        @slot('active') Users @endslot
    @endcomponent

    <hr>

    <a href="{{route('admin.user_management.user.create')}}" class="btn btn-primary pull-right" >
        <i class="fa fa-plus-square-o"></i> Create user
    </a>

    <table class="table table-stripped">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th class="text-right">Action</th>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <form onsubmit="if(confirm('Delete?')) { return true } else { return false } "
                            action="{{route('admin.user_management.user.destroy', $user)}}" method="post">

                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}

                            <a class="btn btn-default" href="{{route('admin.user_management.user.edit', $user)}}">
                                <i class="fa fa-edit"></i>
                            </a>

                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash-o"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">
                        <h2>No data</h2>
                    </td>
                </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">
                        {{$users->links()}}
                    </ul>
                </td>
            </tr>
        </tfoot>
    </table>

</div>

@endsection
