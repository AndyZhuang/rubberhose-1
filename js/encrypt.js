/*
    01000001 01101110 01100100 01110010 01100101 01100001  01001100 01100101 01101111 01101110 01100101
*/

var encrypted = document.getElementById('encrypted-text'), ciphered;

switch (strategy){
  case 'type':    _encode(method, text); break
  case 'upload':  _encode(method, file); break
} function _encode(m, tf){
  switch (m){
    case 'AES':         ciphered = Cryptum.AES.encrypt(tf, key); break
    case 'DES':         ciphered = Cryptum.DES.encrypt(tf, key); break
    case 'TripleDES':   ciphered = Cryptum.TripleDES.encrypt(tf, key); break
    case 'Rabbit':      ciphered = Cryptum.Rabbit.encrypt(tf, key); break
    case 'RC4Drop':     ciphered = Cryptum.RC4Drop.encrypt(tf, key); break
  }
}

encrypted.innerText = ciphered.toString();

if (document.getElementById('encrypted-text') == null){
  // Errors.
}

function _setFormAction(v){
  var form = document.getElementById('encrypted-form'),
      text = document.getElementById('encrypted-text'),
      recipient = document.getElementById('email-recipient');
  form.setAttribute('action', v);
  form.querySelector('input[name="recipient"]').value = recipient.value;
  form.querySelector('input[name="text"]').value = text.innerText;
  form.querySelector('input[type="submit"]').click();
}
