<!DOCTYPE html>
<html>
    <head>
        <title>Email Form</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>

    </head>
    <body>
        <div class="container"> 
            <div class="alert alert-secondary" role="alert">
                <h4 class="sent-notification"></h4>
            </div>

            <form id="myForm">
                <h2>Send an Email</h2>

                <div class="form-group">
                <label>Name</label>
                <input class="form-control" id="name" type="text" placeholder="Enter Name">
                </div>

                <div class="form-group">
                <label>Email</label>
                <input class="form-control" id="email" type="text" placeholder="Enter Email">
                </div>

                <div class="form-group">
                <label>Subject</label>
                <input class="form-control" id="subject" type="text" placeholder=" Enter Subject">
                </div>

                <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" id="body" rows="5" placeholder="Type Message"></textarea>
                </div>

                <button class="btn btn-primary" type="button" onclick="sendEmail()" value="Send An Email">Submit</button>
            </form>
        </div>
        <script src="script.js"></script>
    </body>
</html>


