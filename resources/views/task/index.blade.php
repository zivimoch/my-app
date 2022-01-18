<x-app-layout>
    <div class="card">
        <div class="card-body">
            <form action="{{route('task.store')}}" method="POST">
                @csrf
                <div class="mb-2">
                    <input type="text" name="task" class="form-control @error('task') is-invalid @enderror me-2">
                    @error('task')
                    <span class="invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <input type="submit" name="submit" value="submit">
            </form>
        </div>
    </div>
    @foreach($task as $a)
    <a href="{{route('task.edit',$a->id)}}">{{$a->task}}</a> -
    <form action="/task/{{$a->id}}" method="POST" style="display:inline">
        @method('delete')
        @csrf
        <input type="submit" value="delete">
    </form>
    </br>
    @endforeach
</x-app-layout>
