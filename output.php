<?php

$fieldNameArr = ["Nama Lengkap", "Alamat", "Tanggal Lahir", "Jenis Kelamin", "Hobby"];
$singleDataArr = ['address', 'gender'];
$multipleDataArr = ['user-name', 'birthday', 'hobbies'];
$formData = ['user-name', 'address', 'birthday', 'gender', 'hobbies'];


// check if the variable already exist
function checkVarExistence($arrData)
{
    $confirmedRegisterDataArr = [];
    foreach ($arrData as $a) {
        if (isset($_POST[$a])) {
            array_push($confirmedRegisterDataArr, $a);
        }
    }
    // var_dump($confirmedRegisterDataArr);
    return $confirmedRegisterDataArr;
}

// make an associative array
function makeAssocArray($keyArr, $valueArr)
{
    for ($i = 0; $i < count($keyArr); $i++) {
        if ($i == 0) {
            // initializing associative array and assign first key and value.
            $assocArray = [];
            $assocArray[$keyArr[$i]] = $valueArr[$i];
        } else {
            $assocArray[$keyArr[$i]] = $valueArr[$i];
        }
    }

    return $assocArray;
}





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <div class="d-flex">
            <main class="form-body pl-4">
                <h1>Form Pendaftaran</h1>
                <p>Isian dari form pendaftaran sebelumnya</p>
                <table>
                    <?php
                    $confirmedFormData = checkVarExistence($formData);
                    $confirmedFormDataAssoc = makeAssocArray($fieldNameArr, $confirmedFormData);
                    foreach ($confirmedFormDataAssoc as $key => $value) {
                        if (is_array($_POST[$value])) {
                            // Check if value is an element of $multipleDataArr.
                            if (in_array($value, $multipleDataArr)) {
                                // This variable will store an iterated and concated into one single string so it can be printed by echo (FYI, you can't print an array using echo :)).
                                $data = '';
                                // Iterate $multipleDataArr to get index references.
                                for ($x = 0; $x < count($multipleDataArr); $x++) {
                                    // Check if value of $value is equival with value of $multipleDataArr on index $x, if so it's mean value of $value is refering to an array on $_POST[$value].
                                    if ($value == $multipleDataArr[$x]) {
                                        // If you want hobbies doesn't put coma after the last hobbies's value use/uncomment this block of code. Ex output: Find a waifu, get Lolies, Run from reality.
                                        for ($y = 0; $y < count($_POST[$value]); $y++) {
                                            if ($y == count($_POST[$value]) - 1) {
                                                $data .= $_POST[$value][$y];
                                            } else {
                                                ($value == 'hobbies') ? $data .= $_POST[$value][$y] . ', ' : $data .= $_POST[$value][$y] . ' ';
                                            }
                                        }

                                        // // If you want to put coma after the last hobbies's value use/uncomment this block of code. Ex output: Find a waifu, get Lolies, Run from reality, (Doesnt't it weird :V). Also it makes extra space in birtday value
                                        // for ($y = 0; $y < count($_POST[$value]); $y++) {
                                        //     ($value == 'hobbies') ? $data .= $_POST[$value][$y] . ', ' : $data .= $_POST[$value][$y] . ' ';
                                        // }

                                        //Delete first element of array $multipleDataArr so it doesn't count again for loop.
                                        array_shift($multipleDataArr);
                                    }
                                }
                                echo "<tr><td>" . $key . "</td><td>: " . $data . "</td></tr>";
                            }
                        } else {
                            echo "<tr><td>" . $key . "</td><td>: " . $_POST[$value] . "</td></tr>";
                        }
                    }
                    ?>
                </table>
            </main>
        </div>
    </div>

</body>

</html>