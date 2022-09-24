<?php
$string_to_encrypt = $_POST['string'];
$password = $_POST['password'];
$encrypted_string=openssl_encrypt($string_to_encrypt,"AES-256-CBC",$password);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Encrypted String</title>
    <style>
        @import url('css/passwordicons.css');
        * {
            font-family: 'Courier', monospace;
            color: white;
            outline: none;
        }
        html {
            background-color: black;
        }
        input,textarea {
            background-color: #101010;
            border: 1px solid white;
            padding: 0.75vh;
        }
        input[type=password] {
            font-family: 'passwordicons' !important;
        }
        button {
            background-color: #101010;
            border: 1px solid white;
            padding: 0.75vh;
            cursor: pointer;
        }
        button:hover {
            background-color: white;
            color: black;
        }
    </style>
</head>

<body>
    <h1>Encrypt</h1>
    <button onclick="window.location.replace('/')">Back</button>
    <br>
    <input type="text" value="<?php echo $encrypted_string;?>" readonly onclick="selectandcopy()" id="m">
    <script>
        function selectandcopy() {
            document.getElementById('m').select();
            document.execCommand('copy');
        }
    </script>
</body></html>