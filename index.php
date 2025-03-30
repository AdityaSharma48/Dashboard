<?php
    $insert = false;
    $update = false;
    $delete = false;
  // Connecting to Database -----------------------------------------------------------------------------------------------------------
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $DATABASE = "notes";
    $conn = mysqli_connect($servername,$username,$pass,$DATABASE);

  
    if(isset($_GET['delete']))
    {
        $sno = $_GET['delete'];
        $delete = true;
        $sql1 = "DELETE FROM `notes` where `sno` = $sno";
        $result1 = mysqli_query($conn,$sql1);
        
    }
  // Insertion in database -----------------------------------------------------------------------------------------
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
      if (isset( $_POST['snoEdit']))
      {
        // Update the record
          $sno = $_POST["snoEdit"];
          $title = $_POST["titleEdit"];
          $description = $_POST["descEdit"];
      
        // Sql query to be executed
          $sql = "UPDATE `notes` SET `title` = '$title' , `discription` = '$description' WHERE `notes`.`sno` = $sno";
          $result = mysqli_query($conn, $sql);
          if($result)
          {
              $update = true;
          }
          else
          {
              echo "We could not update the record successfully";
          }
      }
      else
      {
          $title = $_POST["title"];
          $description = $_POST["desc"];
          // Sql query to be executed--------------------------------------------
      
          $sql = "INSERT INTO `notes` (`title`, `discription`) VALUES ('$title', '$description')";
          $result = mysqli_query($conn, $sql);

      
          if($result)
          { 
            $insert = true;
          }
          else
          {
            echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
          } 
      }
  }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body>
    <!-- Edit modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="editModalLabel">Edit this Note</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/unit1/cwh/Lecture_32/index.php" method="POST">
              <input type="hidden" name="snoEdit" id="snoEdit">
              <div class="mb-3">
                <label for="titleEdit" class="form-label">Note Title</label>
                <input type="text" class="form-control" id="titleEdit" name="titleEdit">
              </div>
              <div class="mb-3">
                <label for="descEdit" class="form-label">Note Description</label>
                <textarea class="form-control" id="descEdit" name="descEdit" rows="3"></textarea>
              </div>
              <!-- <button type="submit" class="btn btn-primary">Update Note</button> -->
              <div class="modal-footer d-block mr-auto">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Update Note</button>
              </div>
            </form>
    
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" style="height:23px; width:44px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="http://127.0.0.1:5500/Project/index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  

    <?php
        if($insert)
        {
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success !</strong> Your note has been inserted successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    ?>

    <?php
        if($delete)
        {
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success !</strong> Your note has been updated successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
      ?>

    <?php
        if($update)
        {
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success !</strong> Your note has been deleted successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    ?>

    <div class="container my-3">
        <h2>Add a Note</h2>
        <form action="/unit1/cwh/Lecture_32/index.php" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Note-Title</label>
              <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            </div>
  
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Note-Discription</label>
                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Add Note</button>
          </form>
    </div>


    <div class="container my-4">
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
        <tbody>
        <?php
        // Display Data in Database ----------------------------------------------------------------------------------------------------------
            $sql = "SELECT * FROM `notes`";
            $result = mysqli_query($conn,$sql);
            $sno = 1;
            while($row = mysqli_fetch_assoc($result))
            {
              echo "<tr>
                  <th scope='row'>". $sno++."</th>
                  <td>". $row['title']."</td>
                  <td>". $row['discription']."</td>
                  <td><button class='edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button> <button class='delete btn btn-sm btn-primary' id=d".$row['sno'].">Delete</button></td>
              </tr>";
            }
        ?>
        </tbody>
      </table>
    </div>
    <hr>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script>
      $(document).ready(function () {
        $('#myTable').DataTable();

      });

      // For updation task --------------------------------------------------
      let edit = document.getElementsByClassName('edit');
      Array.from(edit).forEach((element) => {
        element.addEventListener("click", (e) => {
          let tr = e.target.parentNode.parentNode;
          let title = tr.getElementsByTagName("td")[0].innerText;
          let discription = tr.getElementsByTagName("td")[1].innerText;
          console.log(title,discription);
          document.getElementById('titleEdit').value = title;
          document.getElementById('descEdit').value = discription;
          document.getElementById("snoEdit").value = e.target.id;
          $('#editModal').modal('toggle');
        });
      });


      // For Deletion Task ----------------------------------------------------------
      let deletes = document.getElementsByClassName('delete');
      Array.from(deletes).forEach((element) => {
        element.addEventListener("click", (e) => {
          
          sno = e.target.id.substr(1,);
          if(confirm("Are You sure? Do you want to delete?!"))
          {
            console.log("Yes");
            window.location = `/unit1/cwh/Lecture_32/index.php?delete=${sno}`;;
          }
          else
          {
            console.log("No");
          }
        });
      });

    </script>
</body>
</html>