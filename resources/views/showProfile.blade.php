<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Show profile</title>
</head>
<body>

    <div class="container h-100">
            <br>
            <a href="{{ url()->previous() }}" class="btn btn-info">Back</a>

            <div class="row">
                    <div class="col-12">
                        <h1>Details for {{ $result['name'] }}</h1>
                    </div>
                </div>

                <div class="row">
                        <div class="col-12">
                            <img src="{{ "images/".$result['image'] }}" alt="" class="img-thumbnail">
                        </div>
                </div>
            
                <div class="row">
                    <div class="col-12">
                        <p><strong>Name</strong> {{ $result['name'] }}</p>
                        <p><strong>Email</strong> {{ $result['email'] }}</p>
                        <p><strong>Skills</strong> {{ $result['skills'] }}</p>
                        <p><strong>Description</strong> {{ $result['description'] }}</p>
                    </div>
                </div>

                

                
            
                
    </div>
    


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>
