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
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jszip-3.1.3/pdfmake-0.1.27/dt-1.10.15/b-1.4.0/b-colvis-1.4.0/b-html5-1.4.0/b-print-1.4.0/cr-1.3.3/r-2.1.1/datatables.min.css"/> -->
    <link href="//cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="data.css" rel="stylesheet">
  </head>

  <body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
   
          <a class="nav-link" href="home.php">Home</a>
          <a class="nav-link active" href="employees.php">Employees</a>
          <a class="nav-link" href="departments.php">Departments</a>
          <a class="nav-link" href="dependents.php">Dependents</a>
          <a class="nav-link" href="locations.php">Locations</a>
          <a class="nav-link" href="projects.php">Projects</a>
          <a class="nav-link" href="workson.php">Works On</a>
          <a class="nav-link" href="index.php">Back</a>
          
        </nav>
      </div>
    </div>


    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card"> 
                <div class="card-header card-mb"><strong>Employees Table</strong></div>
                <div class="card-block">      

                      <table id="data-table" class="table table-display display table-striped" cellspacing="0" width="100%">
                        
                        <thead>
                          <tr class="text-uppercase">
                            <th>FNAME</th>
                            <th>MINIT</th>
                            <th>LNAME</th>
                            <th>SSN</th>
                            <th>BDATE</th>
                            <th>ADDRESS</th>
                            <th>SEX</th>
                            <th>SALARY</th>
                            <th>SUPERSSN</th>
                            <th>DNO</th>
                          </tr>  
                       </thead>

                       <tfoot>
                         <tr class="text-uppercase">
                           <th>FNAME</th>
                           <th>MINIT</th>
                           <th>LNAME</th>
                           <th>SSN</th>
                           <th>BDATE</th>
                           <th>ADDRESS</th>
                           <th>SEX</th>
                           <th>SALARY</th>
                           <th>SUPERSSN</th>
                           <th>DNO</th>
                         </tr>
                       </tfoot>

                       <tbody>
                       
                         <?php 
                         $employees = array(

                            array("John", "B", "Smith", 123456789, "09-JAN-55","731 Fondren  Houston TX","M",30000,333445555,5),
                            array("Alicia", "J", "Zelaya", 999887777, "19-JUL-58","3321 Castle   Spring  TX","F",25000,987654321,4),
                            array("Jennifer", "S", "Wallace", 987654321, "20-JUN-31","291 Berry  Bellaire TX","F",43000,888665555,4 ),
                            array("Ramesh", "K", "Narayan", 666884444, "15-SEP-52","975 Fire Oak   Humble ,TX","M",38000,333445555,5),
                            array("Joyce", "A", "English", 453453453, "31-JUL-63","5631 Rice   Houston   TX","F",25000,33445555,5),
                            array("Ahmad", "V", "Jabbar", 987987987, "29-MAR-59","980 Dallas   Houston   TX","M",25000,987654321,4),
                            array("James", "E", "Borg", 888665555, "10-NOV-27","450 Stone  Houston   TX","M",55000,0,1),
                            array("Franklin", "T", "Wong", 333445555, "08-DEC-45","638 Voss  Houston   TX","M",40000,866665555,5),

                          );  
                          foreach($employees as $employee): ?>
                            <tr>
                              <td><?php echo ($employee[0]); ?></td>
                              <td><?php echo ($employee[1]); ?></td>
                              <td><?php echo ($employee[2]); ?></td>
                              <td><?php echo ($employee[3]); ?></td>
                              <td><?php echo ($employee[4]); ?></td>
                              <td><?php echo ($employee[5]); ?></td>
                              <td><?php echo ($employee[6]); ?></td>
                              <td><?php echo ($employee[7]); ?></td>
                              <td><?php echo ($employee[8]); ?></td>
                              <td><?php echo ($employee[9]); ?></td>
                            </tr>
                         <?php endforeach; ?>

      
                       </tbody>

                    </table>

                  </div>
              </div>
          </div>
      </div>
  </div>

<footer class="blog-footer">

</footer>

<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>

<!-- <script type="text/javascript" src="https://cdn.datatables.net/v/bs/jszip-3.1.3/pdfmake-0.1.27/dt-1.10.15/b-1.4.0/b-colvis-1.4.0/b-html5-1.4.0/b-print-1.4.0/cr-1.3.3/r-2.1.1/datatables.min.js"></script> -->
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.4.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>


<script>

$(document).ready(function() {

  $('#data-table').DataTable({
    "paging":   true,
  });
});


</script>
</body>
</html>
