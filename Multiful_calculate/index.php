<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
    <body>
        
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <form action = "./env.php" method = "post">
                            <div class="mt-5">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name" name = "name">
                            </div>
                            <div class= "mt-3">
                                <label for="Password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="Password" placeholder = "Enter your password" name = "password">
                            </div>
                            <div class="mt-3 mb-4">
                                <label for="number" class="form-label">Number</label>
                                <input type="number" class="form-control" id= "number" placeholder = "Enter the Integer Number" required name = "number">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </body>
</html>