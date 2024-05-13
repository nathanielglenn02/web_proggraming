<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
    table {
        border: 1px solid blue;
        border-collapse: collapse;
    }

    tr {
        border: 1px solid green;
    }

    td {
        border: 1px solid green;
    }

    th {
        border: 1px solid green;
    }

    .latar-yellow {
        background: yellow;
    }
    </style>
</head>

<body>
    <div>
        <table>
            <tr>
                <td class="latar-yellow" style="width:20px; max-width:30px;" colspan="2">A</td>
                <!-- <td class="latar-yellow">B</td> -->
            </tr>
            <tr>
                <td rowspan="2">C</td>
                <td>D</td>
            </tr>
            <tr>
                <!-- <td>E</td> -->
                <td>F</td>
            </tr>
        </table>
        <br>
        <!-- Latihan 1 -->
        <table>
            <tr>
                <td colspan="2">A</td>
                <td>B</td>
            </tr>
            <tr>
                <td colspan="2">C</td>
                <td>D</td>
            </tr>
            <tr>
                <td>E</td>
                <td>F</td>
                <td>G</td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <td>A</td>
                <td colspan="2">B</td>
            </tr>
            <tr>
                <td>C</td>
                <td colspan="2">D</td>
            </tr>
            <tr>
                <td>E</td>
                <td>F</td>
                <td>G</td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <td rowspan="2">A</td>
                <td>B</td>
                <td rowspan="2">C</td>
            </tr>
            <tr>
                <td colspan="2">D</td>
            </tr>
            <tr>
                <td>E</td>
                <td>F</td>
                <td>G</td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <td rowspan="2">A</td>
                <td>B</td>
                <td rowspan="2">C</td>
            </tr>
            <tr>
                <td colspan="2">D</td>
            </tr>
            <tr>
                <td colspan="2">E</td>
                <td>G</td>
            </tr>
        </table>
    </div>
    <!-- Latihan 2 -->
    <br>
    <table>
        <tr>
            <td rowspan="2">NRP</td>
            <td rowspan="2">Nama</td>
            <td colspan="2">Nilai</td>
        </tr>
        <tr>
            <td>UTS</td>
            <td>UAS</td>
        </tr>
        <tr>
            <td>160144001</td>
            <td>Tong Tong</td>
            <td>80</td>
            <td>90</td>
        </tr>
        <tr>
            <td>160144002</td>
            <td>Ting Ting</td>
            <td>70</td>
            <td>80</td>
        </tr>
        <tr>
            <td colspan="2">Rata-Rata</td>
            <td colspan="2">78</td>
        </tr>
    </table>
    <br>
    <!-- Table Heading -->
    <table>
        <tr>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Points</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>80</td>
        </tr>
    </table>
    <br>
    <!-- Latihan 3 -->
    <table>
        <thead>
            <tr>
                <th colspan="4">Mata Kuliah Favoritku</th>
            </tr>
            <tr>
                <th>Semester</th>
                <th>Kode</th>
                <th>Nama MK</th>
                <th>SKS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td rowspan="2">1</td>
                <td>160A4011</td>
                <td>Alpro</td>
                <td>6</td>
            </tr>
            <tr>
                <td>10B110</td>
                <td>Pancasila</td>
                <td>3</td>
            </tr>
            <tr>
                <td>2</td>
                <td>160A4021</td>
                <td>PBO</td>
                <td>6</td>
            </tr>
            <tr>
                <td rowspan="2">3</td>
                <td>160A4033</td>
                <td>Desweb</td>
                <td>2</td>
            </tr>
            <tr>
                <td>160A4032</td>
                <td>PBD</td>
                <td>2</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">Total SKS</td>
                <td>19</td>
            </tr>
        </tfoot>
    </table>
    <br>
</body>

</html>