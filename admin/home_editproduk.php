<?
include"koneksi.php";
$show_query=mysql_query("select * from produk where id='$id'");
$show_detail=mysql_fetch_array($show_query);
$id="$show_detail[id]";
$kode="$show_detail[kode]";
$hit_lihat="$show_detail[hit_lihat]";
$nama="$show_detail[nama]";
$type="$show_detail[type]";
$harga="$show_detail[harga]";
$gambar="$show_detail[gambar]";
$keterangan="$show_detail[keterangan]";

?>
<style type="text/css">
<!--
.style11 {font-weight: bold}
-->
</style>

<table width="400" border="2" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><form action="?page=editproduk-act.html" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table width="95%" border="0" cellpadding="0" cellspacing="0" bgcolor="#00FFFF">
        <tr bgcolor="#00FFFF">
          <td colspan="3"><div align="center" class="style10">Tambah Produk </div></td>
          </tr>
        <tr bgcolor="#00FFFF">
          <td colspan="3"><span class="style11"></span></td>
          </tr>
        <tr bgcolor="#00FFFF">
          <td width="27%"><div align="left" class="style10">Kode</div></td>
          <td width="8%"><div align="center" class="style10"><strong>:</strong></div></td>
          <td width="65%"><div align="left" class="style11">
            <label>
            <input name="kode" type="text" id="kode" value="<? echo "$kode" ; ?>" size="20" maxlength="5" />
            </label>
          </div></td>
        </tr>
        <tr bgcolor="#00FFFF">
          <td><div align="left" class="style10">Nama</div></td>
          <td><div align="center" class="style11"><strong>:</strong></div></td>
          <td><span class="style11">
            <label>
            <input name="nama" type="text" id="nama" value="<? echo "$nama" ; ?>" size="20" maxlength="20" />
            </label>
          </span></td>
        </tr>
        <tr bgcolor="#00FFFF">
          <td><div align="left" class="style10">Type</div></td>
          <td><div align="center" class="style11"><strong>:</strong></div></td>
          <td><span class="style11">
            <label>
            <select name="type" id="type" value="<? echo "$jenis" ; ?>">
              <option>MIO</option>
              <option>MIO CW</option>
              <option>VEGA ZR DB</option>
              <option>VEGA ZR</option>
              <option>JUPITER ZX-15</option>
            </select>
            </label>
          </span></td>
        </tr>
        <tr bgcolor="#00FFFF">
          <td><div align="left" class="style10">Harga</div></td>
          <td><div align="center" class="style11"><strong>:</strong></div></td>
          <td><span class="style11">
            <label>
            <input name="harga" type="text" id="harga" value="<? echo "$harga" ; ?>" size="20" maxlength="15" />
            </label>
          </span></td>
        </tr>
        <tr bgcolor="#00FFFF">
          <td><div align="left" class="style10">Gambar</div></td>
          <td><div align="center" class="style11"><strong>:</strong></div></td>
          <td><span class="style11">
            <label>
            <input name="file_gambar" type="file" id="file_gambar" />
            </label>
          </span></td>
        </tr>
        <tr bgcolor="#00FFFF">
          <td><div align="left" class="style10">Keterangan</div></td>
          <td><div align="center" class="style11"><strong>:</strong></div></td>
          <td><span class="style11">
            <label>
            <textarea name="keterangan" cols="20" rows="3" id="keterangan"><? echo "$keterangan" ; ?>
</textarea>
            </label>
          </span></td>
        </tr>
        <tr bgcolor="#00FFFF">
          <td colspan="3">&nbsp;</td>
          </tr>
        <tr bgcolor="#00FFFF">
          <td><label>
            <div align="center">
              <input type="submit" name="Submit" value="Ubah" />
              </div>
          </label></td>
          <td>&nbsp;</td>
          <td><label>
            <div align="center">
              <input type="reset" name="Submit2" value="Batal" />
              </div>
          </label></td>
        </tr>
      </table>
        </form>
    </td>
  </tr>
</table>
