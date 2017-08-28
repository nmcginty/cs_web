<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../favicon.ico"> -->

    <title>CSCI 434</title>

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.15/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="//cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="data.css" rel="stylesheet">
  </head>
  <body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">

          <a class="nav-link" href="home.php">Home</a>
          <a class="nav-link" href="employees.php">Employees</a>
          <a class="nav-link active" href="departments.php">Departments</a>
          <a class="nav-link" href="dependents.php">Dependents</a>
          <a class="nav-link" href="locations.php">Locations</a>
          <a class="nav-link" href="projects.php">Projects</a>
          <a class="nav-link" href="workson.php">Works On</a>
          <a class="nav-link" href="index.php">Back</a>
        
        </nav>
      </div>
    </div>
  <div class="container card-ml-dept">
  <div class="row">
      <div class="col-md-10">
          <div class="card"> 
              <div class="card-header card-mb"><strong>Departments Table</strong></div>
              <div class="card-block">        

                    <table id="data-table" class="table table-display display table-striped" cellspacing="0" width="100%">
                      
                      <thead>
                        <tr class="text-uppercase">
                          <th>DNUMBER</th>
                          <th>DNAME</th>
                          <th>MGRSSN</th>
                          <th>MGRSTARTDATE</th>
                        </tr>  
                     </thead>

                     <tfoot>
                       <tr class="text-uppercase">
                          <th>DNUMBER</th>
                          <th>DNAME</th>
                          <th>MGRSSN</th>
                          <th>MGRSTARTDATE</th>
                       </tr>
                     </tfoot>

                     <tbody>

                       <?php 
                       $departments = array(
                          array("Adminstration", 4, 987654321, "01-JAN-85"),
                          array("Headquarters", 1, 888665555, "19-JUN-71"),
                          array("Research", 5, 333445555, "22-MAY-78")
                        );  
                        foreach($departments as $department): ?>
                          <tr>
                            <td><?php echo ($department[0]); ?></td>
                            <td><?php echo ($department[1]); ?></td>
                            <td><?php echo ($department[2]); ?></td>
                            <td><?php echo ($department[3]); ?></td>
                          </tr>
                       <?php endforeach; ?>
    
                     </tbody>

                  </table>

                </div>
            </div>
        </div>
    </div>
</div>


</body>

<footer class="blog-footer"></footer>

<script src = "https://code.jquery.com/jquery-1.12.4.js"></script>

<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js">
</script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js">
</script>

<script>
  $(document).ready(function() {
    $('#data-table').DataTable({
      "paging":   true,
    });
  });
</script>

</html>
