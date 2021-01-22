<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    * {
        box-sizing: border-box;
    }

    body {
        font: 16px Arial;  
    }

    .autocomplete {
        position: relative;
        display: inline-block;
    }

    input {
        border: 1px solid transparent;
        background-color: #f1f1f1;
        padding: 10px;
        font-size: 16px;
    }

    input[type=text] {
        background-color: #f1f1f1;
        width: 100%;
    }

    input[type=submit] {
        background-color: DodgerBlue;
        color: #fff;
        cursor: pointer;
    }

    .autocomplete-items {
        position: absolute;
        border: 1px solid #d4d4d4;
        border-bottom: none;
        border-top: none;
        z-index: 99;
        top: 100%;
        left: 0;
        right: 0;
    }

    .autocomplete-items div {
        padding: 10px;
        cursor: pointer;
        background-color: #fff; 
        border-bottom: 1px solid #d4d4d4; 
    }

    .autocomplete-items div:hover {
        background-color: #e9e9e9; 
    }

    .autocomplete-active {
        background-color: DodgerBlue !important; 
        color: #ffffff; 
    }

    .content-1-logo{
        width: 226px;
        height: 180px;
        margin-left: 634px;
    }

    .content-1-support{
        width: 561px;
        height: 51px;
        margin-left: 520px;
        margin-top: 30px;

        font-family: Sanchez;
        font-style: normal;
        font-weight: normal;
        font-size: 68px;
        line-height: 31px;
        color: #337093;
    }
    .content-2-support{
        width: 100%;
    }

    .content-setup{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 60%;
    }

    .content-image1{
        width: 10%;
        padding-left: 10%;
    }

    .content-image2{
       width: 10%;
       padding-right: 10%;
    }

    footer {
            background: white;
            height: auto;
            width: 100vw;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            padding-top: 40px;
            color: black;
        }

        .footer-content {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }

        .footer-content h4 {

        }

        .socials {
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1rem 0 3;
        }

        .socials li {
            margin: 0 10px;
        }

        .socials a {
            text-decoration: none;
            color: black;
        }

        .socials a i {
            font-size: 1.1rem;
            transition: color .4s ease;
        }

        .socials a:hover i {
            color: gray;
        }

        .footer-bottom {
            background: white;
            width: 100vw;
            padding: 20px 0;
            text-align: center;
        }

        .footer-bottom h4 {
            font-size: 14px;
            word-spacing: 2px;
            text-transform: capitalize;
        }

        .footer-bottom span {
            text-transform: uppercase;
            opacity: .6;
            font-weight: 200;
        }

        .footer-line{
            width: 1345px;
            height: 0px;
            margin-left: 90px;
            background-color: gray;
            border: 1px solid rgba(0, 0, 0, 0.2);
            transform: rotate(-0.09deg);
        }

        .setting-a{
            text-decoration: none;
            font-size: 20pt;
            color: black;
            font-weight: bold;
        }
        .setting-a:hover{
            text-decoration:none;
        }

        .position-a{
            padding-left: 25%;
            padding-bottom: 50px;
            padding-top: 30px;
        }

</style>
</head>     
<body 	2201732626 – Prajna Tasya
	2201798686 – Kenny Ongko
	2201791654 – Dirk Alvaro
	2201795085 – Vincentius Kevin Timor
	2201767743 – Samuel Christianto Chandra
>

<div class="content">
<div class="position-a">
<a href="/" class="setting-a">X</a>
</div>
<img src="asset/logo.png" class="content-1-logo">
<div class="content-1-support">UniOwn Support</div>
<img src="asset/support1.png" style="position: absolute; left: 7%; max-width: 390px; top: 30%">
<img src="asset/support2.png" style="position: absolute; left: 68%; max-width: 390px; top: 30%">
<div class="content-2-support">
    <center>
    <form autocomplete="off" action="{{ route('searchsupport') }}" class="content-setup">
    <div class="autocomplete" style="width: 400px;">
        <input id="myInput" type="text" name="searchsupport" type="searchsupport" aria-label="Search" placeholder="Searh Your Question...">
    </div>
    <input type="submit" value="Search">
    </form>
    </center>
</div>
</div>

<footer style="padding-top: 200px">
        <div class="footer-content footer-line">
        </div>
        <div>
        <ul class="socials">
                <li><a href="#"><i class="fa fa-google"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
            </div>
        <div class="footer-bottom">
            <h4>
                Copyright &copy;2020 <span>UniOwn.com Group,</span> Inc. All Rights Reserved
            </h4>
        </div>
    </footer>


<script>
function autocomplete(inp, arr) {
  var currentFocus;
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      this.parentNode.appendChild(a);
      for (i = 0; i < arr.length; i++) {
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          b = document.createElement("DIV");
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          b.addEventListener("click", function(e) {
              inp.value = this.getElementsByTagName("input")[0].value;
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        currentFocus++;
        addActive(x);
      } else if (e.keyCode == 38) {
        currentFocus--;
        addActive(x);
      } else if (e.keyCode == 13) {
        e.preventDefault();
        if (currentFocus > -1) {
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    if (!x) return false;
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

var countries = ["Bagaimana cara paling efektif melindungi diri dari virus corona?", "Apakah virus corona dapat menyebabkan penyakit serius?", "Apa nama resmi dari virus corona baru?", "Apakah virus corona dapat menyebar melalui udara?", "Bagaimana cara melindungi diri dari penularan COVID-19 selain memakai masker?", "Bagaimana cara penyebaran virus corona yang banyak terjadi?", "Bagaimana cara menghilangkan COVID-19 dari permukaan benda sekitar kita?", "Apakah virus corona dapat menular lewat paket kiriman?", "Apakah virus corona merupakan jamur?", "Apa saja pengobatan infeksi virus corona yang ada?", "'Apakah Palestina telah menemukan vaksin virus corona?", "Adakah obat khusus untuk mencegah atau mengobati virus corona baru?"];
autocomplete(document.getElementById("myInput"), countries);
</script>

</body>
</html>