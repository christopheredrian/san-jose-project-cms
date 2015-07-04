<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css"
	type="text/css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<header> </header>
	<nav>
		<button class="btn btn-default" type="submit">Add Alumni</button>
		<button class="btn btn-default" type="submit">Add Lay</button>
		<button class="btn btn-default" type="submit">Export as XLS</button>
		<button class="btn btn-default" type="submit">Backup</button>
		<button class="btn btn-default" type="submit">Restore</button>
	</nav>
	<section>
		<ul class="nav nav-tabs" role="tablist" id="myTab">
			<li role="presentation" class="active"><a href="#alumni"
				aria-controls="alumni" role="tab" data-toggle="tab">Alumni</a></li>
				<li role="presentation"><a href="#lay" aria-controls="lay" role="tab"
					data-toggle="tab">Lay</a></li>
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="alumni">
						<table>
							<caption>Alumni Table</caption>
							<tr>
								<th>Col 1</th>
								<th>Col 2</th>
								<th>Col 3</th>
							</tr>
							<tr>
								<td>cee</td>
								<td>123</td>
								<td>c@c.com</td>
							</tr>
							<tr>
								<td>gG</td>
								<td>321</td>
								<td>G@gma.com</td>
							</tr>
						</table>

					</div>
					<div role="tabpanel" class="tab-pane" id="lay">
						<table>
							<caption>Lay Table</caption>
							<tr>
								<th>Col 1</th>
								<th>Col 2</th>
								<th>Col 3</th>
							</tr>
							<tr>
								<td>cee</td>
								<td>123</td>
								<td>c@c.com</td>
							</tr>
							<tr>
								<td>gG</td>
								<td>321</td>
								<td>G@gma.com</td>
							</tr>
						</table>

					</div>
				</div>
			</section>
			<footer>
				Footer here	
			</footer>

			<script src="js/tabs.js"></script>
		</body>
		</html>