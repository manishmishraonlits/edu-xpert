<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Form</title>
    <link rel="stylesheet" href="stu-enr-form.css">
</head>

<body>

    <head>
    <?php include 'header.php'?>
    <?php include 'headnav.php'?>
    </head>

    <main>
        <div class="tittle"><b>Student Enrollment Form</b></div>
        <div class="container">

            <div class="content">

                <form action="action.php" method="POST">
                    <div class="input-tittle"><b>Personal Details :- </b></div>
                    <div class="input-box">
                        <div class="input">
                            <label for="name">Student Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter Student Full Name">
                        </div>
                        <div class="input">
                            <label for="fName">Father's Name</label>
                            <input type="text" name="fName" id="fName" placeholder="Enter Father's Full Name">
                        </div>
                        <div class="input">
                            <label for="mName">Mother Name</label>
                            <input type="text" name="mName" id="mName" placeholder="Enter Mother Full Name">
                        </div>
                    </div>
                    <div class="input-box ipb2">
                        <div class="input">
                            <label for="dob">Date of Birth</label>
                            <input type="date" name="dob" id="dob">
                        </div>
                        <div class="input">
                            <label for="gender">Select Gender</label>
                            <select name="gender" id="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="input">
                            <label for="aNumber">Adhar Number</label>
                            <input type="number" name="aNumber" id="aNumber" placeholder="0000 0000 0000">
                        </div>

                    </div>
                    <div class="input-tittle"><b>Address :- </b></div>
                    <div class="input-box">
                        <div class="input">
                            <label for="scName">Street/Village Name</label>
                            <input type="text" name="svName" id="svName" placeholder="Enter Street Name">
                        </div>
                        <div class="input">
                            <label for="cName">City Name</label>
                            <input type="text" name="cName" id="cName" placeholder="Enter City Name">
                        </div>
                        <div class="input">
                            <label for="dName">District Name</label>
                            <input type="text" name="dName" id="dName" placeholder="Enter District Name">
                        </div>
                    </div>
                    <div class="input-box ipb2">
                        <div class="input">
                            <label for="state">Select State</label>
                            <select name="state" id="state">
                                <option value="bihar">Bihar</option>
                                <option value="jharkhand">Jharkhand</option>
                                <option value="more">More</option>
                            </select>
                        </div>
                        <div class="input">
                            <label for="country">Select Country</label>
                            <select name="country" id="country">
                                <option value="india">India</option>
                                <option value="Chine">Chine</option>
                                <option value="more">More</option>
                            </select>
                        </div>
                        <div class="input">
                            <label for="pCode">Pin Code</label>
                            <input type="number" name="pCode" id="pCode" placeholder="123456">
                        </div>

                    </div>

                    <div class="input-tittle"><b>Contact Details :- </b></div>
                    <div class="input-box">
                        <div class="input">
                            <label for="pNumber">Phone Number</label>
                            <input type="number" name="pNumber" id="pNumber" placeholder="0123456789">
                        </div>
                        <div class="input">
                            <label for="fNumber">Father's Phone Number</label>
                            <input type="number" name="fNumber" id="fNumber" placeholder="0123456789">
                        </div>

                        <div class="input">
                            <label for="eaddress">Email Address</label>
                            <input type="text" name="eaddress" id="eaddress" placeholder="abc@gmail.com">
                        </div>

                    </div>
                    <div class="input-tittle"><b>Courses :- </b></div>
                    <div class="input-box">
                        <div class="input ipc">
                            <label for="course">Select Course</label>
                            <select name="course" id="course">
                                <option value="iit jee">IIT JEE</option>
                                <option value="nimcet">NIMCET</option>
                                <option value="python">PYTHON</option>
                                <option value="more">More</option>
                            </select>
                        </div>
                    </div>
                    <div class="submit">
                        <button>Submit</button>
                    </div>

                </form>

            </div>

        </div>


    </main>
    <footer>
       <?php include 'footer.php' ?>
    </footer>


</body>

</html>