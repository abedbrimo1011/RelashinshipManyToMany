<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
    {{$errors}}
        
    @endif
    <form action="{{route('teacher.assign-subject',$teacher)}}" method="post">
        @csrf
        @foreach ($sub as $subjet)
        <input type="checkbox" name="subjects[]" value="{{$subjet->id}}"
        {{$teacher->subjects->contains($subjet)?'checked':''}}
        >{{$subjet->name}}

            
        @endforeach
        <input type="submit">
    </form>
</body>
</html>