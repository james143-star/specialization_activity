<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row pb-4">
            <div class="col">
                <div class="card border border-success">
                    <div class="card-header bg-success">
                        Act 1
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Sign Up</h5>
                        <form method="post">
                            <div class="modal-body">
                                <div class="form-group container">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="Enter Username">
                                </div>
                                <div class="form-group container">
                                    <label>Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-outline-primary">Submit</button>

                            </div>
                            <div class="container border border-dark">
                                <?php
                                if (isset($_POST['submit'])) {
                                    echo "<h1 class='text-success'>Welcome " . $_POST['username'] . "!" . "</h1>";
                                    echo "<p class='text-info'>Email: " . $_POST['email'] . "</p>";
                                }
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border border-success">
                    <div class="card-header bg-success">
                        Act 2
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">COMPUTATION</h5>
                        <form method="post">
                            <div class="modal-body">
                                <div class="form-group container">
                                    <label>First Number</label>
                                    <input type="text" name="num1" class="form-control" placeholder="Enter First Number">
                                </div>
                                <div class="form-group container">
                                    <label>Second Number</label>
                                    <input type="text" name="num2" class="form-control" placeholder="Enter Second Number">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="add" class="btn btn-outline-primary">Compute</button>
                            </div>

                            <div class="container border border-dark">
                                <?php
                                if (isset($_POST['add'])) {
                                    $num1 = $_POST['num1'];
                                    $num2 = $_POST['num2'];
                                    $sum = $num1 + $num2;
                                    if ($num1 == $num2) {
                                        echo ("<h3 class='text-primary text-center'>Triple the sum because the two Numbers have the same value:" . "</h3>");
                                        echo ("<h4 class='text-'>" . $num1 . " + " . $num2 . " = " . $sum * 3) . "</h4>";
                                    } else {
                                        echo ("<h3 class='text-primary text-center'>Addition:" . "</h3>");
                                        echo ("<h4 class='text-'>" . $num1 . " + " . $num2 . " = " . $sum) . "</h4>";
                                    }
                                }
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pb-4">
            <div class="col">
                <div class="card border border-success">
                    <div class="card-header bg-success">
                        Act 3
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Nested Loop</h5>
                        <form method="post">
                            <div class="modal-body">
                                <div class="form-group container">
                                    <label>Range *</label>
                                    <input type="text" name="range" class="form-control" placeholder="Enter A Number">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="nested" class="btn btn-outline-info">Nested</button>
                            </div>
                            <div class="container border border-dark">
                                <?php
                                if (isset($_POST['nested'])) {
                                    $range = $_POST['range'];

                                    for ($x = 1; $x <= $range; $x++) {
                                        for ($y = 1; $y <= ($x > $range / 2 ? $range - $x : $x); $y++) {
                                            echo ("* ");
                                        }
                                        echo ("<br>");
                                    }
                                }
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border border-success">
                    <div class="card-header bg-success">
                        Act 4
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Prime Number Check</h5>
                        <form method="post">
                            <div class="modal-body">
                                <div class="form-group container">
                                    <label>Enter A Number</label>
                                    <input type="text" name="primeNum" class="form-control" placeholder="Enter A Number">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="prime" class="btn btn-outline-info">Check</button>
                            </div>
                            <div class="container border border-dark">
                            <?php
                                if (isset($_POST['prime'])) {
                                    $primeNum = $_POST['primeNum'];
                                    function primeChecker($primeNum)
                                    {
                                        if ($primeNum == 1)
                                            return 0;
                                        for ($i = 2; $i <= $primeNum / 2; $i++) {
                                            if ($primeNum % $i == 0)
                                                return 0;
                                        }
                                        return 1;
                                    }
                                    $checker = primeChecker($primeNum);
                                    if ($checker == 1)
                                        echo ("<h3 class='text-primary text-center'>" . $primeNum . " is a Prime number" . "</h3");
                                    else
                                        echo ("<h3 class='text-danger'>" . $primeNum . " is not a Prime number" . "</h3>");
                                }
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pb-4">
            <div class="col">
                <div class="card border border-success">
                    <div class="card-header bg-success">
                        Act 5
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Check Letters</h5>
                        <form method="post">
                            <div class="modal-body">
                                <div class="form-group container">
                                    <label>Check Letter</label>
                                    <input type="text" name="uppercase" class="form-control" placeholder="Enter A Word">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="upper" class="btn btn-outline-info">Check</button>
                            </div>
                            <div class="container border border-dark">
                                <?php
                                if (isset($_POST['upper'])) {
                                    $word = $_POST["uppercase"];

                                    if (ctype_lower($word)) {
                                        echo ("<h3 class='text-primary text-center'>" . $word . ' In LowerCase.' . "</h3>");
                                    } else {
                                        echo ("<h3 class='text-primary text-center'>" . $word . ' In Capital.' . "</h3>");
                                    }
                                }
                                ?>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border border-success">
                    <div class="card-header bg-success">
                        Act 6
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Palindrome Check</h5>
                        <form method="post">
                                    <div class="modal-body">
                                        <div class="form-group container">
                                            <label>Palindrome or Not</label>
                                            <input type="text" name="pal" class="form-control" placeholder="Enter A Word">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" name="palindrome" class="btn btn-outline-info">Check</button>
                                    </div>
                                </form>
                            <div class="container border border-dark">
                            <?php
                                if (isset($_POST['palindrome'])) {
                                    $word = $_POST["pal"];
                                    $newWord = "";

                                    for ($i = 0; $i < strlen($word); $i++) {
                                        $newWord = $word[$i] . $newWord;
                                    }

                                    if ($word == $newWord) {
                                        echo ("<h3 class='text-primary text-center'>" . $word . " is a Palindrome!" . "</h3>");
                                    } else {
                                        echo ("<h3 class='text-danger'>" . $word . " is not a Palindrome!" . "</h3>");
                                    }
                                }
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <div class="card border border-success">
                    <div class="card-header bg-success">
                        Act 7
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Birthday Update</h5>
                        <form method="post">
                            <div class="modal-body">
                                <div class="form-group container">
                                    <label>Uppercase or Not</label>
                                    <input type="text" name="uppercase" class="form-control" placeholder="Enter A Word">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="upper" class="btn btn-outline-info">Check</button>
                            </div>
                            <div class="container border border-dark">
                                <?php
                                $my_bDay = mktime(0, 0, 0, 6, 19, 2021);
                                $today = time();
                                $countDown = ($my_bDay - $today);
                                $myDay = (int)($countDown / 86400);
                                echo ("<h3 class='text-info text-center'>Its " . $myDay . " days before my Birthdate!</h3>")
                                ?>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border border-success">
                    <div class="card-header bg-success">
                        Act 8
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Convertion of Romans Number</h5>
                        <form method="post">
                            <div class="modal-body">
                                <div class="form-group container">
                                    <label>Enter Number</label>
                                    <input type="text" name="toRoman" class="form-control" placeholder="Enter A Number">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="convertToRoman" class="btn btn-outline-info">Convert</button>
                            </div>
                            <div class="container border border-dark">
                            <?php
                                if (isset($_POST["convertToRoman"])) {
                                    function convertToRoman($input)
                                    {
                                        $n = intval($input);
                                        $result = '';
                                        $converter = array(
                                            'M' => 1000, 'CM' => 900,
                                            'D' => 500, 'CD' => 400,
                                            'C' => 100, 'XC' => 90,
                                            'L' => 50, 'XL' => 40,
                                            'X' => 10, 'IX' => 9,
                                            'V' => 5, 'IV' => 4,
                                            'I' => 1
                                        );
                                        foreach ($converter as $roman => $value) {
                                            $matches = intval($n / $value);
                                            $result .= str_repeat($roman, $matches);
                                            $n = $n % $value;
                                        }
                                        return $result;
                                    }
                                    $convert = $_POST["toRoman"];
                                    echo ("<h3 class='text-warning text-center'>" . $convert . " is " . convertToRoman($convert) . " in Roman Number!" . "</h3>");
                                }
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>