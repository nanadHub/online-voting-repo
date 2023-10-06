<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        h2{
            text-align: center;
            position: relative;
            z-index: 1;
            margin-bottom: 45px;
        }
        h2::before,
        h2::after {
            content: "";
            display: inline-block;
            width: 23%;
            height: 2px;
            background-color: gray; /* Line color */
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }
        h2::before {
            left: 0;
            z-index: -1;
        }

        h2::after {
            right: 0;
            z-index: -1;
        }

        .container {
            min-width: 400px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: absolute;
            padding: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            text-align: center;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-group img {
            height: 25px;
            display: flex;
            position: absolute;
            top: 1px;
            right: 30px;
            border-bottom-right-radius: 5px;
            border-top-right-radius: 5px;
            background-color: gray;
            padding: 7px;
        }

        label {
            position: absolute;
            left: 40px;
            top: 13px;
            transition: 0.3s;
            pointer-events: none;
        }

        input[type="text"],
        input[type="password"] {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none; /* Remove focus outline */
        }
        input[type="text"]:focus + label,
        input[type="password"]:focus + label,
        input[type="text"]:valid + label,
        input[type="password"]:valid + label {
            top: 1px;
            outline: none;
            transform: translate(0, -50%);
            border-left: 1px solid gray;
            border-right: 1px solid gray;
            font-size: 12px;
            background-color: #fff;
            padding: 0 5px;
        }
        /* Reset label styles for empty fields */
        input[type="text"] + label,
        input[type="password"] + label {
            top: 13px;
            transform: none;
            font-size: 16px;
            background-color: transparent;
            padding: 0;
        }
        .submit{
            padding: 10px;
            margin-top: 5%;
            border-radius: 10px;
            width: 60%;
            background-color: green;
            color: white;
            outline: none;
            border: none;
            font-weight: 600;

        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form id="studentRegistration">
            <div class="form-group">
                <img src="image/user.png">
                <input type="text" id="fullName" required>
                <label for="">Fullname</label>  
            </div>
            <div class="form-group">
                <img src="image/id-card.png">
                <input type="text" id="studentId" required>
                <label for="">Student ID</label>
            </div>
            <div class="form-group">
                <img src="image/padlock.png">
                <input type="password" id="studentPassword" required>
                <label for="">Password</label>
            </div>
            <input type="submit" value="REGISTER" id="submit" class="submit">
        </form>
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>

<script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-app.js";
        import { getDatabase, ref, set } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-database.js";


        // Initialize Firebase
        const firebaseConfig = {
    apiKey: "AIzaSyCZRIRHcYaCw1U4xEz2tH48vT6j5DHkveo",
    authDomain: "icst-login-database.firebaseapp.com",
    databaseURL: "https://icst-login-database-default-rtdb.firebaseio.com",
    projectId: "icst-login-database",
    storageBucket: "icst-login-database.appspot.com",
    messagingSenderId: "506923799330",
    appId: "1:506923799330:web:cfd03cac1662173f704b7b"
  };

        firebase.initializeApp(firebaseConfig);
        var db = firebase.database().ref("studentRegistration");

        document.getElementById("studentRegistration").addEventListener('submit', submitForm);

        async function submitForm(e){
        e.preventDefault();

        var name = getElementVal("fullName");
        var studID = getElementVal("studentId");
        var pass = getElementVal("studentPassword");

        // Check if student ID already exists
        const snapshot = await db.child(studID).once('value');

        if (snapshot.exists()) {
            alert('Student ID is already registered.');
        } else {
            saveMessage(name, studID, pass);
            alert('Registration successful.');
        }
    }

         function saveMessage(name, studID, pass){
        var newContactForm = db.child(studID);

        newContactForm.set({
            name : name,
            studID : studID,
            pass : pass,
        });
    }

        function getElementVal(id){
            return document.getElementById(id).value;
        };
            

</script>
</html>