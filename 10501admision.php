<?php

require('fpdf185/fpdf.php');

$pdf = new FPDF();

$pdf->AddPage();

$pdf->SetFont('Arial', '', 8);
$pdf->Image('img/logoc.png', 15, 12, 60, 16);


$pdf->Cell(190, 20, '                                                                                                    ORDEN DE PAGO DE DERECHOS, PRODUCTOS Y APROVECHAMIENTOS', 1, 0,'', 0);
$pdf->Ln(-5);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(190, 15,'                                                                                                                             GOBIERNO DEL ESTADO DE TLAXCALA', 0, 0,'', 0);
$pdf->Ln(4);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(190, 15,utf8_decode('                                                                                                                         SECRETARÍA DE PLANEACIÓN Y FINANZAS'), 0, 0,'', 0);
$pdf->Ln(7);
$pdf->Cell(190, 15,utf8_decode('                                                                                                         UNIVERSIDAD POLITÉCNICA DE TLAXCALA REGIÓN PONIENTE'), 0, 0,'', 0);
$pdf->Ln(17);

$pdf->SetFillColor(0, 137, 59);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(190, 5,'DATOS DEL CONTRIBUYENTE', 0, 0,'C', 1);
$pdf->Ln(6);

$pdf->SetFillColor(255, 255, 255);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 8);

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, 'NOMBRE', 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(58, 5, utf8_decode(': SOCORRO DÍAZ LUNA'), 0, 0);//$query
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, 'FECHA', 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(52, 5,': 2022-11-21', 0, 1);

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, 'FOLIO', 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(58, 5, ': 4042375', 0, 0);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, utf8_decode('ESTADO'), 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(52, 5, ': TLAXCALA', 0, 1);

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, utf8_decode('GÉNERO'), 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(58, 5, utf8_decode(': FEMENINO'), 0, );
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, 'MUNICIPIO', 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(52, 5, utf8_decode(': YAUHQUEMECAN'), 0, 1);

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, 'CURP', 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(58, 5, ': DILS731206MTLZNC04', 0, 0);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, 'COLONIA', 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(52, 5, utf8_decode(': SANTA MARÍA ATLIHUETZIAN'), 0, 1);

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, 'RFC', 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(58, 5, ': DILS731206424', 0, 0);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, 'DOMICILIO', 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(52, 5, utf8_decode(': CRISTOBALITO 69'), 0, 1);

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, utf8_decode('OBSERVACIÓN'), 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(58, 5, utf8_decode(': 6° CUATRIMESTRE'), 0, 0);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, 'C.P.', 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(58, 5, ': 90459', 0, 1);

$pdf->SetFillColor(0, 137, 59);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(190, 5,utf8_decode('CLAVE                                          DESCRIPCIÓN                                          CANTIDAD                PRECIO                 DESCUENTO           IMPORTE'), 0, 1, '',1);

$pdf->SetFillColor(229, 229, 229);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(190, 5,utf8_decode('10501                                   Ficha de Examen de Admisión                                    1                          $250                                                           $250'), 0, 0, '',1);

$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(60, 5, utf8_decode('TIENDAS DE ANTAD'), 0, 0);
$pdf->Cell(58, 5, utf8_decode('INSTITUCIONES BANCARIAS'), 0, 1,'B');

$pdf->SetFont('Arial', '', 8);
$pdf->Cell(25, 5, 'SAMS', 0, 0);
$pdf->Cell(35, 5, 'EXTRA', 0, 0);
$pdf->Cell(25, 5, 'BANCOMER CIE 829315', 0, 1);

$pdf->Cell(25, 5, 'SORIANA', 0, 0);
$pdf->Cell(35, 5, 'ELEKTRA', 0, 0);
$pdf->Cell(25, 5, 'SANTANDER 4836', 0, 1);

$pdf->Cell(25, 5, 'CHEDRAUI', 0, 0);
$pdf->Cell(35, 5, 'SUPERAMA', 0, 0);
$pdf->Cell(25, 5, 'HSBC RAP 2900', 0, 1);

$pdf->Cell(25, 5, 'TRANSFER', 0, 0);
$pdf->Cell(35, 5, 'WALMART', 0, 0);
$pdf->Cell(25, 5, 'SCOTIABANK 3701', 0, 1);

$pdf->Cell(25, 5, 'BANCO AZTECA', 0, 0);
$pdf->Cell(35, 5, 'BODEGA AURERRA', 0, 0);
$pdf->Cell(70, 5, 'BANORTE CEP 2412', 0, 0);
$pdf->Cell(50, 5, 'ESCANEA EL CODIGO QR', 0, 1, 'C');

$pdf->Cell(60, 5, 'FARMACIAS DEL AHORRO', 0, 0);
$pdf->Cell(70, 5, 'CITIBANAMEX 1520 01', 0, 0);
$pdf->Image('img/qr.jpeg', 155, 83, 25, 25);
$pdf->Cell(50, 5, 'PARA VER EL STATUS DE TU PAGO', 0, 1, 'C');
$pdf->Cell(135, 5, '', 0, 0);
$pdf->Cell(200, 5, 'PARA VER EL STATUS DE TU PAGO', 0, 1, 'C');

$pdf->Image('img/barra.jpeg', 12, 120, 80, 12);
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, 'LINEA DE CAPTURA ', 0, 0, '');
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(95, 5, ': 45818404297531100237 ', 0, 0, '');
$pdf->Image('img/250.jpeg', 160, 120, 30, 12);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(1, 5, '(DOCIENTOS CINCUENTA PESOS MEXICANOS)', 0, 0, '');





$pdf->Line(0, 140, 250, 140);
$pdf->Ln(12);






$pdf->SetFont('Arial', '', 8);
$pdf->Image('img/logoc.png', 15, 148, 60, 16);


$pdf->Cell(190, 20, '                                                                                                    ORDEN DE PAGO DE DERECHOS, PRODUCTOS Y APROVECHAMIENTOS', 1, 0,'', 0);
$pdf->Ln(-5);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(190, 15,'                                                                                                                             GOBIERNO DEL ESTADO DE TLAXCALA', 0, 0,'', 0);
$pdf->Ln(4);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(190, 15,utf8_decode('                                                                                                                         SECRETARÍA DE PLANEACIÓN Y FINANZAS'), 0, 0,'', 0);
$pdf->Ln(7);
$pdf->Cell(190, 15,utf8_decode('                                                                                                         UNIVERSIDAD POLITÉCNICA DE TLAXCALA REGIÓN PONIENTE'), 0, 0,'', 0);
$pdf->Ln(17);

$pdf->SetFillColor(0, 137, 59);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(190, 5,'DATOS DEL CONTRIBUYENTE', 0, 0,'C', 1);
$pdf->Ln(6);

$pdf->SetFillColor(255, 255, 255);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 8);

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, 'NOMBRE', 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(58, 5, utf8_decode(': SOCORRO DÍAZ LUNA'), 0, 0);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, 'FECHA', 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(52, 5,': 2022-11-21', 0, 1);

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, 'FOLIO', 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(58, 5, ': 4042375', 0, 0);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, utf8_decode('ESTADO'), 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(52, 5, ': TLAXCALA', 0, 1);

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, utf8_decode('GÉNERO'), 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(58, 5, utf8_decode(': FEMENINO'), 0, );
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, 'MUNICIPIO', 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(52, 5, utf8_decode(': YAUHQUEMECAN'), 0, 1);

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, 'CURP', 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(58, 5, ': DILS731206MTLZNC04', 0, 0);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, 'COLONIA', 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(52, 5, utf8_decode(': SANTA MARÍA ATLIHUETZIAN'), 0, 1);

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, 'RFC', 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(58, 5, ': DILS731206424', 0, 0);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, 'DOMICILIO', 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(52, 5, utf8_decode(': CRISTOBALITO 69'), 0, 1);

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, utf8_decode('OBSERVACIÓN'), 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(58, 5, utf8_decode(': 6° CUATRIMESTRE'), 0, 0);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, 'C.P.', 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(58, 5, ': 90459', 0, 1);

$pdf->SetFillColor(0, 137, 59);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(190, 5,utf8_decode('CLAVE                                          DESCRIPCIÓN                                          CANTIDAD                PRECIO                 DESCUENTO           IMPORTE'), 0, 1, '',1);

$pdf->SetFillColor(229, 229, 229);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(190, 5,utf8_decode('10501                                   Ficha de Examen de Admisión                                    1                          $250                                                           $250'), 0, 0, '',1);

$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(60, 5, utf8_decode('TIENDAS DE ANTAD'), 0, 0);
$pdf->Cell(58, 5, utf8_decode('INSTITUCIONES BANCARIAS'), 0, 1,'B');

$pdf->SetFont('Arial', '', 8);
$pdf->Cell(25, 5, 'SAMS', 0, 0);
$pdf->Cell(35, 5, 'EXTRA', 0, 0);
$pdf->Cell(25, 5, 'BANCOMER CIE 829315', 0, 1);

$pdf->Cell(25, 5, 'SORIANA', 0, 0);
$pdf->Cell(35, 5, 'ELEKTRA', 0, 0);
$pdf->Cell(25, 5, 'SANTANDER 4836', 0, 1);

$pdf->Cell(25, 5, 'CHEDRAUI', 0, 0);
$pdf->Cell(35, 5, 'SUPERAMA', 0, 0);
$pdf->Cell(25, 5, 'HSBC RAP 2900', 0, 1);

$pdf->Cell(25, 5, 'TRANSFER', 0, 0);
$pdf->Cell(35, 5, 'WALMART', 0, 0);
$pdf->Cell(25, 5, 'SCOTIABANK 3701', 0, 1);

$pdf->Cell(25, 5, 'BANCO AZTECA', 0, 0);
$pdf->Cell(35, 5, 'BODEGA AURERRA', 0, 0);
$pdf->Cell(70, 5, 'BANORTE CEP 2412', 0, 0);
$pdf->Cell(50, 5, 'ESCANEA EL CODIGO QR', 0, 1, 'C');

$pdf->Cell(60, 5, 'FARMACIAS DEL AHORRO', 0, 0);
$pdf->Cell(70, 5, 'CITIBANAMEX 1520 01', 0, 0);
$pdf->Image('img/qr.jpeg', 155, 220, 25, 25);
$pdf->Cell(50, 5, 'PARA VER EL STATUS DE TU PAGO', 0, 1, 'C');
$pdf->Cell(135, 5, '', 0, 0);
$pdf->Cell(200, 5, 'PARA VER EL STATUS DE TU PAGO', 0, 1, 'C');

$pdf->Image('img/barra.jpeg', 12, 255, 80, 12);
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(30, 5, 'LINEA DE CAPTURA ', 0, 0, '');
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(95, 5, ': 45818404297531100237 ', 0, 0, '');
$pdf->Image('img/250.jpeg', 160, 255, 30, 12);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(1, 5, '(DOCIENTOS CINCUENTA PESOS MEXICANOS)', 0, 0, '');

$pdf->Output();

?>