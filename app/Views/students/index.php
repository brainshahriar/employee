<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<?php 
if(session()->getFlashdata('status'))
{
    ?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Hey!</strong> <?= session()->getFlashdata('status'); ?>
</div>

    <?php
}
?>





<h1>Student Data
</h1>

<h2>
    <a href="<?= base_url('students/create')?>">Add</a>
</h2>

<table>
<thread>
  <tr>
     <th>Id</th>
           <th>Name</th>                                <th>Email</th>
        <th>Phone</th>
       <th>Course</th>
         <th>Action</th>
         <th>Del-Method</th>
  </tr>
  <thread>

  <tbody>
          <?php if($students):?>
            <?php foreach($students as $row ): ?>
            <tr>
                <td><?php echo $row ['Id']; ?> </td>
                <td><?php echo $row ['Name']; ?> </td>
                <td><?php echo $row ['email']; ?> </td>
                <td><?php echo $row ['phone']; ?> </td>
                <td><?php echo $row ['course']; ?> </td>
                <td>
                    <a href="<?= base_url('students/edit/'.$row['Id']) ?>" class="btn">Edit</a>
                    <a href="<?= base_url('students/delete/'.$row['Id']) ?>" class="btn">Delete</a>
                </td>
              <td>
                <form action="<?= base_url('students/delete-method/'.$row['Id']) ?>" method="POST">
                <input type="hidden" name="_method" value="Delete">
                <button type="submit" class="btn">Delete</button>
                </form>
              </td>
            </tr>
            <?php endforeach;?>
            <?php endif;?>
      </tbody>
  
</table>
