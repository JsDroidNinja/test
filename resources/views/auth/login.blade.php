<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="form" method="post" action="{{route('login')}}">
        @csrf()
       <div class="form-group">
           <input type="email" name="email" class="form-control">
       </div>
       <div class="form-group">
        <input type="password" name="password" id="password" class="form-control">
       </div>
       <input type="submit" class="btn"/>
    </form>
</body>
</html>