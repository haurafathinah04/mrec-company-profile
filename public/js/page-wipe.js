/* ================= MULTI-PAGE WIPE TRANSITION ================= */
(function(){
  var wipeBusy=false;
  var wipe=document.getElementById('pageWipe');
  if(!wipe) return;
  function canTransition(link,e){
    if(e.defaultPrevented || e.button!==0 || e.metaKey || e.ctrlKey || e.shiftKey || e.altKey) return false;
    if(link.target==='_blank' || link.hasAttribute('download')) return false;
    var href=link.getAttribute('href');
    if(!href || href.charAt(0)==='#' || href.indexOf('mailto:')===0 || href.indexOf('tel:')===0 || href.indexOf('javascript:')===0) return false;
    var destination=new URL(link.href,window.location.href);
    if(destination.origin!==window.location.origin) return false;
    if(destination.pathname===window.location.pathname && destination.search===window.location.search) return false;
    return true;
  }
  document.addEventListener('click',function(e){
    var link=e.target.closest('a[href]');
    if(!link || !canTransition(link,e) || wipeBusy) return;
    e.preventDefault(); wipeBusy=true;
    wipe.classList.add('on'); wipe.classList.remove('leave'); wipe.classList.add('cover');
    try{ sessionStorage.setItem('mrec-page-wipe','1'); }catch(error){}
    setTimeout(function(){ window.location.assign(link.href); },780);
  });
  window.addEventListener('pageshow',function(){
    var arriving=false;
    try{ arriving=sessionStorage.getItem('mrec-page-wipe')==='1'; sessionStorage.removeItem('mrec-page-wipe'); }catch(error){}
    if(!arriving){ wipe.classList.remove('cover','leave','on'); wipeBusy=false; return; }
    var elements=[wipe.querySelector('.panel'),wipe.querySelector('.mark'),wipe.querySelector('.ring')];
    elements.forEach(function(el){ if(el) el.style.transition='none'; });
    wipe.classList.add('on','cover'); wipe.offsetHeight;
    elements.forEach(function(el){ if(el) el.style.removeProperty('transition'); });
    setTimeout(function(){
      wipe.classList.add('leave');
      setTimeout(function(){ wipe.classList.remove('cover','leave','on'); wipeBusy=false; },600);
    },420);
  });
})();
