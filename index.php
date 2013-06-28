<!doctype html>
<html>
	<head>
		<title>Vezbanje PHP MySql</title>
	
	<style>
	ul {
		list-style-type: none;
	}
	li {
		float: left;
		padding: 10px;
		background-color: #ccc;
	}
	.clear {
		clear:both;
	}
	td {
		padding: 10px 80px;
	}

	td img {
		height: 100px;
	}
	</style>
	</head>

	<body>
		<ul>
			<li><a href="#">Svi filmovi</a></li><!-- OVO LISTA SVE FILMOVE U DONJOJ TABELI --> 
			<li><a href="#">Strani</a></li><!-- OVO LISTA SAMO STRANE U  DONJOJ TABELI --> 
			<li><a href="#">Domaci</a></li>
			<li><a href="#">Unos novog filma</a></li><!-- OVO IZBACUJE FORMULAR ZA UNOS NOVOG --> 
		</ul>
	<div class="clear"></div>
	<table>
		<thead>
			<tr>
				<th>Rbr</th>
				<th>Naziv Filma</th>
				<th>Slika</th>
				<th>Reditelj</th>
				<th>Glumci</th>
				<th>Godina</th>
				<th>Kategorija</th>
				<th>Akcije</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Shaun of the Dead</td>
				<td><img src="images/shawn.jpg" alt=""></td>
				<td>Edgar Wright</td>
				<td>Simon Pegg, Kate Ashfield, Nick Frost</td>
				<td>2004</td>
				<td>Strani</td>
				<td><a href="">Edit</a> | <a href="">Delete</a></td>
			</tr>
		</tbody>
	</table>
	</body>
</html>