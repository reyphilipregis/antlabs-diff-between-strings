<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/action.js"></script>

    <title>Antlabs: Difference Between 2 Strings</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 offset-md-12">
                <div id="title-app">
                    <h2>Difference Between 2 Strings</h2>
                </div>
                <div class="card card-body">
                    <div class="form-group">
                        <label for="string1">String 1:</label>
                        <input type="text" class="form-control tbox" placeholder="Enter a string" id="string1" name="string1">
                    </div>
                    <div class="form-group">
                        <label for="string2">String 2:</label>
                        <input type="text" class="form-control tbox" placeholder="Enter a string" id="string2" name="string2">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 offset-md-12">
                <div class="alert alert-success d-none" id="div-display">
                    <h3>Result:</h3>
                    <div id="output"></div>
                </div>
                <div class="alert alert-info d-none" id="div-display-info">
                    <div id="output-info"></div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
