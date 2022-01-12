 <x-app-layout>
     <form action="/task/{{$task->id}}" method="POST">
         @method('put')
         @csrf
         <input type="text" name="task" value="{{$task->task}}">
         <input type="submit" name="submit" value="submit">
     </form>
 </x-app-layout>
