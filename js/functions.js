/*
    01000001 01101110 01100100 01110010 01100101 01100001  01001100 01100101 01101111 01101110 01100101
*/

function rubberhose_upload(element){
  var _this = document.querySelectorAll('.cta-upload');
  var _parent = document.querySelector('.infobox');
  _parent.classList.add('wide', 'strategy_upload');
  getbyid('rubberhose_strategy').setAttribute('value', "upload");
  document.querySelector('#input').classList.add('disabled');
  getbyid('rubberhose_file').click();
  getbyid('themeSwitcher').checked ? _parent.setAttribute('action', "decrypt.php") :  _parent.setAttribute('action', "encrypt.php");
  getbyid('switcher').classList.add('disabled');
  _parent.setAttribute('enctype', "multipart/form-data");
}

function rubberhose_type(element){
  var _this = element;
  var _parent = element.parentNode;
  _this.classList.add('wide');
  _parent.classList.add('wide', 'strategy_type');
  getbyid('rubberhose_strategy').setAttribute('value', "type");
  function autosize(){
    var el = this;
    setTimeout(function(){
      el.style.cssText = 'height:auto; padding:0';
      el.style.cssText = 'height:' + el.scrollHeight + 'px';
    }, 0);
  };
  _this.addEventListener('keydown', autosize);
  getbyid('themeSwitcher').checked ? _parent.setAttribute('action', "decrypt.php") :  _parent.setAttribute('action', "encrypt.php");
  getbyid('switcher').classList.add('disabled');
  _parent.setAttribute('enctype', "multipart/form-data");
}






///

var ua = detect.parse(navigator.userAgent);
if (ua.browser.family !== "Chrome"){
  window.location.href = "/wrong-browser.php";
}



/// UPLOAD_FUNCTIONS

function selectfileTrigger(){
  var rubberhose_file = getbyid('rubberhose_file');
  rubberhose_file.click();
}
function selectfileValueChanged(_this){
  var rubberhose_file = getbyid('selectFile');
  rubberhose_file.querySelector('span.name').innerText = _this.files[0].name;
}


/// UTILITIES

function getbyid(id){
  return document.getElementById(id);
}
function hasClass(element, className) {
  return element.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(element.className);
}

function selectText(_this) {
  if (document.selection) {
    var range = document.body.createTextRange();
    range.moveToElementText(document.getElementById(_this.id));
    range.select();
  } else if (window.getSelection()) {
    var range = document.createRange();
    range.selectNode(document.getElementById(_this.id));
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);
  }
}

function changetheme(){
  var _html = document.querySelector('html'),
      _htmlTheme = _html.getAttribute('theme');
  if (_htmlTheme == 'blue'){
    _html.setAttribute('theme', 'red');
    getbyid('rubberhoseTitle').querySelector('.rTitle1').setAttribute('flood-color', '#c11432')
    getbyid('rubberhoseTitle').querySelector('.rTitle2').setAttribute('flood-color', '#c11432')
    getbyid('infobox_buttons').querySelector('input[type="submit"]').setAttribute('value', 'decrypt')
  } else if (_htmlTheme == 'red'){
    _html.setAttribute('theme', 'blue');
    getbyid('rubberhoseTitle').querySelector('.rTitle1').setAttribute('flood-color', '#0294da')
    getbyid('rubberhoseTitle').querySelector('.rTitle2').setAttribute('flood-color', '#0294da')
    getbyid('infobox_buttons').querySelector('input[type="submit"]').setAttribute('value', 'encrypt')
  }
} var ts = getbyid('themeSwitcher');
if (ts !== null){ ts.checked ? changetheme() : null; }

document.getElementsByTagName('html')[0].getAttribute('theme') == 'blue' ? (
  getbyid('rubberhoseTitle').querySelector('.rTitle1').setAttribute('flood-color', '#0294da'),
  getbyid('rubberhoseTitle').querySelector('.rTitle2').setAttribute('flood-color', '#0294da'),
  getbyid('infobox_buttons').querySelector('input[type="submit"]').setAttribute('value', 'encrypt')
) : (
  document.getElementsByTagName('html')[0].getAttribute('theme') == 'red' ? (
    getbyid('rubberhoseTitle').querySelector('.rTitle1').setAttribute('flood-color', '#c11432'),
    getbyid('rubberhoseTitle').querySelector('.rTitle2').setAttribute('flood-color', '#c11432'),
    getbyid('infobox_buttons') !== null ? (
      getbyid('infobox_buttons').querySelector('input[type="submit"]').setAttribute('value', 'decrypt')
    ) : (null)
  ) : (
    getbyid('rubberhoseTitle').querySelector('.rTitle1').setAttribute('flood-color', '#FDD10A'),
    getbyid('rubberhoseTitle').querySelector('.rTitle2').setAttribute('flood-color', '#FDD10A')
  )
);








///

function _activate(elementId){
  var element = document.getElementById(elementId);
  element.classList.add('active');
}
function _deactivate(elementId){
  var element = document.getElementById(elementId);
  element.classList.remove('active');
}

// works for the ctas
function cta_activate(elementId){
  var elementId_cta = elementId,
      elementId_div = "div" + elementId.substring(3);
  getbyid(elementId_cta).classList.add('hover');
  getbyid(elementId_div).classList.add('active');
}
function cta_deactivate(elementId){
  var elementId_cta = elementId,
      elementId_div = "div" + elementId.substring(3);
  getbyid(elementId_cta).classList.remove('hover');
  getbyid(elementId_div).classList.remove('active');
}

//works for the divs
function div_activate(elementId){
  var elementId_div = elementId,
      elementId_cta = "cta" + elementId.substring(3);
  getbyid(elementId_div).classList.add('active');
  getbyid(elementId_cta).classList.add('hover');
}
function div_deactivate(elementId){
  var elementId_div = elementId,
      elementId_cta = "cta" + elementId.substring(3);
  getbyid(elementId_div).classList.remove('active');
  getbyid(elementId_cta).classList.remove('hover');
}
