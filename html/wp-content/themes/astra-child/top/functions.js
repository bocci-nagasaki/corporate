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

const c = document.getElementById('carouselIndicators');
const v = document.getElementById('video');
const h = document.getElementById('navbar').clientHeight;

if (device !== 'sp') {
  const src = v.getAttribute('data-src');
  c.parentNode.removeChild(c);
  v.style.display = 'block';
  v.setAttribute('src', src);
  v.style.marginTop = `${h}px`;
} else {
  v.parentNode.removeChild(v);
  c.style.display = 'block';
  c.style.marginTop = `${h}px`;
}