<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cloudmanic Labs // Benchmarking tool</title>

<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}

</style>
</head>
<body>

<h1>Cloudmanic Labs // Benchmarking Tool</h1>

<p>This page is designed to be run from a tool like Apache Benchmark (ab).</p>

<p>We run this page as a test to see speed of our server. Below is an example of how you could test this.</p>
<code> ab -n 100 -c 10 -e data.csv  http://yourdomain.com</code>

<p>Make sure you set your config/database.php and create the database.</p>

<p>Don't forget to check us out at <a href="http://cloudmanic.com">Cloudmanic Labs</a></p>


<p><br />Page rendered in {elapsed_time} seconds and used {memory_usage} in memory</p>

</body>
</html>