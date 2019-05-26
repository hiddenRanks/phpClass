@extends("layout/master")

@section('content')

@if(isset($_SESSION['user']))
<h1>Hello world</h1>
@endif

<table>
    <tr>
        <td>번호</td>
        <td>제목</td>
        <td>내용</td>
        <td>글쓴이</td>
    </tr>
    @foreach($list as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->title}}</td>
        <td>{{$item->content}}</td>
        <td>{{$item->writer}}</td>
    </tr>
    @endforeach
</table>
@endsection