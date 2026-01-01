<?php
echo "<h1>FORM PENDAFTARAN MAHASISWA BARU</h1>";
echo "<hr>";

echo "<a href='index.php'>Beranda</a> | ";
echo "<a href='profil.php'>Profil Kampus</a> | ";
echo "<a href='pendaftaran.php'>Pendaftaran</a>";
echo "<hr>";

echo "<form method='post' action='proses_daftar.php'>";

// Memulai Tabel
echo "<table border='0' cellpadding='8' cellspacing='0'>";

// Fungsi bantu untuk membuat baris tabel agar kode lebih bersih
function buat_baris($label, $input) {
    echo "<tr>
            <td width='200'><strong>$label</strong></td>
            <td>:</td>
            <td>$input</td>
          </tr>";
}

buat_baris("NIK", "<input type='text' name='nik' required size='30'>");
buat_baris("NIM (Opsional)", "<input type='text' name='nim' size='30'>");
buat_baris("Nama Lengkap", "<input type='text' name='nama' required size='30'>");

$opt_jk = "<select name='jk' required>
            <option value=''>-- Pilih --</option>
            <option value='Laki-laki'>Laki-laki</option>
            <option value='Perempuan'>Perempuan</option>
          </select>";
buat_baris("Jenis Kelamin", $opt_jk);

buat_baris("Tempat Lahir", "<input type='text' name='tempat_lahir' required size='30'>");
buat_baris("Tanggal Lahir", "<input type='date' name='tanggal_lahir' required>");
buat_baris("Alamat", "<textarea name='alamat' rows='3' cols='32' required></textarea>");
buat_baris("No. HP / WhatsApp", "<input type='text' name='nohp' required size='30'>");
buat_baris("Email", "<input type='email' name='email' size='30'>");
buat_baris("Asal Sekolah", "<input type='text' name='asal_sekolah' required size='30'>");

$opt_prodi = "<select name='prodi' required>
                <option value=''>-- Pilih Prodi --</option>
                <option value='Sistem Informasi'>Sistem Informasi</option>
                <option value='Teknologi Informasi'>Teknologi Informasi</option>
                <option value='Manajemen'>Manajemen</option>
              </select>";
buat_baris("Program Studi", $opt_prodi);

buat_baris("Username", "<input type='text' name='username' required size='30'>");
buat_baris("Password", "<input type='password' name='password' required size='30'>");

// Baris Tombol
echo "<tr>
        <td></td>
        <td></td>
        <td>
            <br>
            <button type='submit' style='padding: 5px 15px;'>Kirim Pendaftaran</button>
            <button type='reset' style='padding: 5px 15px;'>Reset</button>
        </td>
      </tr>";

echo "</table>";
echo "</form>";

echo "<hr>";
echo "<p>© 2025 Sistem Pendaftaran Mahasiswa</p>";
?>