<html>
     <head>
     <title></title>
     </head>
         <body>
         <center>
 <form method="post" action="/update">
             </br></br></br></br></br>
               <Input type="text" name="task" value="{{$todos->task}}">
               <Input type="text" name="description" value="{{$todos->description}}"><br/></br>
               <Input type="hidden" name="id" value="{{$todos->id}}">
                 <Input type="submit" value="Update"> 
                  {{csrf_field()}}
        </form>
        </center>
         </body>
     </html> 