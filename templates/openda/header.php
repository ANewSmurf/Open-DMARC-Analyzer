<?php
/*
Open DMARC Analyzer - Open Source DMARC Analyzer
templates/openda/header.php
2020 - John Bradley (userjack6880)

Available at: https://github.com/userjack6880/Open-DMARC-Analyzer

This file is part of Open DMARC Analyzer.

Open DMARC Analyzer is free software: you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software 
Foundation, either version 3 of the License, or (at your option) any later 
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY 
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with 
this program.  If not, see <https://www.gnu.org/licenses/>.
*/

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="templates/openda/style.css" />

		<script type="text/javascript" src="templates/openda/gs_sortable.js"></script>
		<title><?php page_title(); ?></title>
	</head>
	<body>
		<div id="header">
			<a href="index.php"><h1 class="header">Open DMARC Analyzer</h1></a>
		</div>
		<?php control_bar(); ?>
		<div id="wrapper">

