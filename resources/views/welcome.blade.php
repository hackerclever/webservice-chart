<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>Web Service Chart</title>
    </head>
    <body>
        <h1>How to</h1>
        <p>
          Send data by post method<br />
          'title' => 'Income',<br />
          'subtitle' => 'Student income',<br />
          'categories' => "['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']",<br />
          'unit' => 'Bath',<br />
          'series' =>"[{name:'Student1',data:[50,100,60,40,70,102,50]},{name:'Student2',data:[10,20,30,40,50,60,70]}]"
        </p>
    </body>
</html>
