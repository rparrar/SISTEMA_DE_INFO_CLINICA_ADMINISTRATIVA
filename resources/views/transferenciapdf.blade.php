<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Datos transferencia Bancaria</title>
    <style>
        .divTable{
	display: table;
	width: 100%;
	text-align:center;
}
.divTableRow {
	display: table-row;
}
.divTableHeading {
	background-color: #EEE;
	display: table-header-group;
}
.divTableCell, .divTableHead {
	border: 1px solid #999999;
	display: table-cell;
	padding: 3px 10px;
}
.divTableHeading {
	background-color: #EEE;
	display: table-header-group;
	font-weight: bold;
}
.divTableFoot {
	background-color: #EEE;
	display: table-footer-group;
	font-weight: bold;
}
.divTableBody {
	display: table-row-group;
}
    </style>
  </head>
  <body>

    <p style="text-align:center;"><b>DATOS PARA TRANSFERENCIA BANCARIA</b><br><br></p>

<div class="divTable" style="border: 1px solid #000;">
<div class="divTableBody">
<div class="divTableRow">
<div class="divTableCell"><b>NOMBRE TITULAR</b></div>
<div class="divTableCell">POSTA LO MATTA S.A.</div>
</div>
<div class="divTableRow">
<div class="divTableCell"><b>RUT</b></div>
<div class="divTableCell">72.624.369-K</div>
</div>
<div class="divTableRow">
<div class="divTableCell"><b>BANCO</b></div>
<div class="divTableCell">ESTADO</div>
</div>
<div class="divTableRow">
<div class="divTableCell"><b>TIPO DE CUENTA</b></div>
<div class="divTableCell">RUT</div>
</div>
<div class="divTableRow">
<div class="divTableCell"><b>NUMERO</b></div>
<div class="divTableCell">72624369</div>
</div>
<div class="divTableRow">
<div class="divTableCell"><b>CORREO ELECTRONICO</b></div>
<div class="divTableCell">{{Auth::user()->email}}</div>
</div>
</div>
</div>

  </body>
</html>
