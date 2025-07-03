<html>
<head>
<style type="text/css">
.table
{
    border-collapse:collapse; 
    width:100%;
    color:black;
    font-size:250%;
    text-align:center
}
.th
{
    background-color:green
}
</style>
</head>
<body style="color:green" bgcolor="orange">
<h1 align="center" style="color:green">WELCOME TO VIGNAHARTA SHOP</h1>
     <table >
       <tr valign="top">
         <td>
           <form method="get" action="Detail.html">
             <input type="submit" style="float:left;background-color:white;font-size:200%;color:blue;text-decoration:underline;height:50px;width:300px" value="My Details" >
           </form>
         </td>
         <td> 
           <form method="get" action="homepage.html">
              <input type="submit" style="margin-left:0px;background-color:white;font-size:200%;color:blue;text-decoration:underline;height:50px;width:300px" value="HOMEPAGE" >  
           </form>
         </td>
         <td>
           <form method="get" action="cart2.php">
              <input type="submit" style="margin-left:0px;background-color:light-grey;font-size:200%;color:blue;text-decoration:underline;height:50px;width:300px" value="SHOPPING CART"> 
            </form>
         </td>
         <td> 
           <form method="get" action="order.html">
              <input type="submit" style="margin-left:0px;background-color:white;font-size:200%;color:blue;text-decoration:underline;height:50px;width:300px" value="ORDERS"> 
            </form>
         </td>
         <td>
           <form method="get" action="feedback.html">
              <input type="submit" style="margin-left:0px;background-color:white;font-size:200%;color:blue;text-decoration:underline;height:50px;width:280px" value="FEEDBACK"> 
            </form>
         </td>
       </tr>
      </table>






<form >

<H1 align="center"> List of item in Cart:</h1> 
</form>
 

<table class="table" >
<tr class="th">
<th>Sr.No</th>
<th> Date</th>
<th>Prodcut</th>
<th> Price</th>
<th> Quantity</th>
<th> Total Rupees </th>
<th></th>
</tr>

<tr>
<td>1</td>
<td>12/12/23</td>
<td>Motichur Laddu</td>
<td>349.00</td>
<td>4 </td>
<td>1396</td>
<td>
<form method="get" action="cart4.php">
<input type="submit" style="height:30px;width:150px;background-color:red;color:white;margin-top:20px;font-size:20px" value="REMOVE">
</form>

</td>
</tr>




</table>

<form method="get" action="order.html">
<input type="submit" value="Place an Order" style="height:50px;width:250px;background-color:yellow;margin-left:625px;margin-top:50;font-size:30px">
</form>

<form method="get" action="homepage.html">
<input type="submit" value="Back" style="height:50px;width:250px;background-color:blue;margin-left:625px;margin-top:40;font-size:30px">
</form>
</body>
</html>