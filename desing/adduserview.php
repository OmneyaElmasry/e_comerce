<form method="post" action="functions/insert.php">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="exampleInputEmail1">username</label>
      <input type="text" value="" name="username" class="form-control" id="exampleInputEmail1" placeholder="name">
    </div>
    <div class="form-group col-md-12">
      <label for="exampleInputEmail1">Password</label>
      <input type="password"name="password" class="form-control" id="exampleInputEmail1" placeholder="Password">
    </div>
  </div>
  <div class="form-group col-md-12">
    <label for="inputAdexampleInputEmail1dress">Adress</label>
    <input type="text" class="form-control"  name="address" id="exampleInputEmail1" placeholder="1234 Main St">
  </div>
  <div class="form-group col-md-12">
    <label for="inputAdexampleInputEmail1dress">email</label>
    <input type="text" class="form-control"  name="email" id="exampleInputEmail1" placeholder="1234 Main St">
  </div>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="0" checked>
  <label class="form-check-label" for="exampleRadios1">
    male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="1">
  <label class="form-check-label" for="exampleRadios2">
  female
  </label>
</div>

<div class="form-group  col-md-12">
    <label for="exampleFormControlSelect1">privileges</label>
    <select name="privileges" class="form-control" id="exampleFormControlSelect1">
      <option value="0">admin</option>
      <option value="1">user</option>
    
    </select>
  </div>


  <button type="submit" class="btn btn-primary">add</button>
</form>