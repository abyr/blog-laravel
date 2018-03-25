<h2>{{$title}}</h2>
<ul class="breadcrumd">
    <li>
        <a href="{{route('admin.index')}}">{{$parent}}</a>
    </li>
    <li class="active">
        {{$active}}
    </li>
</ul>