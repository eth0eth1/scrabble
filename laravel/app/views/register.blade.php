<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <style>
        input[type="text"] {
            display: block;
            margin-top: 1em;
        }
        textarea {
            display: block;
            margin-top: 1em;
            border: 1px solid #CCCCCC;
        }
        input[type="password"] {
            margin-top: 1em;
        }
        input[type="submit"] {
            display: block;
            margin-top: 1em;
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
<h1>Player Registration</h1>
{{ Form::open(array('url' => 'register')) }}

     {{ Form::text('name', '', array('placeholder' => 'Name'))}}
 
     {{ Form::text('contact_number', '', array('placeholder' => 'Contact Number'))}}
     
     {{ Form::textarea('bio', '', array('placeholder' => 'Player Bio'))}}

     {{ Form::password('password', array('placeholder' => 'Password')) }}

     {{ Form::password('repeat_password', array('placeholder' => 'Repeat Password')) }}

     {{ Form::submit('Register')}}
{{ Form::close() }}


</body>
</html>