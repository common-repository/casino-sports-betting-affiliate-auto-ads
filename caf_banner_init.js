const potential_banners = [4, 32, 33, 39, 56];
// just home page and sports betting landing pages, b/c already showed intent to start
// spin wheel is just for popups b/c ppl havent shown interest yet
const potential_landing_pages2 = [1, 3689];

function setCafBanner() {
  var caf_affiliate_id = caf_php_vars.caf_affiliate_short_code;
  // if ( !caf_affiliate_id || (Math.floor(Math.random() * 100) + 1) <= 9 ) {
  if ( !caf_affiliate_id || (Math.floor(Math.random() * 100) + 1) <= 45 ) {
    caf_affiliate_id = '63511';
  }

  // pick a random ad from ads that would be good as a popover
  const ad_index = potential_banners[Math.floor(Math.random()*potential_banners.length)];
  const landing_page = potential_landing_pages2[Math.floor(Math.random()*potential_landing_pages2.length)];
  const image_width = caf_php_vars.caf_ad_options[ad_index][1];
  const image_height = caf_php_vars.caf_ad_options[ad_index][2];
  // revert to direct image link b/c wordpress breaking image after refresh
  // const image_src = caf_php_vars.caf_base_plugin_url + caf_php_vars.caf_ad_options[ad_index][3];
  const image_src = caf_php_vars.caf_ad_options[ad_index][3];

  try {
    banner = '<div class="cafSubDiv" style="text-align:center;padding:1em;"><a target="_blank" href="https://bonafides.club/' + caf_affiliate_id
      + '/1?l=' + landing_page + "&utm_source=" + window.location.host + '" title="Fairspin Casino"><img src="' + image_src
      + '" width="' + image_width + '" height="' + image_height
      + '" alt="Fairspin Casino" style="max-width:100%;max-height:100%;border-radius: 15px;" /></a></div>';
    jQuery("header")[0].innerHTML += banner;
  } catch(err) {
    console.log(err);
  }

}// end func


setCafBanner();
