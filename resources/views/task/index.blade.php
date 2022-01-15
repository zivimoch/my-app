 <x-app-layout>
     <div class="card">
         <div class="card-body">
             <form action="/task" method="POST">
                 @csrf
                 <input type="text" name="task">
                 <input type="submit" name="submit" value="submit">
             </form>
         </div>
     </div>
     @foreach($task as $a)
     <a href="/task/edit/{{$a->id}}">{{$a->task}}</a> -
     <form action="/task/{{$a->id}}" method="POST" style="display:inline">
         @method('delete')
         @csrf
         <input type="submit" value="delete">
     </form>
     </br>
     @endforeach
 </x-app-layout>
