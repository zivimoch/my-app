<x-app-layout>
    <div class="card">
        <div class="card-body">
            <form action="{{route('task.store')}}" method="POST">
                @csrf
                <input type="text" name="task">
                <input type="submit" name="submit" value="submit">
            </form>
        </div>
    </div>
    @foreach($data as $a)
    <a href="{{route('user.show',$a)}}">{{$a->name}}</a>
    </br>
    @endforeach
</x-app-layout>
