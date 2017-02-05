<?php
    namespace App\Http\Controllers;


    use Illuminate\Http\Request;
    use  App\User;
    use  App\Task;

    /**
     *
     */
    class TasksController extends Controller
    {

      public function insert(){

        $flights = App\Task::all();

       foreach ($flights as $flight) {
           echo $flight->name;
       }
        /*$query = "INSERT INTO tasks (idtask , Name) VALUES (NULL, $request->item)";
        $link = mysqli_connect("localhost", "root" , "" ,"tasky");

        if(mysqli_connect_error()){
          die("Error connecting to the database");
        }

        if(mysqli_query($link,$query)){
          echo "inseret listo";
        }

        mysqli_close($link);*/
      }

      public function index2()
      {
       $tasks = Task::all()->get();;
       return view('prueba', ['task' => $tasks]);
      }
    }

?>
