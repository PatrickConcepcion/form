<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .card {
            max-width: 500px;
        }
    </style>
</head>
<body>
    <div class="container mt-3 d-flex justify-content-center">
        <div class="card shadow-lg p-3 w-100">
            <form action="index.php" method="POST" id="form">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" id="name"  class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label>Email Address</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label>Mobile Number</label>
                    <input type="number" id="number" name="number" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label>Date of Birth</label>
                    <input type="date" id="birthdate" name="birthdate" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label>Gender</label>
                    <select name="gender" id="gender" name="gender" class="form-select">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="text-center mt-3">
                    <button class="btn-primary btn-sm">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $('#form').submit(function (e) {
            e.preventDefault()

            var name = $("#name").val()
            var email = $("#email").val()
            var number = $("#number").val()
            var birthdate = $("#birthdate").val()
            var gender = $("#gender").val()
            
            $.ajax({
                type: "POST",
                url: 'server.php',
                data:  {
                    'name': name,
                    'email': email,
                    'number': number,
                    'birthdate': birthdate,
                    'gender': gender
                },
                success: function (result) {
                    console.log(result);
                }
            });
        });
    </script>
</body>
</html>