function toggleDisplay(element) {       
  element.style.display = element.style.display === 'none' ? '' : 'none'; 
};

function toggleDisplayAll(elements) { 
  for(var i=0; i<elements.length; i++) {
    toggleDisplay(elements[i]);
  }
}