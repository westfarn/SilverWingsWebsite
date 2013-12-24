<?PHP
//start session
session_start();

//include information to connect to database with
require_once 'ConnectDB.php';

//Connect to MySQL Server
$con = mysql_connect($host, $username, $password) or die('Failed to connect to server: ' . mysql_error());

//Select database
$db = mysql_select_db($database) or die("Unable to select database");

//create query
$qry = "SELECT * FROM runnerInfo";

//All the data is saved in $result
$result = mysql_query($qry);


$index = 0;
while($row = mysql_fetch_assoc($result)) 
{
	 $array[$index] = $row;
	 $index++;
	 
}

//This variable saves the number of rows (or arrays) in $array
$row = mysql_num_rows($result);





mysql_close();

echo('     end');
?>

<html>
	<head>
		<script type="text/javascript">
			var data = <?PHP echo json_encode($array);?>;
			var row = <?PHP echo $row;?>;
			
		    function buildDiv(){
				//data[0] is the first array
				//data[1] is the second array
				for(var i=0; i<row; i++){
					var bibNumber = data[i].BibNumber;
					var firstName = data[i].firstName;
					var lastName = data[i].lastName;
					var race = data[i].race;
					var major = data[i].Major;
					var org = data[i].Orginization;
					var img = data[i].image;
					var descript = data[i].Description;
					
					var string = "div" + i;
					alert(string);
					var divTag = document.createElement(string);
					
					//divTag.id = "div" + i;
					divTag.setAttribute("width","200px");
					divTag.setAttribute("height","200px");
					divTag.setAttribute("color","yellow");
					divTag.innerHTML = "This HTML Div tag created using Javascript DOM dynamically.";
					document.body.appendChild(divTag);
					
				}

			}
		</script>
	</head>
	<body>
		<div>
			this is my div
		</div>
		<div type="button" onClick="buildDiv()" value="Build Profiles">
			Build Profiles --- Click Me----
		</div>
	</body>
</html>