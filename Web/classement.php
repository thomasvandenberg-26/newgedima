<h1 style=" margin-top: 5%; margin-bottom: 5%;">Gedimagination Classement</h1>

<table class="container">
	<thead>
		<tr>
			<th><h1>Nom Realisation</h1></th>
			<th><h1>Score</h1></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Realisation 1</td>
			<td>9518</td>
		
		</tr>
		<tr>
			<td>Realisation 2</td>
			<td>7326</td>
			
		</tr>
		<tr>
			<td>Realisation 3</td>
			<td>4162</td>
			
		</tr>
    <tr>
			<td>Realisation 4</td>
			<td>3654</td>
		</tr>
    <tr>
			<td>Realisation 5</td>
			<td>2002</td>
		
		</tr>
    
	</tbody>
</table>

<style>
    /*	
	Table Responsive
	===================
	Author: https://github.com/pablorgarcia
 */

@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  /* background-color:#1F2739; */
  background-color: #121212;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #0085B2;

}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}


h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: #0085B2;
}

.container td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
	  text-align: left;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #A5FFC2;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #A5FFC9;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #0085B2 -1px 1px, #0085B2 -2px 2px, #0085B2 -3px 3px, #0085B2 -4px 4px, #0085B2 -5px 5px, #0085B2 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}
</style>
