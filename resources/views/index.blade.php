<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>Example highcharts.</title>
    </head>
    <body>
        <h1>Example Graph</h1>
        <div>
          {!!$data!!}
        </div>
        <div>
          <h2>Document</h2>
          'title' => 'Income',<br />
          'subtitle' => 'Student income',<br />
          'categories' => "['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']",<br />
          'unit' => 'Bath',<br />
          'series' =>"[{name:'Student1',data:[50,100,60,40,70,102,50]},{name:'Student2',data:[10,20,30,40,50,60,70]}]"
        </div>
    </body>
</html>
