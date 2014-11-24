<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign-Up: A Laravel Form</title>
    <style>
        label {
            display: block;
            padding-top: 1em;
        }
        input[type="submit"] {
            display: block;
            margin-top: 2em;
        }
        textarea {
            display: block;
            margin-bottom: 1em;
        }
        input[type="checkbox"] {
            display: inline-block;
            margin-top: 1em;
        }
        label[for="agree"] {
            display: inline;
        }

    </style>
</head>

<body>
<h1>Login</h1>
<!-- Login Form -->
{{ Form::open(array('url' => 'login')) }}

     {{ Form::text('name', '', array('placeholder' => 'Name'))}}
     {{ Form::password('password', array('placeholder' => 'Password')) }}
     {{ Form::submit('Login')}}

{{ Form::close() }}


</body>
</html>