// Ambil informasi dari form dan simpan ke file akun.txt (pseudocode)
document.querySelector('form').addEventListener('submit', function(event) {
  event.preventDefault();
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  // Simpan data ke file akun.txt (Pseudocode karena tidak bisa langsung dengan JS)
  fetch('data/accounts.txt', {
    method: 'POST',
    body: JSON.stringify({ email, password }),
    headers: {
      'Content-Type': 'application/json'
    }
  }).then(response => {
    console.log('Data disimpan');
  }).catch(error => {
    console.error('Gagal menyimpan data', error);
  });
});
