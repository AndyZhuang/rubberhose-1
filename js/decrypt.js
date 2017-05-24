/*
    01000001 01101110 01100100 01110010 01100101 01100001  01001100 01100101 01101111 01101110 01100101
*/

var decrypted = document.getElementById('decrypted-text'), ciphered;
setTimeout(function(){
  if (document.getElementById('decrypted-text').innerText == ""){
    _setSessionNotification('decryptSuccess', false);
    window.location.pathname = "/";
  }
}, 400)

switch (strategy){
  case 'type':    _decode(method, text); break
  case 'upload':  _decode(method, file); break
} function _decode(m, tf){
  switch (m){
    case 'AES':         ciphered = Cryptum.AES.decrypt(tf, key); break
    case 'DES':         ciphered = Cryptum.DES.decrypt(tf, key); break
    case 'TripleDES':   ciphered = Cryptum.TripleDES.decrypt(tf, key); break
    case 'Rabbit':      ciphered = Cryptum.Rabbit.decrypt(tf, key); break
    case 'RC4Drop':     ciphered = Cryptum.RC4Drop.decrypt(tf, key); break
  }
}

if (ciphered == undefined){
  _setSessionNotification('decryptSuccess', false);
  window.location.pathname = "/";
}
decrypted.innerText = ciphered.toString(Cryptum.enc.Utf8);
if (document.getElementById('decrypted-text').innerText == ""){
  _setSessionNotification('decryptSuccess', false);
  window.location.pathname = "/";
}

function _setFormAction(v){
  var form = document.getElementById('decrypted-form'),
      text = document.getElementById('decrypted-text');
  form.setAttribute('action', v);
  form.querySelector('input[type="text"]').value = text.innerText
  form.querySelector('input[type="text"]');
  form.querySelector('input[type="submit"]').click();
}
