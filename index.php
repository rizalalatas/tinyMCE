<html>
  	<title>Tutorial Menggunakan TinyMCE di dalam web PHP</title>
      	<head>
            <script type="text/javascript" src="tinymce/tiny_mce.js"></script>
                <script type="text/javascript">
                     tinyMCE.init({
                  // General options
                    mode : "textareas",
                    theme : "advanced",
                    });
            </script>
        </head>
		<body>
            <table>
                 <tr>
                     <td>Judul</td>
                         <td>:</td>
                     <td><input type="text" name="Judul"></td>
                 </tr>
                 <tr>
                     <td>Tanggal</td>
                          <td>:</td>
                     <td><input type="text" name="Tanggal"></td>
                 </tr>
                 <tr>
                    <td>Isi</td>
                          <td>:</td>
                     <td><textarea name="Isi"></textarea></td>
                 </tr>
             </table>
</body>
</html>