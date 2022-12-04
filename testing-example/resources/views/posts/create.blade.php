<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create post</title>
</head>
<body>
    <form method="POST" action={{ route('poststore') }}>

        @csrf

        <input type='text'
               name='title'
               
               />

        <input type='text'
               name='content'
               />

        <input type='submit'
               value='create post'
               />
    </form>
</body>
</html>