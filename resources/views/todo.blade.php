<html>
     <head>
     <title></title>
     </head>
         <body>
         <center>
             <form method="post" action="/page">
             </br></br></br></br></br>
               <Input type="text" name="todo">
               <Input type="text" name="description"><br/></br>
                 <Input type="submit" value="Submit"> 
                  {{csrf_field()}}
                      </br></br> <a href="/show">View</a>
            </form>
          </center>
         </body>
     </html> 