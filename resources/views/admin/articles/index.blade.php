@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

    @component('admin.components.breadcrumb')
        @slot('title') News @endslot
        @slot('parent') Main @endslot
        @slot('active') Article @endslot
    @endcomponent

    <hr>

    <a href="{{route('admin.article.create')}}" class="btn btn-primary pull-right" >
        <i class="fa fa-plus-square-o"></i> Create article
    </a>

    <table class="table table-stripped">
        <thead>
            <th>Name</th>
            <th>Post</th>
            <th class="text-right">Action</th>
        </thead>
        <tbody>
            @forelse ($articles as $article)
                <tr>
                    <td>{{$article->title}}</td>
                    <td>{{$article->published}}</td>
                    <td>
                        <form onsubmit="if(confirm('Delete?')) { return true } else { return false } "
                            action="{{route('admin.article.destroy', $article)}}" method="post">
                            <input type="hidden" name="_method" value="DELETE"/>
                            {{ csrf_field() }}

                            <a class="btn btn-default" href="{{route('admin.article.edit', $article)}}">
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
                        {{$articles->links()}}
                    </ul>
                </td>
            </tr>
        </tfoot>
    </table>

</div>

@endsection