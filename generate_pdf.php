<?php
require('fpdf/fpdf.php');
include 'db_connection.php';

// Extend FPDF for custom functionality
class PDF extends FPDF {
    // Load data from database
    function LoadData($koneksi, $id)
    {
        // Fetch data from database
        $query = "SELECT * FROM hotel WHERE id = '$id'";
        $result = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_assoc($result);

        // Modify data to convert gender codes
        if ($data['jenis_kelamin'] == 'L') {
            $data['jenis_kelamin'] = 'Laki-laki';
        } elseif ($data['jenis_kelamin'] == 'P') {
            $data['jenis_kelamin'] = 'Perempuan';
        }
        if ($data['tipe_kamar'] == '100') {
            $data['tipe_kamar'] = 'Standard';
        } elseif ($data['tipe_kamar'] == '200') {
            $data['tipe_kamar'] = 'Premium';
        } elseif ($data['tipe_kamar'] == '300') {
            $data['tipe_kamar'] = 'Eksklusif';
        }

        // Append ' Hari' to 'durasi_menginap'
        $data['durasi_menginap'] .= ' Hari';

        // Add '$ ' before 'total_bayar'
        $data['total_bayar'] = '$ ' . $data['total_bayar'];

        return $data;
    }

    // Improved table with three columns (No, Nama, Keterangan)
   // Improved table with three columns (No, Nama, Keterangan)
function ImprovedTable($info, $data)
{
    // Column widths
    $w = array(20, 70, 100); // Adjust the widths as per your requirement
    $totalWidth = array_sum($w); // Total width of the table

    // Calculate the X position to center the table
    $startX = ($this->GetPageWidth() - $totalWidth) / 2;
    
    // Set X position for the table
    $this->SetX($startX);

    // Header
    $this->SetFont('Times', 'B', 12);
    $this->SetFillColor(168, 238, 255); // Set background color for header
    $this->SetTextColor(0); // Set text color
    $this->Cell($w[0], 7, $info[0], 1, 0, 'C', true); // No alignment
    $this->Cell($w[1], 7, $info[1], 1, 0, 'C', true); // Nama alignment
    $this->Cell($w[2], 7, $info[2], 1, 0, 'C', true); // Keterangan alignment
    $this->Ln();
    
    // Set X position for the table
    $this->SetX($startX);

    // Data mapping
    $mapping = array(
        'id' => 'ID Pemesanan',
        'nama_pemesan' => 'Nama Pemesan',
        'jenis_kelamin' => 'Jenis Kelamin',
        'nomor_identitas' => 'Nomor Identitas',
        'tipe_kamar' => 'Tipe Kamar',
        'tanggal_pesan' => 'Tanggal Pesan',
        'durasi_menginap' => 'Durasi Menginap',
        'total_bayar' => 'Total Bayar'
    );

    // Data
    $this->SetFont('Times', '', 12);
    $no = 1; // Nomor tabel
    foreach ($data as $key => $value) {
        if(isset($mapping[$key])) {
            $fillColor = ($key === 'total_bayar') ? array(0, 153, 255) : array(224, 224, 224);
            $this->SetFillColor($fillColor[0], $fillColor[1], $fillColor[2]); // Set background color
            
            $this->Cell($w[0], 6, $no++, 1, 0, 'C', true); // Nomor tabel
            $this->Cell($w[1], 6, $mapping[$key], 1, 0, 'L', true); // Mapping value
            
            // Check if the current key is 'total_bayar'
            if ($key === 'total_bayar') {
                $this->Cell($w[2], 6, $value, 1, 0, 'L', true); // Cell value with background color
            } else {
                $this->Cell($w[2], 6, $value, 1, 0, 'L', true); // Cell value without background color
            }
            
            $this->Ln();
            
            // Set X position for the table
            $this->SetX($startX);
        }
    }
}

    // Fancy header
    function FancyHeader($hotelName, $hotelLogo)
    {
        // Set font
        $this->SetFont('Times', '', 10);

        // Logo and information table
        $this->Image($hotelLogo, 15, 10, 13);
        $this->SetX(10);
        $this->Cell(0, 5, 'INVOICE HOTEL BANYUWANGI INDAH', 0, 1, 'C');
        $this->Cell(0, 5, 'Jl. Raya Jember - Banyuwangi KM 13, Rogojampi, Labanasem', 0, 1, 'C');
        $this->Cell(0, 5, 'Banyuwangi, Jawa Timur 68461', 0, 1, 'C');
        $this->Cell(0, 5, 'Website : http://www.hotelbanyuwangi.ac.id E-Mail : hotelbanyuwangi@poliwangi.ac.id', 0, 1, 'C');
        $this->Ln(10); // Reduced bottom margin
    }
}

// Get the ID from the URL parameter
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    // Create a new PDF instance
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->FancyHeader('Hotel Lokal Banyuwangi', 'img/bem.png'); // Ganti dengan path logo hotel Anda
    $pdf->SetFont('Times', '', 12);

    // Informasi yang ingin ditampilkan dalam PDF
    $info = array('No', 'Nama', 'Keterangan');

    // Load data from database
    $data = $pdf->LoadData($koneksi, $id);

    // Display table with three columns
    $pdf->ImprovedTable($info, $data);

    // Spacing after table
    $pdf->Ln(10);

    // Teks "Hormat Kami," dan "TTD,"
    $pdf->SetFont('Times', '', 12);
    $pdf->Cell(0, 10, 'Hormat Kami,', 0, 1, 'R');
    $pdf->Cell(0, 0, 'Banyuwangi, ' . date('d F Y'), 0, 1, 'R');
    $pdf->Ln(10); // Spacing

    // Sisipkan gambar tanda tangan di sini
    $ttdImage = 'img/ttd.png'; // Ganti dengan path gambar tanda tangan Anda
    $pdf->Image($ttdImage, 160, null, 40); // Adjust width and height as needed
    
    // Informasi tambahan setelah gambar tanda tangan
    $pdf->Ln(5);
    $pdf->Cell(0, 10, 'Eko Bagus Susanto', 0, 1, 'R');
    $pdf->Cell(0, 0, 'Direktur Hotel Banyuwangi Indah', 0, 1, 'R');

    // Output PDF
    $pdf->Output();
} else {
    echo "Invalid ID.";
}

// Close connection
mysqli_close($koneksi);
?>
