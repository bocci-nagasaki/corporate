const device = (function () {
  const ua = navigator.userAgent;
  if (ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) {
    return 'sp';
  } else if (ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0) {
    return 'tab';
  } else {
    return 'other';
  }
})();

const sps = document.querySelectorAll('.sp');
const pcs = document.querySelectorAll('.pc');
const v = document.getElementById('video');

if (device !== 'sp') {
  const src = v.getAttribute('data-src');
  Array.prototype.forEach.call(sps, function (sp) {
    sp.parentNode.removeChild(sp);
  });
  Array.prototype.forEach.call(pcs, function (pc) {
    pc.style.display = 'block';
  });
  v.setAttribute('src', src);
} else {
  Array.prototype.forEach.call(pcs, function (pc) {
    pc.parentNode.removeChild(pc);
  });
  Array.prototype.forEach.call(sps, function (sp) {
    sp.style.display = 'block';
  });
}

document.addEventListener("DOMContentLoaded", function () {
  const loader = document.getElementById('loader');
  loader.classList.add('fadeout');
  setTimeout(function () {
    const l = document.getElementById('loader');
    l.parentNode.removeChild(l);
  }, 2000);
});
