<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="main.css" />
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <div class="d-flex">
            <main class="form-body">
                <h1>Form Pendaftaran</h1>

                <p>Silahkan isikan data diri Anda</p>

                <form action="output.php" method="post">
                    <input type="text" name="user-name[]" placeholder="Nama Depan" />
                    <input type="text" name="user-name[]" placeholder="Nama Belakang" />

                    <textarea class="textarea-field" name="address" cols="38" rows="3">Alamat Anda</textarea>
                    <div class="birthday-form">
                        <h2>Tanggal Lahir</h2>
                        <select name="birthday[]" id="dateOptions" class="selection-box">
                            <option value="31" selected disabled>--tanggal--</option>
                        </select>
                        <select name="birthday[]" id="monthOptions" class="selection-box">
                            <option value="12" selected disabled>--bulan--</option>
                            <!-- <option value="11" onclick="validateBirthday()">12</option> -->
                        </select>
                        <select name="birthday[]" id="yearOptions" class="selection-box">
                            <option value="2022" selected disabled>--tahun--</option>
                            <!-- <option value="12" onclick="theYear()">12</option> -->
                        </select>
                    </div>

                    <div class="gender-form">
                        <input type="radio" name="gender" id="gender-male-radio" value="Laki-laki" />
                        <label for="gender-male-radio">Laki-Laki</label>

                        <input type="radio" name="gender" id="gender-female-radio" value="Perempuan" />
                        <label for="gender-female-radio">Perempuan</label>
                    </div>

                    <div class="hobby-form">
                        <h2>Hobby</h2>
                        <input type="checkbox" name="hobbies[]" id="reading" value="Membaca" />
                        <label for="reading">Membaca</label>
                        <input type="checkbox" name="hobbies[]" id="workout" value="Olahraga" />
                        <label for="workout">Olahraga</label>
                        <input type="checkbox" name="hobbies[]" id="singing" value="Menyanyi" />
                        <label for="singing">Menyanyi</label>
                    </div>

                    <button type="submit">Submit</button>
                </form>
            </main>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>