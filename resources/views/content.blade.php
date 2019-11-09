@extends('home')
@section('content')
    

<h1>List Of Students</h1>
<form action="/home/{{$course->id}}" method="POST">
    {{ csrf_field() }}
        <ol>
            <?php $i=0;?>
            @foreach($course->student as $s)
                        
                   
                <li>
                <input name="id{{$i}}" type="hidden" value="{{$s->id}}">
                    <span  name="name{{$i}}" class="name">{{$s->name}}</span>
                    <input name="grade{{$i}}" type="number"class="grade" value="{{$s->grade}}"> 
                </li>
                <?php ++$i;?>
            @endforeach
            <input name="submit" class="button" type="submit">
        </ol>
</form>
@endsection