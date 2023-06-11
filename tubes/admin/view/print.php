<?php
require 'function.php';
$books = query("SELECT * FROM books");

$print = '<table style="border:2px solid">
  <tr>
  <th style="border:1px solid">No.</th>
  <th style="border:1px solid">judul</th>
  <th style="border:1px solid">pelajaran</th>
  <th style="border:1px solid">pengarang</th>
  <th style="border:1px solid">deskripsi</th>
  <th style="border:1px solid">link</th>
  <th style="border:1px solid">gambar</th>
  </tr>';

$i = 1;
foreach ($books as $row) {
    $print .= '<tr>
    <td style="border:1px solid">' . $i . '</td>
    <td style="border:1px solid">' . $row['judul'] . '</td>
    <td style="border:1px solid">' . $row["pelajaran"] . '</td>
    <td style="border:1px solid">' . $row["pengarang"] . '</td>
    <td style="border:1px solid">' . $row["deskripsi"] . '</td>
    <td style="border:1px solid">' . $row["link"] . '</td>
    <td style="border:1px solid">
    <img src="../assets/img/' . $row['gambar'] . '" width="80" >
    </td>
    </tr>';
    $i++;
}
$print .= "</table>";
require_once __DIR__ . '/../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf ([
    'mode' => 'c',
]);
// $mpdf->SetHeader('Header');
// $mpdf->SetFooter('Footer');

// $mpdf->SetDisplayMode('fullpage');

// $mpdf->list_indent_first_level = 0; // 1 or 0 - whether to indent the first level of a list

// Load a stylesheet
$mpdf->debug = true;
$mpdf->WriteHtml('<h1>Daftar Buku</h1><br/>');
$mpdf->WriteHTML($print);
$mpdf->Output('DataBuku.pdf', "D");