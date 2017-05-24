/*
    01000001 01101110 01100100 01110010 01100101 01100001  01001100 01100101 01101111 01101110 01100101
*/

_checkSessionNotifications();

function _checkSessionNotifications(){
	sessionStorage.uploadSuccess  == 'true'  ? (
    setTimeout(function(){
      getbyid('uploadSuccess-true').classList.add('active');
      sessionStorage.removeItem('uploadSuccess')
    }, 350)
  ) : null;
  sessionStorage.encryptSuccess == 'true'  ? (
    console.log('yay')
  ) : null;
  sessionStorage.decryptSuccess == 'false' ? (
    setTimeout(function(){
      getbyid('decryptSuccess-false').classList.add('active');
      sessionStorage.removeItem('decryptSuccess')
    }, 350)
  ) : null;
} function _setSessionNotification(a, b){
	sessionStorage.setItem(a, b);
} function _unsetSessionNotification(a, b){
	sessionStorage.removeItem(a, b);
}

function _hideNotification(t){
  t.classList.remove('active');
}

function _setNodeFormAction(v){
  var form = document.getElementById('node-form'),
      text = document.getElementById('node-text');
  form.setAttribute('action', v);
  form.querySelector('input[type="text"]').value = text.innerText
  form.querySelector('input[type="text"]');
  form.querySelector('input[type="submit"]').click();
}
