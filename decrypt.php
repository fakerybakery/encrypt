<?php
$encryptedstring = $_POST['string'];
$password = $_POST['password'];
if (openssl_decrypt($encryptedstring,"AES-256-CBC",$password)) {
    $decrypted_string = openssl_decrypt($encryptedstring,"AES-256-CBC",$password);
} elseif (openssl_decrypt($encryptedstring,"AES-128-ECB",$password)) {
    $decrypted_string = openssl_decrypt($encryptedstring,"AES-128-ECB",$password);
} else {
    $decrypted_string = 'Incorrect password!';
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Decrypted String</title>
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
    <h1>Decrypt</h1>
    <button onclick="window.location.replace('/')">Back</button>
    <br>
    <textarea type="text" readonly onclick="selectandcopy()" id="m"><?php echo $decrypted_string;?></textarea>
    <script>
        function selectandcopy() {
            document.getElementById('m').select();
            document.execCommand('copy');
        }
    </script>
</body></html>