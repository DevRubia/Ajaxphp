<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax testing</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>
    .center{
        margin: auto;
        width: 50%;
        padding-top:50%;
        padding: 10px;
        border-radius:5px;
    }

body{
  padding-top:150px;
}
</style>
</head>
<body class="bg-dark text-white">
    

<form class="container bg-white text-black center border border-warning">
  
<div class="form-group">
    <h4 class="text-dark" for="exampleInputPassword1">Name</h4>
    <input type="text" class="form-control"  name="name" id="exampleInputPassword1" placeholder="Password">
  </div>

  <div class="form-group">
    <h4 class="text-dark" for="exampleInputEmail1">Email address</h4>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">your email is secure</small>
  </div>
  
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <h4 class="text-dark" class="form-check-label" for="exampleCheck1">Check me out</h4>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


  
<script>
  $(document).ready(function(){
    $('#myform').submit(function(e){
        e.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        $.ajax({
            url: 'process.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(data){
                console.log(data);
                alert(data);
            }
        })
    })
})  

</script>


</body>
</html>
