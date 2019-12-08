<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comment System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="container">
        <!-- body heading -->
        <div class="row">
            <div class="col-md-12">
                <u>
                    <h2>Comment & Reply using PHP & Ajax</h2>
                    <!-- this is sample commemt -->
                </u>
            </div>
        </div>
        <!-- comment form -->
        <div class="row">
            <div class="col-md-12">
                <form action="#" method="post" id="comment_form">
                    <input type="text" name="parent_id" id="parent_id" value="0" hidden>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <label>Comment</label>
                        <textarea name="comment" id="comment" cols="30" rows="4" class="form-control" placeholder="Write your comment" required></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <hr>
        
        <!-- comment load area -->
        <h5>All Comments</h5>
        <div class="row">
            <div class="col-md-12" id="show_comment">
            </div>
        </div>

    </div>

    <!-- Scripts Link -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="js/myjs.js"></script>
</body>
</html>