Number.prototype.format = function(c, d, t){
  var n = this,
    c = isNaN(c = Math.abs(c)) ? 0 : c,
    d = d == undefined ? ',' : d,
    t = t == undefined ? ' ' : t,
    s = n < 0 ? '-' : '',
    i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
    j = (j = i.length) > 3 ? j % 3 : 0;
  return s + (j ? i.substr(0, j) + t : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, '$1' + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : '');
};

wordEnding = function(number, endingArray) {
  number = number % 100;
  if (number >= 11 && number <= 19) {
    ending=endingArray[2];
  }
  else {
    i = number % 10;
    switch (i)
    {
      case (1): ending = endingArray[0]; break;
      case (2):
      case (3):
      case (4): ending = endingArray[1]; break;
      default: ending=endingArray[2];
    }
  }
  return ending;
};

margin = function(e) {
  var t,l,b,r;
  t = parseFloat( e.css( 'margin-top'    ).substr( 0, e.css( 'margin-top'    ).indexOf( 'px' ) ) );
  l = parseFloat( e.css( 'margin-left'   ).substr( 0, e.css( 'margin-left'   ).indexOf( 'px' ) ) );
  b = parseFloat( e.css( 'margin-bottom' ).substr( 0, e.css( 'margin-bottom' ).indexOf( 'px' ) ) );
  r = parseFloat( e.css( 'margin-right'  ).substr( 0, e.css( 'margin-right'  ).indexOf( 'px' ) ) );
  return {
    top: t,
    left: l,
    bottom: b,
    right: r
  };
};

getScrollbarWidth = function() {
  var div, width = getScrollbarWidth.width;
  if (width === undefined) {
    div = document.createElement('div');
    div.innerHTML = '<div style="width:50px;height:50px;position:absolute;left:-50px;top:-50px;overflow:auto;"><div style="width:1px;height:100px;"></div></div>';
    div = div.firstChild;
    document.body.appendChild(div);
    width = getScrollbarWidth.width = div.offsetWidth - div.clientWidth;
    document.body.removeChild(div);
  }
  return width;
};

animateHeight = function (e,h) {
  e.animate({
    height: h
  })
}