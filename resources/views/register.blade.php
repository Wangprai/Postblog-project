<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    
    <div class="container">
        <div class="card">
            <h1 class="text-center">Register</h1>
            <div class="mb-3">
                <label for="firstname" name="firstname">Firstname: </label>
                <input type="text" class="form-control" required>

                <label for="surname" name="surname">Surname: </label>
                <input type="text" class="form-control" required>

                <label for="nickname" name="nickname">Nickname: </label>
                <input type="text" class="form-control" required>

                <label for="age" name="age">Age: </label>
                <input type="" class="form-control" required>

                <label for="gender" name="gender">Gender: </label>

                
                <label for="password" name="password">Password: </label>
                <input type="password" class="form-control" required>

                <label for="confirm-password" name="confirm-password">Confirm Password: </label>
                <input type="password" class="form-control" required>
            </div>

            <form action="#" method="">
                @csrf
               <button type="submit" class="btn btn-primary">Confirm</button> 
            </form>
            
            <a href="#" class="btn btn-secondary mb-3">Back</a>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

</html>