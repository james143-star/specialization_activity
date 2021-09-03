<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Specialization Exercise</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container p-5">
        <div class="container mt-5">
            <h1 class="text-primary text-center">
                Specialization Exercises
            </h1>
        </div>
        <div class="container mt-3">
            <div class="row justify-content-around">
                <div class="col-5 p-3 border border-dark mb-5 mr-3 ">
                    <div class="text-center"> <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#displayUser">
                            Sign Up
                        </button>
                    </div>
                    <div class="modal fade" id="displayUser" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Log In</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
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
                                        <button type="submit" name="submit" class="btn btn-outline-info">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-2">
                        <div class="card">
                            <div class="card-body border border-primary">
                                <?php
                                if (isset($_POST['submit'])) {
                                    echo "<h1 class='text-success'>Welcome " . $_POST['username'] . "!" . "</h1>";
                                    echo "<p class='text-info'>Email: " . $_POST['email'] . "</p>";
                                }
                                ?>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-5 p-3 border border-dark mb-5 mr-3 ">
                    <div class="text-center"> <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#computeTwoNumbers">
                            Compute the Sum
                        </button>
                    </div>
                    <div class="modal fade" id="computeTwoNumbers" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Numbers</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
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
                                        <button type="submit" name="add" class="btn btn-outline-info">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-2">
                        <div class="card">
                            <div class="card-body border border-primary">
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
                        </div>

                    </div>
                </div>
                <div class="col-5 p-3 border border-dark mb-5 mr-3 ">
                    <div class="text-center">
                        <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#nestedLoop">Nested Loop</button>
                    </div>
                    <div class="modal fade" id="nestedLoop" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Nested Loop</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post">
                                    <div class="modal-body">
                                        <div class="form-group container">
                                            <label>Range of The Loop</label>
                                            <input type="text" name="range" class="form-control" placeholder="Enter A Number">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" name="nested" class="btn btn-outline-info">Nested</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-2">
                        <div class="card">
                            <div class="card-body border border-primary">
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
                        </div>

                    </div>
                </div>
                <div class="col-5 p-3 border border-dark mb-5 mr-3 ">
                    <div class="text-center">
                        <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#primeOrNot">Prime or Not</button>
                    </div>
                    <div class="modal fade" id="primeOrNot" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Prime Number or Not</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
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
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-2">
                        <div class="card">
                            <div class="card-body border border-primary">
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
                        </div>

                    </div>
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="col-5 p-3 border border-dark mb-5 mr-3 ">
                    <div class="text-center">
                        <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#uppercaseChecker">Uppercase Checker</button>
                    </div>
                    <div class="modal fade" id="uppercaseChecker" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Uppercase Checker</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
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
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-2">
                        <div class="card">
                            <div class="card-body border border-primary">
                                <?php
                                if (isset($_POST['upper'])) {
                                    $word = $_POST["uppercase"];

                                    if (ctype_lower($word)) {
                                        echo ("<h3 class='text-primary text-center'>" . $word . ' is in lowercase letters.' . "</h3>");
                                    } else {
                                        echo ("<h3 class='text-primary text-center'>" . $word . ' is in uppercase letters.' . "</h3>");
                                    }
                                }
                                ?>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-5 p-3 border border-dark mb-5 mr-3 ">
                    <div class="text-center">
                        <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#palindromeChecker">Palindrome Checker</button>
                    </div>
                    <div class="modal fade" id="palindromeChecker" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Palindrome Checker</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
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
                            </div>
                        </div>
                    </div>

                    <div class="container mt-2">
                        <div class="card">
                            <div class="card-body border border-primary">
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
                        </div>

                    </div>
                </div>
                <div class="col-5 p-3 border border-dark mb-5 mr-3 ">
                    <div class="text-center">
                        <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#bDayCountDown">Birthday Countdown</button>
                    </div>
                    <div class="modal fade" id="bDayCountDown" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Birthday Countdown</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group container">
                                        <?php
                                        $my_bDay = mktime(0, 0, 0, 12, 22, 2021);
                                        $today = time();
                                        $countDown = ($my_bDay - $today);
                                        $myDay = (int)($countDown / 86400);
                                        echo ("<h3 class='text-info text-center'>Its " . $myDay . " days before my Bornday 🎂🎂🎂!</h3>")
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5 p-3 border border-dark mb-5 mr-3 ">
                    <div class="text-center">
                        <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#romanConverter">Roman Numerals Converter</button>
                    </div>
                    <div class="modal fade" id="romanConverter" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Roman Numerals Converter</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post">
                                    <div class="modal-body">
                                        <div class="form-group container">
                                            <label>Nnumber to Convert</label>
                                            <input type="text" name="toRoman" class="form-control" placeholder="Enter A Number">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" name="convertToRoman" class="btn btn-outline-info">Convert</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-2">
                        <div class="card">
                            <div class="card-body border border-primary">
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
                                    echo ("<h3 class='text-primary text-center'>" . $convert . " is " . convertToRoman($convert) . " in Roman Number!" . "</h3>");
                                }
                                ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>