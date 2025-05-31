<html>
<head>
<style>
.dbresult,.dbresult td,.dbresult th
{
border:1px solid black;
border-collapse: collapse;
padding: 8px;
}
.dbresult
{
width: 800px;
margin: auto;
}
.dbresult tr:nth-child(odd)
{
background-color: #b2d0d6;
}
.dbresult tr:nth-child(even)
{
background-color: lightcyan;
}
</style>
</head>
<body>
<button type="button" id="btn-box" class="genric-btn successborder"
onclick="window.print()"
style="position:absolute;left:40%;bottom:0;font-size:24px;padding:5px
12px;background-color:green;"> Download </button>
<button type="button" id="btn-box" class="genric-btn successborder" onclick="goBack()" style="position:absolute;left:50%;bottom:0;font-size:24px;padding:5px 12px;background-color:red;"> Exit </button>
<script>
function goBack()
{
window.history.back();
}
</script>
</body>
</html>
<?php
$link = mysqli_connect('localhost','root','','ims');
if ( !$link ) { die('connection error' . mysqli_connect_error()); }
$query = "SELECT * from company_details";
$result = mysqli_query($link, $query);
$numrow = mysqli_num_rows($result);
if ( $numrow>0 )
{
echo '<table class="dbresult">';
echo '<tr>';
echo '<th>Update_id</th>';
echo '<th>Company_name</th>';
echo '<th>Company_email</th>';
echo '<th>Company_address</th>';
echo '<th>Company_city</th>';
echo '<th>Company_country</th>';
echo '<th>Employee_id</th>';
echo '<th>Employee_name</th>';
echo '<th>Employee_email</th>';
echo '<th>Employee_phone</th>';
echo '<th>Date_updated</th>';
echo '</tr>';
while ($row = mysqli_fetch_assoc($result))
{
echo '<tr>';
echo '<td>' .$row['update_id']. '</td>';
echo '<td>' . $row ['co_name'] . '</td>';
echo '<td>' . $row ['co_email'] . '</td>';
echo '<td>' . $row ['co_address'] . '</td>';
echo '<td>' . $row ['co_city'] . '</td>';
echo '<td>' . $row ['co_country'] . '</td>';
echo '<td>' . $row ['co_id'] . '</td>';
echo '<td>' . $row ['ename'] . '</td>';
echo '<td>' . $row ['co_umail'] . '</td>';
echo '<td>' . $row ['co_phone'] . '</td>';
echo '<td>' . $row ['date_updated'] . '</td>';
echo '</tr>';
}
echo '</table>';}else { echo 'Record not found'; }
?>
