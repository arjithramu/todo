<html>
     <head>
     <title></title>
     </head>
         <body>
         </br></br></br></br></br>
        <center>
      <table>
      <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Description</th>
      <th>Delete</th>
      <th>Edit</th>
      </tr>
      @foreach($todos as $todo)
      <tr>
        <td>{{$todo->id}}</td>
        <td>{{$todo->task}}</td>
        <td>{{$todo->description}}</td>
    <td><a href="/delete/{{$todo->id}}">Delete</a></td>
     <td><a href="/edit/{{$todo->id}}">Edit</a></td>
      </tr>
      @endforeach
      </table>
      </center>
      <!--@if(isset($todo))
        {{$todos}};
      @endif -->
         </body>
     </html> 