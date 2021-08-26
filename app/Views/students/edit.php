<h2>EDIT STUDENTs</h2>
<a href="<?= base_url('students') ?>">Back</a>

<br><br>

<form action="<?= base_url('students/update/'.$students['Id']) ?>" method="POST">
<input type="hidden" name="_method" value="PUT" />
  <label >Name</label><br>
  <input type="text" name="Name" value="<?= $students['Name']; ?>" required><br>
  <label >Email</label><br>
  <input type="text"  name="email" value="<?= $students['email']; ?>"required><br>
  <label >Phone</label><br>
  <input type="text"  name="phone" value="<?= $students['phone']; ?>" required><br>
  <label >Course</label><br>
  <input type="text"  name="course" value="<?= $students['course']; ?>" required><br><br>
  <input type="submit" value="update">
</form> 

