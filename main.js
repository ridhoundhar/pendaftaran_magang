//validasi form pendaftaran
function validateForm() {
    var nama = document.forms["form_magang"]["nama"].value;
    var email = document.forms["form_magang"]["email"].value;
    var jurusan = document.forms["form_magang"]["jurusan"].value;
    var institusi = document.forms["form_magang"]["institusi"].value;

    // validasi nama
    if (nama == "") {
        alert("Nama harus diisi");
        return false;
    }

    // validasi email
    var emailRegex = /^\S+@\S+\.\S+$/;
    if (!emailRegex.test(email)) {
        alert("Email tidak valid");
        return false;
    }

    // validasi jurusan
    if (jurusan == "") {
        alert("Jurusan harus diisi");
        return false;
    }

    // validasi institusi
    if (institusi == "") {
        alert("Institusi harus diisi");
        return false;
    }
}

const navbarToggler = document.querySelector('.navbar-toggler');
  const nav = document.querySelector('.nav');

  navbarToggler.addEventListener('click', function() {
    nav.classList.toggle('show');
  });

  const express = require('express');
const app = express();

app.use(express.static('htdocs'));

app.listen(3000, () => {
  console.log('Aplikasi berjalan di http://localhost:3000');
});
