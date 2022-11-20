<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <title>Shop Buddy</title>
</head>
<body>
    <div class="container main">
        <div class="header">
            <h1>Food Budgeting App</h1>

            <h3>Use the form below to build your grocery list for the week.</h3>
        </div>

        <div class="grocery-list-form">
            <h3>Add an item to your list:</h3>
            <form action="" method="POST">

                <label for=""></label>
                <input type="text" name="item_name" id="item_name" placeholder="Name of Item" required class="form-control">

                <label for=""></label>
                <input type="number" name="item_price" id="item_price" placeholder="0.00" step="0.01" min="0" required class="form-control">

                <br>

                <input type="submit" class="btn btn-primary" value="Add to List">
            </form>
        </div>

        <div class="grocery-list-display">
            <h3>Your Current Grocery List:</h3>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>