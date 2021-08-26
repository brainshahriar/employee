<h2>ADD Student</h2>
<a href="<?= base_url('students') ?>">Back</a>

<br><br>

<form action="<?= base_url('students/add') ?>" method="POST">
  <label >Name</label><br>
  <input type="text" name="Name" required><br>
  <label >Email</label><br>
  <input type="text"  name="email" required><br>
  <label >Phone</label><br>
  <input type="text"  name="phone" required><br>
  <label >Course</label><br>
  <input type="text"  name="course" required><br><br>
  <input type="submit" value="submit">
</form> 

