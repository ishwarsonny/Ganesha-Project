<html>
<head>
<style type="text/css">
.radio
{
margin-left:420px;
font-size:30px
}
.table
{
margin-top:20px;
}
</style>
</head>
<body bgcolor="skyblue">
<form  method="get" action="thank.html">
<h1 align="center" style="font-size:80px;text-decoration:underline;color:black">FEEDBACK FORM</h1>
<p align="center" style="font-size:15px;margin-top:60px">Please enter your feedback below</p>
<p class="radio">
How do you rate your overall experience?</p>
<input type="radio" value="Good" name="r1" style="font-size:15px;margin-left:420" >Good
<input type="radio" value="Average" name="r1" style="font-size:15px;margin-left:50">Average
<input type="radio" value=Bad" name="r1" style="margin-left:50">Bad
<table class="table">
<tr>
<td>
<p  class="radio">
Full Name*<br>
<input type="text" style="width:300px;height:30px" name="t1">
</p>
</td>
<td>
<p style="margin-left:50px;font-size:30px">
Email*<br>
<input type="email" style="margin-left:0px;width:300px;height:30px" name="e1">
</p>
</td>
</tr>

<tr>
<td>
<p  class="radio">
Age*<br>
<input type="number" style="width:300px;height:30px" name="n1">
</p>
</td>
<td>
<p style="margin-left:50px;font-size:30px">
Phone*<br>
<input type="number" style="margin-left:0px;width:300px;height:30px" name="n2">
</p>
</td>
</tr>

</table>

<p  class="radio">
Message*<br>
<textarea style="width:660px;height:120px" col="30" row="5" placeholder="Write your message here"></textarea>

<input type="submit" value="SUBMIT" style="height:30px;width:660px;background-color:blue;margin-top:30px;font-size:15px">
</p>




</body>
</html>