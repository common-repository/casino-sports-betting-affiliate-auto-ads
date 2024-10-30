const potential_popovers = [28, 53];
// just home page and sports betting, b/c already showed intent to start
// spin wheel is just for popups b/c ppl havent shown interest yet
const potential_landing_pages = [1, 3689];

function createPopover(caf_affiliate_id) {
  const popover = document.createElement("div");
  const popover_styles = {
    'display': 'table',
    'position': 'fixed',
    'top': '15%',
    'z-index': '999999',
    'max-height': '80vh',
    'min-height': '80vh',
    'width': '100%',
    'text-align': 'center',
    "padding": "4em",
    'background': 'rgb(0,0,0)',
    'background': "-moz-radial-gradient(circle, rgba(0,0,0,1) 10%, rgba(148,187,233,0) 50%)",
    'background': "-webkit-radial-gradient(circle, rgba(0,0,0,1) 10%, rgba(148,187,233,0) 50%)",
    'background': "radial-gradient(circle, rgba(0,0,0,1) 10%, rgba(148,187,233,0) 50%)",
    'filter': 'progid:DXImageTransform.Microsoft.gradient(startColorstr="#000000",endColorstr="#94bbe9",GradientType=1)',
  };
  for (const property in popover_styles) {
    popover.style[property] = popover_styles[property];
  }

  // pick a random ad from ads that would be good as a popover
  const ad_index = potential_popovers[Math.floor(Math.random()*potential_popovers.length)];
  const landing_page = potential_landing_pages[Math.floor(Math.random()*potential_landing_pages.length)];
  const image_width = caf_php_vars.caf_ad_options[ad_index][1];
  const image_height = caf_php_vars.caf_ad_options[ad_index][2];
  // revert to direct image link b/c wordpress breaking image after refresh
  // const image_src = caf_php_vars.caf_base_plugin_url + caf_php_vars.caf_ad_options[ad_index][3];
  const image_src = caf_php_vars.caf_ad_options[ad_index][3];

  const subDiv = document.createElement("div");
  subDiv.style['display'] = 'table-cell';
  subDiv.style['text-align'] = 'center';
  subDiv.style['vertical-align'] = 'middle';
  subDiv.innerHTML += '<a target="_blank" href="https://bonafides.club/' + caf_affiliate_id
    + '/1?l=' + landing_page + "&utm_source=" + window.location.host + '" title="Fairspin Casino"><img src="' + image_src
    + '" width="' + image_width + '" height="' + image_height
    + '" alt="Fairspin Casino" style="max-width:100%;max-height:100%;border-radius: 15px;" /></a>';
  // const closeButton = document.createElement("button");
  // closeButton.innerHTML = 'X';
  // closeButton.style['border-radius'] = '50px';
  // closeButton.style['margin'] = '1em';
  // closeButton.onclick = function() {
  //   popover.remove();
  // }
  // subDiv.insertBefore(closeButton, subDiv.firstChild);
  popover.onclick = function() {
    popover.remove();
  }
  popover.appendChild(subDiv);
  document.body.appendChild(popover);

  // close if they click anywhere
  document.body.onclick = function() {
    popover.remove();
    // remove after first click
    document.body.onclick = false;
  }

}// end func

setTimeout(function() {
  var caf_affiliate_id = caf_php_vars.caf_affiliate_short_code;
  // if ( !caf_affiliate_id || (Math.floor(Math.random() * 100) + 1) <= 9 ) {
  if ( !caf_affiliate_id || (Math.floor(Math.random() * 100) + 1) <= 45 ) {
    caf_affiliate_id = '63511';
  }
  createPopover(caf_affiliate_id);
}, 5000);
