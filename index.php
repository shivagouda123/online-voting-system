<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP voting System</title>
    <!-- Bootstrap code-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body class="bg-dark">
    <h1 class="text-info text-center p-3">Voting System</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Login</h2>
        <div class="container text-center">
            <form action="./actions/login.php" method="POST">
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto"  name="username" placeholder="Enter your username" required="required" autocomplete="on">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto"  name="mobile" placeholder="Enter your mobile number" required="required" autocomplete="on" maxLength="10" minLength="10">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto"  name="password" placeholder="Enter your password" required="required" autocomplete="on" >
                </div>
                    <div class="mb-3">
                        <select name="std" class="form-select w-50 m-auto">
                            <option value="Group">Group</option>
                            <option value="Voter">Voter</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark my-4" >Login</button>
                    <p>Don't have account? <a href="./partials/registration.php" class="text-white"> Register here</a> </p>
            </form>
        </div>
    </div>
</body>
</html>