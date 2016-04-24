var images = document.getElementsByClassName('jadd-img-link'),
  src = '',
  linkTag = '';

for(var i=0; i<images.length; i++) {
  src = images[i].getAttribute('src');
  if (src) {
      linkTag = document.createElement('a');
      linkTag.appendChild(images[i].cloneNode());
      linkTag.setAttribute('href', src);
      linkTag.setAttribute('target', '_blank');
      images[i].parentNode.replaceChild(linkTag, images[i]);
  }
}
