<form action="" method="POST">
<div class="form-group">
    <label for="full_name">Nume</label>
    <input type="text" class="form-control" id="full_name" name="full_name" placeholder="ex: Ion Ionescu" required value="<?php if(isset($_POST['full_name'])) echo $_POST['full_name'];?>">
</div>  
<div class="form-group">
    <label for="email">Adresa de email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="ex: email@email.com" required value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
  </div>
  <div class="form-group">
    <label for="review">Review</label>
    <textarea class="form-control" id="review" name="review" placeholder="Review-ul meu" required value="<?php if(isset($_POST['review'])) echo $_POST['review'];?>">
</textarea>
</div> 
  <div class="form-check">
    <input type="checkbox" id="acceptance" name="acceptance" value="acceptance" required>
    <label for="acceptance">Sunt de acord cu procesarea datelor cu caracter personal.</label>
  </div>
  <input type="submit" class="btn btn-primary" name="reviews_form" value="Trimite">
</form>